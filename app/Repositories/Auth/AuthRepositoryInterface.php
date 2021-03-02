<?php
namespace App\Repositories\Auth;

use Illuminate\Http\Request;

interface AuthRepositoryInterface
{
    public function register(Request $request);
    public function login(Request $request);
    public function getAuthUser(Request $request);
    public function logout();
    public function respondWithToken($token);
} 