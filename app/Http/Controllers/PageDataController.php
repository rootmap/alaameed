<?php

namespace App\Http\Controllers;
use App\PageData;
use Illuminate\Http\Request;
use DB;

class PageDataController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pagedata = PageData::where('page_type','=','1')->orderBy('id','desc')->get();
        // dd($pagedata);
        return view('admin.pages.about_us',['pagedata'=>$pagedata]);
    }
    public function business(){
        $pagedata = PageData::where('page_type','=','2')->orderBy('id','desc')->get();
        // dd($pagedata);
        return view('admin.pages.business_unit',['pagedata'=>$pagedata]);
    }
    public function service(){
        $pagedata = PageData::where('page_type','=','3')->orderBy('id','desc')->get();
        // dd($pagedata);
        return view('admin.pages.service',['pagedata'=>$pagedata]);
    }

    public function profile(){
        $pagedata = PageData::where('page_type','=','4')->orderBy('id','desc')->count();
        if($pagedata>0){
            $pagedata = PageData::where('page_type','=','4')->orderBy('id','desc')->first();
            return view('admin.pages.profile',['data'=>$pagedata]);
        }else{
            return view('admin.pages.profile');
        }
    }

    public function projects(){
        return view('admin.pages.projects');
    }

    public function content(){
        $pagedata = DB::table('tbl_contents')->count();
        if($pagedata>0){
            $pagedata = DB::table('tbl_contents')->first();
            return view('admin.pages.content',['data'=>$pagedata]);
        }else{
            return view('admin.pages.content');
        }  
    }

    public function contentsave(Request $peram){
        $this->validate($peram, [
            'posetive' => 'required',
            'jobs'=>'required',
            'success'=>'required',
            'description'=>'required',
        ]);
        $data = array(); 
        $data['posetive'] = $peram->posetive;
        $data['jobs'] = $peram->jobs;
        $data['success'] = $peram->success;
        $data['description'] = $peram->description;
        DB::table('tbl_contents')->insert($data);
        return redirect('admin/content')->with('status', 'Contents Page Data created Successfully!');
    }

    public function contentupdate(Request $peram,$id=0){
        $this->validate($peram, [
            'posetive' => 'required',
            'jobs'=>'required',
            'success'=>'required',
            'description'=>'required',
        ]);
        $data = array(); 
        $data['posetive'] = $peram->posetive;
        $data['jobs'] = $peram->jobs;
        $data['success'] = $peram->success;
        $data['description'] = $peram->description;

        DB::table('tbl_contents')
        ->where('id', $id)
        ->limit(1)
        ->update($data); 

        return redirect('admin/content')->with('status', 'Contents Page Data created Successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description'=>'required',
        ]);

        $filename = "";
        $service_type = 0;
        if(isset($request->service_type)){
            $service_type = $request->service_type;
        }
        if (!empty($request->file('thumbnail'))) {
            $img = $request->file('thumbnail');
            $upload = 'upload/business/';
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }

        $tab = new PageData;
        $tab->title = $request->title;
        $tab->thumbnail = $filename ? $filename:0;
        $tab->service_type = $service_type;
        $tab->description = $request->description;
        $tab->page_type = $request->page_type;
        $tab->save();

        if($request->page_type==1){
            return redirect('admin/about')->with('status', 'About Page Data created Successfully!');
        }
        elseif ($request->page_type==2) {
            return redirect('admin/business')->with('status', 'Business Page Data created Successfully!');
        }elseif ($request->page_type==4) {
            return redirect('admin/profile')->with('status', 'Company profile Page Data created Successfully!');
        }elseif ($request->page_type==5) {
            return redirect('admin/projects')->with('status', 'Company Projects Page Data created Successfully!');
        }else{
            return redirect('admin/service')->with('status', 'services Page Data created Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageData  $pageData
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,PageData $pageData,$id=0){
        $data = PageData::find($id);
        $dataType = $data->page_type;
        // dd($dataType);
        if($dataType == 1){
            // dd(1);
            $pagedata = PageData::where('page_type','=',$dataType)->orderBy('id','desc')->get();
            return view('admin.pages.about_us',['pagedata'=>$pagedata,'data'=>$data]);
        }
        elseif($dataType==2){
            $pagedata = PageData::where('page_type','=',$dataType)->orderBy('id','desc')->get();
            return view('admin.pages.business_unit',['pagedata'=>$pagedata,'data'=>$data]);
        }
        else
        {
            $pagedata = PageData::where('page_type','=','3')->orderBy('id','desc')->get();
            return view('admin.pages.service',['pagedata'=>$pagedata,'data'=>$data]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageData  $pageData
     * @return \Illuminate\Http\Response
     */
    public function edit(PageData $pageData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageData  $pageData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageData $pageData,$id=0){
        $filename = $request->eximage;
        if (!empty($request->file('thumbnail'))) {
            $img = $request->file('thumbnail');
            $upload = 'upload/business/';
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($filename);
        }
        $service_type = 0;
        if(isset($request->service_type)){
            $service_type = $request->service_type;
        }
        $tab = PageData::find($id);
        $tab->title = $request->title;
        $tab->thumbnail = $filename ? $filename:0;
        $tab->description = $request->description;
        $tab->service_type = $service_type;
        $tab->page_type = $request->page_type;
        $tab->save();

        if($request->page_type==1){
            return redirect('admin/about')->with('status', 'About Page Data Updated Successfully!');
        }elseif($request->page_type==2){
             return redirect('admin/business')->with('status', 'Business Page Data Updated Successfully!');
        }elseif ($request->page_type==4) {
            return redirect('admin/profile')->with('status', 'Company profile Page Data created Successfully!');
        }else{
            return redirect('admin/service')->with('status', 'services Page Data Updated Successfully!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageData  $pageData
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageData $pageData,$id=0,$pid=0){
        $tab = PageData::find($id);
        $tab->delete();
       
       if($pid==1){
            return redirect('admin/about')->with('status', 'About Page Data Delated Successfully!');
        }
        elseif($pid==2){
             return redirect('admin/business')->with('status', 'Business Page Data Delated Successfully!');
        }
        else
        {
            return redirect('admin/service')->with('status', 'services Page Data Delated Successfully!');
        }

        
        
    }
}
