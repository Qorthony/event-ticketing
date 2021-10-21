<?php
namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginForm()
    {
        return Inertia::render('Auth/Login');
    }

    public function registerForm()
    {
        return Inertia::render('Auth/Register');
    }
}
