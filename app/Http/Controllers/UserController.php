<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function login(Request $requestData) {
        $validateData = $requestData->validate([
            'loginUsername' => 'required',
            'loginPassword' => 'required'
        ]);

        dd($validateData);
    }

    public function register(Request $requestData) {

    }
}
