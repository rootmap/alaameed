<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pagedata = Slider::orderBy('id','DESC')->get();
        // dd($pagedata);
        return view('admin.pages.slider',['pagedata'=>$pagedata]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
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
            'image'=>'required|image|mimes:jpeg,bmp,png',
            'slidertitle'=>'required',
            'desc'=>'required',
        ]);
        //dd($request);
        
        $filename = "";
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/slider/';
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
        }
        $tab = new Slider;
        $tab->image = $filename;
        $tab->slidertitle = $request->slidertitle;
        $tab->desc = $request->desc;
        $tab->save();
        return redirect('admin/slider')->with('status', 'Slider Image Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider,$id=0){
        $pagedata = Slider::all();
        $data = Slider::find($id);
        // dd($pagedata);
        return view('admin.pages.slider',['pagedata'=>$pagedata,'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider,$id=0){
        $filename = $request->eximage;
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/slider/';
            $filename = time() . "." . $img->getClientOriginalExtension();
            $success = $img->move($upload, $filename);
            @unlink($filename);
        }


        $tab = Slider::find($id);
        $tab->image = $filename;
        $tab->slidertitle = $request->slidertitle;
        $tab->desc = $request->desc;
        $tab->save();
        return redirect('admin/slider')->with('status', 'Slider Image Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider,$id=0){
        $tab = Slider::find($id);
        $image_path = 'upload/slider'.'/'.$tab->image;
        @unlink($image_path);
        $tab->delete();
        return redirect('admin/slider')->with('status', 'Slider Image Delated Successfully!');
    }
}
