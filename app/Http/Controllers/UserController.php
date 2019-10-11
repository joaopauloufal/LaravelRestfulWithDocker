<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return User::all();

    }

    public function store(Request $request){

        return User::create($request->all());

    }

    public function update(Request $request, User $user){

        $user->update($request->all());

        return $user;

    }

    public function show(User $user){

        return $user;

    }

    public function destroy(User $user){

        $user->delete();

        return $user;

    }
}
