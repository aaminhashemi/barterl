<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        $users = User::all();
        return view('admin.User.index', compact('users'));
    }

    public function delete(User $user)
    {
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        if ($user->id == auth()->user()->id) {
            return back();
        } else {
            $user->delete();
            return back();
        }
    }
    public function edit(User $user)
    {
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        return view('admin.User.edit', compact('user'));
    }

    public function setAdmin(User $user)
    {
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        $user->update(['type'=>'admin']);
        return back();
    }
}
