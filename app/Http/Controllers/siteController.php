<?php

namespace App\Http\Controllers;

use App\Models\contacUs;
use App\Models\logininformation;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class siteController extends Controller
{
  public function index(){
    return view('templates/index');
  }
  public function about_us(){
    return view('templates/about');
  }
  public function contact_us(){
    return view('templates/contact');
  }
  public function form_submit(Request $req) {
    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'course' => 'required|string',
        'messages' => 'required|string|max:1000',
        'mobile' => 'required|max:12',
    ];

    $validator = Validator::make($req->all(), $rules);

    if ($validator->fails()) {
        return redirect()->route('contact-us')->withInput()->withErrors($validator);
    } else {
        try {
            $contact = new contacUs();
            $contact->name = $req->name;
            $contact->email = $req->email;
            $contact->message = $req->messages;
            $contact->mobile = $req->mobile;
            $contact->course = $req->course;
            $contact->save();

            return redirect()->route('contact-us')->with('msg', 'Query Sent Successfully!');
        } catch (\Illuminate\Database\QueryException $e) {
            // Get error message
            $errorMessage = $e->getMessage();

            // Check for duplicate entry errors
            if (str_contains($errorMessage, 'contacuss_email_unique')) {
                $errorText = 'Email is duplicate.';
            } elseif (str_contains($errorMessage, 'contacuss_mobile_unique')) {
                $errorText = 'Mobile number is duplicate.';
            } else {
                $errorText = 'Something went wrong.';
            }

            return redirect()->route('contact-us')->withInput()->with('error', $errorText);
        }
    }
}
public function login_check(Request $req){
  //echo 'Login Login';die('fgh');
  $rules=[
    'email'=>'required|email',
    'password'=>'required|max:10',
  ];
  $validator=Validator::make($req->all(),$rules);
  if($validator->fails()){
      return redirect()->back()->withInput()->withErrors($validator);
  }else{
     //echo 'else part';die('fgh');
     $login_details=new logininformation();
     $email=$req['email'];
     $pass=$req['password'];
     
     $user = logininformation::where('email', $email)->where('password', $pass)->first();
     if ($user) {
      //echo $email.','.$pass;die('if');
      Session::put('user_id', $user->id);
      Session::put('user_email', $user->email);
      Session::put('user_type', $user->user_type);
      return redirect()->route('deshborad-login')->with('msg', 'Login successful!');
     }else{
      return redirect()->back()->with('msg','Invalid login Cridential');
     }

  }
}

}
