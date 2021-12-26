<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class ViewController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function login() {
        return view('login');
    }

    public function sign() {
        return view('sign');
    }

    public function save(Request $request) {
      //  return $request->input();
        //validate our request--->
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:admins',
            'pwd'=>'required|min:5|max:10',
        ]);

         //Inserting Data into DB
        $admin = new Admin;
        $admin->fname = $request->fname;
        $admin->lname = $request->lname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->pwd);
        $save = $admin->save();

        if($save) {
            return back()->with('success', 'Sign up Successfull');
        } else {
            return back()->with('fail', 'Something Went Wrong | 400');
        }
    }

    public function check(Request $request) {
   //    return $request->input();
      $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:10',
    ]);


        $userinfo = Admin::where('email', '=' , $request->email)->first();

        if(!$userinfo) {
            return back()->with('fail', 'Oh Oh.. Email Not Found');
        } else {
            if(Hash::check($request->password, $userinfo->password)) {
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('admin');
            } else {
                return back()->with('fail', 'Oh Oh.. Password Not Found');
            }
        }
    }

    public function logout() {
        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }


    public function announce() {
        return view('announce');
    }

    public function save1(Request $request) {
        //  return $request->input();
          //validate our request--->
          $request->validate([
              'title'=>'required',
              'description'=>'required',
              'uploadFile'=>'required'
          ]);
  
           //Inserting Data into DB
          $post = new Post;
          $post->title = $request->title;
          $post->description = $request->description;
          $post->pic = $request->uploadFile;
          $save1 = $post->save();
  
          if($save1) {
              return back()->with('success', 'Post Successfull');            
            } else {
              return back()->with('fail', 'Something Went Wrong | 400');
          }

    

      }


        
    public function admin() {
        $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin', $data);

    

     

    }

}
