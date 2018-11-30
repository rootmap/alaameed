<?php

namespace App\Http\Controllers;

use App\Index;
use App\Download;
use App\PageData;
use App\SiteSetting;
use App\Slider;
use DB;
use Auth;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class IndexController extends Controller{ 
    private function initMail(
        $to='',
        $reply='',
        $subject='',
        $body='',
        $bcc='',
        $AltBody='This is the body in plain text for non-HTML mail clients',
        $attachment='',
        $debug=0
    )
    {
          $mail = new PHPMailer(true);
          try {
              $mail->SMTPDebug = $debug;
              $mail->isSMTP(); 
              $mail->Host = 'server3.dhakawebhost.com';
              $mail->SMTPAuth = true;
              $mail->Username = 'infosend@bhuyianhost.com';
              $mail->Password = 'K=2+HK5]]W7]';

/*
              $mail->Host = 'mail.spxce.co';
              $mail->SMTPAuth = true;
              $mail->Username = 'simpleretailpos@spxce.co';
              $mail->Password = '@sdQwe123';*/

              $mail->SMTPSecure = 'tls';
              $mail->Port = 587;

              $mail->setFrom('infosend@bhuyianhost.com','Al Ameed');

              //$mail->addAddress($to, 'Fahad Bhuyian');
              $mail->addAddress($to);               // Name is optional
              // $mail->addReplyTo('info@'.$this->SiteURL, 'Reply - '.$this->SiteName);
              $mail->addReplyTo($reply);
              $mail->addCC('f.fahad.server@gmail.com');
              //$mail->addBCC('printorder@miahindian.co.uk');
              $mail->addBCC('f.fahad.server@gmail.com');
              if(!empty($bcc))
              {
                 $mail->addBCC($bcc);
              }
              

              //Attachments
              if(!empty($attachment))
              {
                 $mail->addAttachment($attachment);
              }
              //$mail->addAttachment('/var/tmp/file.tar.gz');
              //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 

              //Content
              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body    = $body;
              $mail->AltBody = $AltBody;
              $mail->send();
              return 1;
          } catch (Exception $e) {
              if($debug>0)
              {
                  return 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
              }
              else
              {
                  return 0;
              }
          }
    }

    public function login(){
        return view('auth.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
    public function index(){
        $SiteSetting = SiteSetting::first();
        $Slider = Slider::orderBy('id','DESC')->get();
        $about = PageData::where('page_type','=','1')->get();
        $business = PageData::where('page_type','=','2')->get();
        $contents = DB::table('tbl_contents')->first();
        $businessHome = PageData::where('page_type','=','2')->orderBy('id','ASC')->limit(6)->get();
        $international = PageData::where('page_type','=','3')->first();
        //dd($Slider);
        return view('frontpage.pages.home',
            [
                'SiteSetting'=>$SiteSetting,
                'about'=>$about,
                'business'=>$business,
                'international'=>$international,
                'Slider'=>$Slider,
                'businessHome'=>$businessHome,
                'contents'=>$contents,
            ]);
    }
    public function AboutUs(){
        $SiteSetting    =  SiteSetting::first();
        //dd($SiteSetting);
        $about          =  PageData::where('page_type','=','1')->get();
        $business       =  PageData::where('page_type','=','2')->get();
        // $international  =  PageData::where('page_type','=','3')->first();
        // $pageData       =  PageData::where('id','=',$id)->first();
        //dd($about);
        $Slider = Slider::orderBy('id','DESC')->get();
        return view('frontpage.pages.about',
            [
                'SiteSetting'=>$SiteSetting,
                'about'=>$about,
                'Slider'=>$Slider,
                'business'=>$business,
            ]);
    }
    
    public function download(){
        $SiteSetting    =  SiteSetting::first();
        $about          =  PageData::where('page_type','=','1')->get();
        $business       =  PageData::where('page_type','=','2')->get();
        $Download = Download::where('is_status','=','2')->orderBy('id','desc')->get();
        // $international  =  PageData::where('page_type','=','3')->first();
        // $pageData       =  PageData::where('id','=',$id)->first();
        //dd($about);
        $Slider = Slider::orderBy('id','DESC')->get();
        return view('frontpage.pages.downloads',
            [
                'SiteSetting'=>$SiteSetting,
                'Download'=>$Download,
            ]);
        
    }

    public function contact(){
        $SiteSetting = SiteSetting::first();
        $Slider = Slider::orderBy('id','DESC')->get();
        $about = PageData::where('page_type','=','1')->get();
        $business = PageData::where('page_type','=','2')->get();
        $businessHome = PageData::where('page_type','=','2')->orderBy('id','ASC')->limit(6)->get();
        $international = PageData::where('page_type','=','3')->first();
        return view('frontpage.pages.contact',[
                'SiteSetting'=>$SiteSetting,
                'about'=>$about,
                'business'=>$business,
                'international'=>$international,
                'Slider'=>$Slider,
                'businessHome'=>$businessHome,
            ]);
    }

    public function projects(){
        $SiteSetting = SiteSetting::first();
        $profile = PageData::where('page_type','=','5')->get();
        return view('frontpage.pages.projects',[
                'SiteSetting'=>$SiteSetting,
                'profile'=>$profile
            ]);
    }

    public function projectsdetails($id=0){
        $SiteSetting = SiteSetting::first();
        $profile = PageData::where('id',$id)->first();
        //dd($profile);
        return view('frontpage.pages.projectdetails',[
                'SiteSetting'=>$SiteSetting,
                'profile'=>$profile
            ]);
    }

    public function profile(){
        $SiteSetting = SiteSetting::first();
        $profile = PageData::where('page_type','=','4')->first();
        return view('frontpage.pages.profile',[
                'SiteSetting'=>$SiteSetting,
                'profile'=>$profile
            ]);
    }


    public function sendContactQuery(Request $request)
    {
        $this->validate($request,[
            'contact_name'=>'required',
            'contact_email'=>'required|email',
            'contact_subject'=>'required',
            'message'=>'required',
        ]);

        $htmlString="<h3>Dear Admin, You have contact request from website. Please readout below information. </h3> <br><br>";
        $htmlString .="<table>
                            <tr>
                                <th>Requester Name </th>
                                <td>".$request->contact_name."</td>
                            </tr>
                            <tr>
                                <th>Requester Email  </th>
                                <td><a href='mailto:".$request->contact_email."'>".$request->contact_email."</a></td>
                            </tr>
                            <tr>
                                <th>Requester Subject  </th>
                                <td>".$request->contact_subject."</td>
                            </tr>
                            <tr>
                                <th>Requester Subject  </th>
                                <td>".nl2br($request->message)."</td>
                            </tr>
                            <tr>
                                <td colspan='2'><a href='mailto:".$request->contact_email."'><b>Reply Requester</b></a></td>
                            </tr>
                       </table>";
        $htmlString .="<h3>Thank You. </h3>";

        $this->initMail(
            'rasel.alone@gmail.com',
            $request->contact_email,
            'Contact Query',
            $htmlString);

        return redirect('contact')->with('success','Thank You, Your contact requested has been submitted to concern, They will contact with you shortly.');
    }

    public function clients(){
        $SiteSetting = SiteSetting::first();
        $Slider = Slider::orderBy('id','DESC')->get();
        $about = PageData::where('page_type','=','1')->get();
        $business = PageData::where('page_type','=','2')->get();
        $businessHome = PageData::where('page_type','=','2')->orderBy('id','ASC')->limit(6)->get();
        $international = PageData::where('page_type','=','3')->first();
        return view('frontpage.pages.clients',[
                'SiteSetting'=>$SiteSetting,
                'about'=>$about,
                'business'=>$business,
                'international'=>$international,
                'Slider'=>$Slider,
                'businessHome'=>$businessHome,
            ]);
    }
    public function gallery(){
        $SiteSetting = SiteSetting::first();
        $Download = Download::where('is_status','=','1')->orderBy('id','DESC')->get();
        $business = PageData::where('page_type','=','2')->get();
        return view('frontpage.pages.gallery',[
                'SiteSetting'=>$SiteSetting,
                'gallery'=>$Download,
                'business'=>$business,
            ]);
    }
    public function services($id =0){
        $SiteSetting = SiteSetting::first();

        if($id=="1"){
            $services = PageData::where('page_type','=','3')->where('service_type', 'Manpower Supply')->get();
        }elseif($id=="2"){
            $services = PageData::where('page_type','=','3')->where('service_type', 'Operation & Maintenance')->get();
        }elseif($id=="3"){
            $services = PageData::where('page_type','=','3')->where('service_type', 'Construction Worker')->get();
        }elseif($id=="4"){
           $services = PageData::where('page_type','=','3')->where('service_type', 'Cleaning Worker')->get();
        }elseif($id=="5"){
            $services = PageData::where('page_type','=','3')->where('service_type', 'IT & Security Solution')->get();
        }elseif($id=="6"){
            $services = PageData::where('page_type','=','3')->where('service_type', 'Industrial Workers')->get();
        }else{
            $services = PageData::where('page_type','=','3')->get();
        }
        $business       =  PageData::where('page_type','=','2')->get();
        if($id!=0){
            return view('frontpage.pages.details',[
                'SiteSetting'=>$SiteSetting,
                'services'=>$services,
                'business'=>$business,
            ]);
        }else{
            return view('frontpage.pages.services',[
                'SiteSetting'=>$SiteSetting,
                'services'=>$services,
                'business'=>$business,
            ]);
        }
        
    }
    public function create(){
        //
    }
    public function store(Request $request){
        //
    }

    
    public function show(Index $index){
        //
    }

    public function edit(Index $index){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(Index $index)
    {
        //
    }
}
