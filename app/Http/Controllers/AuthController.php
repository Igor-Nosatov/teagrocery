<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Auth\GetAuthUserAction;
use App\Actions\Auth\RegisterAction;
use App\Actions\Auth\LoginAction;
use App\Actions\Auth\RespondWithTokenAction;
use App\Actions\Auth\LogoutAction;

class AuthController extends Controller
{
    private $getAuthUser;
    private $register;
    private $login;
    private $respondWithTokenAction;
    private $logout;

    public function __construct(
        GetAuthUserAction $getAuthUser,
        RegisterAction $register,
        LoginAction $login,
        RespondWithTokenAction $respondWithTokenAction,
        LogoutAction $logout
    )
    {
        $this->getAuthUser = $getAuthUser;
        $this->register = $register;
        $this->login = $login;
        $this->respondWithTokenAction = $respondWithTokenAction;
        $this->logout = $logout;
    }

    public function register(Request $request)
    {
        return $this->register->execute($request);
    }

    public function login(Request $request)
    {
        return $this->login->execute($request);
    }

    public function getAuthUser(Request $request)
    {
        return $this->getAuthUser->execute($request);
    }

    public function logout()
    {
        return $this->logout->execute();
    }

    protected function respondWithToken($token)
    {
        return $this->respondWithTokenAction->execute($token);
    }

    public static function unauthorized()
    {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public static function forbidden()
    {
        return response()->json(['error' => 'Forbidden'], 403);
    }
}
