<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Mail\share;
use App\Models\project;
use App\Models\project_cat;
use App\Trait\seo_site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\Securities\Rates;

class projectController extends Controller
{
   use seo_site;
   public function __construct(private string $module='',private string $module_title='')
   {
       $this->module="project";
       $this->module_title=trans("modules.module_name_site.".$this->module);
   }

   public function index(project_cat $project_cat = null)
   {
       $module=$this->module;
       $module_title=$this->module_title;
       $breadcrumb=[];
       $params=request()->all();

       $project_cats = project_cat::where(['catid'=>'0','state'=>'1'])
           ->with('sub_cats_site')
           ->orderByRaw("`order` ASC, `id` DESC")
           ->get();

       if ($project_cat != null) {
           if (!$project_cat->state){
               abort(404);
           }
           $breadcrumb=$project_cat->parents()->where('state','1');
           $params['catid']=$project_cat->getSubcatIds($project_cat->id);;

           $project=project::siteFilter($params)
               ->paginate(5)
               ->withQueryString();
       }else{
           $project = project::siteFilter($params)
           ->paginate(5)
           ->withQueryString();
       }

       $seo=$this->seo_site($this->module,$project_cat);

       return view('site.project', compact('project_cat','project','project_cats','breadcrumb','module_title','seo','module'));
   }


   public function show(Request $request, project $project){
       $module_title=$this->module_title;
       $module=$this->module;
           if (!$project->state)
               abort(404);
           if (str_contains(request()->url(), '/print')) {
               return view('site.print.project_info', compact('project'));
           }
            $breadcrumb=$project->project_cat->parents()->where('state','1');

            $content=$project->content_site();
            $content_pics=$content->where('kind',3);
            $content_note_more=$content->where('kind',7)->first();
            $content_video=$content->where('kind',5)->first();

            // dd(phpinfo());
            $arr_project=__('common.main_project');
            $i=0;
            foreach($arr_project as $k=>$v){
                if(app("setting")->get('project_'.$k.'_title')){
                    $i++;
                }
            }
            $count_arr_project=$i;

           $seo=$this->seo_site($this->module,$project);



           $all_project =project::where('state','1')->where('id','!=',$project->id)
           ->orderByRaw("`order` ASC, `id` DESC")
           ->get();

           return view('site.project_info',
                compact(
                    'project',
                    'content_pics',
                    'content_note_more',
                    'breadcrumb',
                    'seo',
                    'module',
                    'module_title',
                    'arr_project',
                    'count_arr_project',
                    'all_project'
                )
            );
    //    }
   }

   public function mail(Request $request, $id)
   {
       $project = project::findOrFail($id);
       $validation = Validator::make($request->all(), [
           'email' => 'required|email|min:1|max:255'
       ]);
       if ($validation->fails()) {
           return response()->json($validation->errors());
       }
       Mail::to($request->email)->send(new share($project['title'], $project['url']));
       return response()->json([
           'success' => __('common.messages.email_success')
       ]);
   }
}
