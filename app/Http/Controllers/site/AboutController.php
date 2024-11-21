<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\page;
use App\Models\team;
use App\Trait\seo_site;

class AboutController extends Controller
{
    use seo_site;
    public function __construct(public string $module='',public string $module_title='',public string $module_pic=''){
        $this->module='about';
        $this->module_title=app("setting")[$this->module."_title"] ?? __("modules.module_name_site.".$this->module);
        $this->module_pic=app("setting")[$this->module."_pic"] ?? '';
    }

    public function about()
    {
        $seo=$this->seo_site($this->module);
        $sliders=page::where('seo_url','about2')->first()?->content_site()->where('kind',3)->all();
        $contents_about=page::where('seo_url','about')->first()?->content_site()->where('kind',1)->all();

        $teams=team::where('state','1')->get();

        $arr_project=__('common.main_project');
        $i=0;
        foreach($arr_project as $k=>$v){
            if(app("setting")->get('project_'.$k.'_title')){
                $i++;
            }
        }
        $count_arr_project=$i;

        return view('site.about',[
            'module_title'=>$this->module_title,
            'module_pic'=>$this->module_pic,
            'seo'=>$seo,
            'module'=> $this->module,
            'sliders'=>$sliders,
            'contents_about'=>$contents_about,
            'count_arr_project'=>$count_arr_project,
            'arr_project'=>$arr_project,
            'teams'=>$teams
        ]);
    }
}
