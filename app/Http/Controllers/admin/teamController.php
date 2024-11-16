<?php

namespace App\Http\Controllers\admin;

use App\base\class\admin_controller;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\team_request;
use App\Models\team;
use App\Trait\ResizeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class teamController extends Controller
{
    use ResizeImage;
    public function __construct(private string $view = "", private string $module = '', private string $module_title = '')
    {
        $this->view = "admin.module.team.";
        $this->module = "team";
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
        $team = team::filter($request->all())->orderby('id','desc')->paginate(5);
        return view($this->view . 'list', [
            'module_title' => $this->module_title,
            'module' => $this->module,
            'team' => $team,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->view . 'new', [
            'module_title' => $this->module_title,
            'module' => $this->module
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(team_request $request)
    {

        DB::beginTransaction();
        $pic=$this->upload_file($this->module,'pic');
        team::create([
            'title'=>$request->title,
            'alt_pic'=>$request->alt_pic,
            'position'=>$request->position,
            'pic'=>$pic
        ]);
        DB::commit();
        return back()->with('success', __('common.messages.success', [
            'module' => $this->module_title
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = team::find($id);
        return view($this->view . 'edit', [
            'module_title' => $this->module_title,
            'module' => $this->module,
            'team' =>$team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(team_request $request, team $team)
    {
        DB::beginTransaction();
        $pic=$this->upload_file($this->module,'pic');
        $team->update([
            'title'=>$request->title,
            'alt_pic'=>$request->alt_pic,
            'position'=>$request->position,
            'pic'=>$pic
        ]);
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
        team::where('id', $id)->delete();
        return true;
    }
    public function action_all(Request $request)
    {
        $filed_validation = ['item' => 'required'];
        $validator = Validator::make($request->all(), $filed_validation);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        return (new admin_controller())->action($request, team::class);
    }
}
