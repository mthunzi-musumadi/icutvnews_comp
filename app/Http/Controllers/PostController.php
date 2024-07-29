<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function post_page()
    {
        $user = Auth::user();
        Log::info('User role:', ['role' => $user->getRoleNames()]);

        if ($user->hasRole('superadmin')) {
            return view('superadmin.post_page');
        } elseif ($user->hasRole('admin')) {
            return view('admin.post_page');
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized Access');
        }
    }

    public function add_post(Request $request)
    {
        $user = Auth::user();
        Log::info('User role:', ['role' => $user->getRoleNames()]);

        if ($user->hasRole('superadmin') || $user->hasRole('admin')) {
            // Handle adding post
            // Example logic:
            // $this->validate($request, [/* validation rules */]);
            // Post::create($request->all());
            return redirect()->route('show_post')->with('success', 'Post added successfully.');
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized Access');
        }
    }

    public function show_post()
    {
        $user = Auth::user();
        Log::info('User role:', ['role' => $user->getRoleNames()]);

        if ($user->hasRole('superadmin')) {
            return view('superadmin.show_post');
        } elseif ($user->hasRole('admin')) {
            return view('admin.show_post');
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized Access');
        }
    }

    public function delete_post($id)
    {
        $user = Auth::user();
        Log::info('User role:', ['role' => $user->getRoleNames()]);

        if ($user->hasRole('superadmin') || $user->hasRole('admin')) {
            // Handle deleting post
            // Example logic:
            // Post::findOrFail($id)->delete();
            return redirect()->route('show_post')->with('success', 'Post deleted successfully.');
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized Access');
        }
    }

    public function edit_page($id)
    {
        $user = Auth::user();
        Log::info('User role:', ['role' => $user->getRoleNames()]);

        if ($user->hasRole('superadmin')) {
            return view('superadmin.edit_page', compact('id'));
        } elseif ($user->hasRole('admin')) {
            return view('admin.edit_page', compact('id'));
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized Access');
        }
    }

    public function update_post(Request $request, $id)
    {
        $user = Auth::user();
        Log::info('User role:', ['role' => $user->getRoleNames()]);

        if ($user->hasRole('superadmin') || $user->hasRole('admin')) {
            // Handle updating post
            // Example logic:
            // $post = Post::findOrFail($id);
            // $post->update($request->all());
            return redirect()->route('show_post')->with('success', 'Post updated successfully.');
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized Access');
        }
    }
}
