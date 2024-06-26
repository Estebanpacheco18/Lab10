<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Note;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
}
// ID del curso:
// Materias:
// 1. Cálculo: 324
// 2. Comprensión: 325
// 3. Desarrollo: 326