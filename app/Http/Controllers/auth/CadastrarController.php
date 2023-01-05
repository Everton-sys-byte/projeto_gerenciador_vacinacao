<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    public function store(Request $request, User $user){
        $user->create($request->all());
    }
}
