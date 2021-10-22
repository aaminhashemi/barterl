<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.User.index', compact('users'));
    }

    public function delete(User $user)
    {
        if ($user->id == auth()->user()->id) {
            return back();
        } else {
            $user->delete();
            return back();
        }
    }
    public function edit(User $user)
    {
        return view('admin.User.edit', compact('user'));
    }

    public function setAdmin(User $user)
    {
        $user->update(['type'=>'admin']);
        return back();
    }
}
