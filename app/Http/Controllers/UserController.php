<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json([
            'users' => [
                [
                    'id' => 1,
                    'name' => 'Tharindu',
                    'email' => 'test@gmail.com',
                    'rolle' => 'admin'
                ],
                [
                    'id' => 2,
                    'name' => 'Anuhas',
                    'email' => 'anuhas@gmail.com',
                    'rolle' => 'student'
                ],
                [
                    'id' => 3,
                    'name' => 'Avantha',
                    'email' => 'avantha@gmail.com',
                    'rolle' => 'student'
                ],
            ]
        ]);
    }
}
