<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;
use App\Download;
use App\PageData;
use App\Slider;
use DB;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $SiteSetting = SiteSetting::orderBy('id','desc')->count();
        // dd($SiteSetting);
        if($SiteSetting>0)
        {
            $SiteSetting = SiteSetting::orderBy('id','desc')->first();
            return view('admin.pages.SiteSetting',['data'=>$SiteSetting]);
        }
        else
        {
            return view('admin.pages.SiteSetting');
        }

    }
    public function dashboard(){
        $SiteSetting = SiteSetting::orderBy('id','desc')->first();
        $SiteSettinga = SiteSetting::orderBy('id','desc')->count();
        $Slider = Slider::orderBy('id','DESC')->count();
        $about = PageData::where('page_type','=','1')->count();
        $business = PageData::where('page_type','=','2')->count();
        $contents = DB::table('tbl_contents')->count();
        $businessHome = PageData::where('page_type','=','2')->count();
        $service = PageData::where('page_type','=','3')->count();
        $ga = Download::orderBy('id','desc')->count();
        $profile = PageData::where('page_type','=','4')->count();
        // $international = PageData::where('page_type','=','5')->first();

        return view('admin.pages.dashboard',
            [
                'data'=>$SiteSetting,
                'Slider'=>$Slider,
                'about'=>$about,
                'SiteSettinga'=>$SiteSettinga,
                'business'=>$business,
                'contents'=>$contents,
                'service'=>$service,
                'gallery'=>$ga,
                'profile'=>$profile
            ]);
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
            'name' => 'required',
            'logo'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
        ]);
       // echo $request->name;
       // exit();
       $filename = "";
        if (!empty($request->file('logo'))) {
            $img = $request->file('logo');
            $upload = 'upload/SiteSetting/';
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }
        $tab = new SiteSetting;
        $tab->name = $request->name;
        $tab->logo = $filename;
        $tab->email = $request->email;
        $tab->phone_number = $request->phone_number;
        $tab->address = $request->address;
        $tab->opan_close = $request->opan_close;
        $tab->save();
        return redirect('admin/site/setting')->with('status', 'Site Setting created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $siteSetting,$id=0){
        $filename = $request->eximage;
        if (!empty($request->file('logo'))) {
            $img = $request->file('logo');
            $upload = 'upload/SiteSetting/';
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($filename);
        }
        $tab = SiteSetting::find($id);
        $tab->name = $request->name;
        $tab->logo = $filename;
        $tab->email = $request->email;
        $tab->phone_number = $request->phone_number;
        $tab->address = $request->address;
        $tab->opan_close = $request->opan_close;
        $tab->save();
        return redirect('admin/site/setting')->with('status', 'Site Setting Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $siteSetting)
    {
        //
    }
}
