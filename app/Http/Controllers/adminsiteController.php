<?php

namespace App\Http\Controllers;

use App\Models\addstudent;
use App\Models\userinformation;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Validator;

class adminsiteController extends Controller
{
    public function deshborad(){
       $email=session('user_email');
       $user_id=session('user_id');
        //echo $user_id;die('fghj');
        if(session()->has('user_id')){
            $users=new userinformation();
            $data_user=$users->where('email_id',$email)->first();
           // echo print_r($data_user);die();
            return view('Admin.Deshborad',['user_data'=>$data_user]);
        }else{
            return redirect()->route('home');
        }
    }
    public function add_student_page(){
        if(session()->has('user_id')){
            return view('Admin.addstuden');
        } else{
            return redirect()->route('home'); 
        }
    }
    public function logout_session(Request $request){
        $request->session()->flush();
         return redirect()->route('home');
    }
    public function students_store(Request $request){
        $rules=[
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'course' => 'required',
            'contact' => 'required|max:12',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->route('add-student')->withInput()->withErrors($validator);
        }else{
            $student=new addstudent();
            $student->name=$request->name;
            $student->email_id=$request->email;
            $student->contact=$request->contact;
            $student->course=$request->course;
            $student->image='testng';
            $student->save();
            return redirect()->route('add-student')->with('success','Student added successfully!');
        }
    }
    public function view_student(){
        $student=new addstudent();
        $user_data=$student->all();
        return view('Admin.viewstudent',['students'=>$user_data]);
    }
    public function edit($id){
        $student = addstudent::findOrFail($id);
        return view('Admin.studentupdate', compact('student'));
    }
    public function destroy($id){
        $student = addstudent::findOrFail($id);
        $student->delete();
        return redirect()->route('view-student')->with('msg','Student Deleted successfully!');  
    }
    public function update($id){
        echo $id;die('update id');
    }
}
