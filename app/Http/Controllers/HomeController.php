<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {

        if(Auth::id())
        {
            $post=Post::all();
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home.homepage',compact('post'));
            }
            
            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }

            else if($usertype=='superadmin')
            {
                return view('superadmin.superadminhome');
            }

            else
            {
             
                return redirect()->back();

            }

        }

    }
    public function homepage()
    {
        $post = Post::all();

        return view('home.homepage',compact('post'));
    }

    public function post_details($id)
    {
        $post = Post::find($id);
        return view('home.post_details',compact('post'));
    }

    public function contact_us()
    {
        $usertype=Auth()->user()->usertype;

        if($usertype=='user')
        {
            return view('home.contact_us');
        }
        
        else if($usertype=='admin')
        {
            return view('home.contact_us');
        }

        else if($usertype=='superadmin')
        {
            return view('home.contact_us');
        }

        else
        {
         
            return redirect()->back();

        }
    }

}
