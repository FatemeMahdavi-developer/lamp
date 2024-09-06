<?php

namespace App\Http\Controllers\admin;

use App\base\class\admin_controller;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\project_cat_request;
use App\Models\project_cat;
use App\Trait\ResizeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use File;
class project_cat_controller extends Controller
{
    use ResizeImage;

    public function __construct(private string $view='',private string $module ='',private string $module_title ='')
    {
        $this->module = "project_cat";
        $this->view = "admin.module.".$this->module.".";
        $this->module_title = __("modules.module_name." . $this->module);

        foreach (trans("modules.crud_authorize") as $key => $value) {
            $authorize_name=sprintf("authorize:%s_%s",$key,$this->module);
            $this->middleware($authorize_name)->only($value);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    $project_cats=project_cat::filter($request->all())->orderby('id','desc')->paginate(5)->withQueryString();
     $project_cats_search=project_cat::where('catid','0')->with('sub_cats')->get();
     return view($this->view.'list',[
        'project_cats'=>$project_cats,
        'project_cats_search'=>$project_cats_search,
        'module_title'=>$this->module_title
     ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project_cats=project_cat::where('catid','0')->get();
        return view($this->view.'new',[
            'module'=>$this->module,
            'module_title'=>$this->module_title,
            'project_cats'=>$project_cats
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(project_cat_request $request)
    {
        DB::beginTransaction();
        $pic=$this->upload_file($this->module,'pic');
        $pic_banner=$this->upload_file($this->module,'pic_banner');
        $inputs=$request->validated();
        $inputs['pic']=$pic;
        if(!empty($pic)){
            $url = public_path('/upload/'.$pic);
            $path=file_get_contents($url);
            $arr_pic=explode('.',$pic);
            if(end($arr_pic)==='svg'){
                $inputs['path_svg']=$path;
            }
        }
        $inputs['pic_banner']=$pic_banner;
        $inputs['admin_id']=auth()->user()->id;
        $inputs['seo_index_kind']=$request->seo_index_kind ?? '1';
        project_cat::create($inputs);
        DB::commit();
        return back()->with('success', __('common.messages.success', [
            'module' => $this->module_title
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project_cat $project_cat)
    {
        $project_cats=project_cat::where('catid','0')->get();
        return view($this->view . "edit", [
            'module_title' => $this->module_title,
            'project_cats' => $project_cats,
            'project_cat' => $project_cat,
            'module'=>$this->module
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(project_cat_request $request, string $id)
    {
        DB::beginTransaction();
        $pic=$this->upload_file($this->module,'pic');
        $pic_banner=$this->upload_file($this->module,'pic_banner');
        $inputs = $request->validated();
        $inputs['pic'] = $pic;
        $inputs['path_svg']=null;
        if(!empty($pic)){
            $url = public_path('/upload/'.$pic);
            $path=file_get_contents($url);
            $arr_pic=explode('.',$pic);
            if(end($arr_pic)==='svg'){
                $inputs['path_svg']=$path;
            }
        }
        $inputs['pic_banner'] = $pic_banner;
        project_cat::find($id)->update($inputs);
        DB::commit();
        return back()->with('success', __('common.messages.success_edit', [
            'module' => $this->module_title
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        project_cat::where('id',$id)->delete();
        return true;
    }

    public function action_all(Request $request)
    {
        $filed_validation = ['item' =>'required'];
        $validator = Validator::make($request->all(), $filed_validation);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        return (new admin_controller())->action($request,project_cat::class);
    }

}
