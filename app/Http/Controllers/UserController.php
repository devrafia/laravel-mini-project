<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(UserRequest $request)
    {
        // dd($request->all());
        $validated = $request->all();
        User::create($validated);

        return view('login', ['message' => 'Pendaftaran Berhasil']);
    }
}
