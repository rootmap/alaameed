<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pagedata = Download::where('is_status','=','1')->orderBy('id','desc')->get();
        // dd($pagedata);
        return view('admin.pages.gallery',['pagedata'=>$pagedata]);
    }

    public function downloads(){
        $pagedata = Download::where('is_status','=','2')->orderBy('id','desc')->get();
        //$pagedata = Download::all();
        // dd($pagedata);
        return view('admin.pages.download',['pagedata'=>$pagedata]);
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


    public function savefile(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image'=>'image|mimes:jpeg,bmp,png|max:1000',
            'source_file'=>'required',
        ]);
        // dd($request->source_file);
        $upload = 'upload/download/';
        $filenameimg = "";
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            
            $filenameimg = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filenameimg);
        }

        $filename = "";
        if (!empty($request->file('source_file'))) {
            $img = $request->file('source_file');
            
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }


        $tab = new Download;
        $tab->title = $request->title;
        $tab->image = $filenameimg?$filenameimg:0;
        $tab->source_file = $filename;
        $tab->is_status = 2;
        $tab->save();
        return redirect('admin/download')->with('status', 'File Upload Successfully!');
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
            'image'=>'image|mimes:jpeg,bmp,png',
        ]);
        // dd($request->source_file);
        $upload = 'upload/download/';
        $filenameimg = "";
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            
            $filenameimg = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filenameimg);
        }

       


        $tab = new Download;
        $tab->title = $request->title;
        $tab->image = $filenameimg?$filenameimg:0;
        $tab->source_file = "";
        $tab->save();
        return redirect('admin/gallery')->with('status', 'File Upload Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download,$id=0){
         $pagedata = Download::where('is_status','=','1')->orderBy('id','desc')->get();
        $data = Download::find($id);
        // dd($pagedata);
        return view('admin.pages.gallery',['pagedata'=>$pagedata,'data'=>$data]);
    }


    public function showfile(Download $download,$id=0){
         $pagedata = Download::where('is_status','=','2')->orderBy('id','desc')->get();
        $data = Download::find($id);
        // dd($pagedata);
        return view('admin.pages.download',['pagedata'=>$pagedata,'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download,$id=0){
        $upload = 'upload/download/';
        $filenameimg = $request->eximage;
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            
            $filenameimg = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filenameimg);
            @unlink($filenameimg);
        }
        $tab = Download::find($id);
        $tab->title = $request->title;
        $tab->image = $filenameimg?$filenameimg:0;
        $tab->source_file = "";
        $tab->save();
        return redirect('admin/gallery')->with('status', 'File Upload Updated Successfully!');
    }


    public function updatefile(Request $request, Download $download,$id=0){
        $upload = 'upload/download/';
        $filenameimg = $request->eximage;
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            
            $filenameimg = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filenameimg);
            @unlink($filenameimg);
        }

        $filename = $request->exfile;
        if (!empty($request->file('source_file'))) {
            $img = $request->file('source_file');
            
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($filename);
        }


        $tab = Download::find($id);
        $tab->title = $request->title;
        $tab->image = $filenameimg?$filenameimg:0;
        $tab->source_file = $filename;
        $tab->save();
        return redirect('admin/download')->with('status', 'File Upload Updated Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download,$id=0){
        $tab = Download::find($id);
       //dd($tab);
        if($tab){
            $image_path = 'upload/download'.'/'.$tab->image;
            @unlink($image_path);
            $tab->delete();
        }
        
        return redirect('admin/gallery')->with('status', 'File Upload Delated Successfully!');
    }

    public function destroyfile(Download $download,$id=0){
        $tab = Download::find($id);
       //dd($tab);
        if($tab){
            $image_path = 'upload/download'.'/'.$tab->image;
            @unlink($image_path);
            $tab->delete();
        }
        
        return redirect('admin/download')->with('status', 'File Upload Delated Successfully!');
    }
}
