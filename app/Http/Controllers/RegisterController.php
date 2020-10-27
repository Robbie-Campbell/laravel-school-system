<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        $teacher = new Register();

        $teacher->first_name = request("first_name");
        $teacher->last_name = request("last_name");
        $teacher->email = request("email");
        $teacher->password = Hash::make(request("password"));
        $teacher->role = "teacher";

        $teacher->save();

        return redirect("login");
    }
}
