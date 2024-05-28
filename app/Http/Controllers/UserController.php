<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //index, store, update, destroy
    // show, create, edit

    function index()
    {
        $data['title'] = 'user';
        $data['breadcrumbs'][]=[
            'title' => 'Dashboard',
            'url' => route('dashboard')
            ];
        $data['breadcrumbs'][]=[
            'title' => 'user',
            'url' => 'users.index'
            ];

            $users = User::orderBy('name')->get();
            $data['users'] = $users;

        return view('layouts/pages/user/index', $data);
    }
}