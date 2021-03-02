<?php
namespace App\Repositories\Auth;
use App\Entity\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Auth\AuthRepositoryInterface;

final class AuthRepository implements AuthRepositoryInterface
{
    public function register(Request $request)
    {
        try {
            $user = User::create([
              'name' => $request->name,
              'email' => $request->email,
              'password' => bcrypt($request->password)
            ]);
          } catch(QueryException $e) {
            return response()->json(['error' => 'QueryException', 'message' => $e->getMessage()], 409);
          }
    
          $token = Auth::login($user);
          return $this->respondWithToken($token);
    }
    public function login(Request $request)
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
 
         if (! $token = Auth::attempt($credentials)) {
             return response()->json([
                 'errors' => [
                     'email' => [__('auth.failed')]
                 ]
             ], 401);
         }
         return $this->respondWithToken($token);
    }
    public function getAuthUser(Request $request)
    {
        return response()->json(auth()->user());
    }
    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    public function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL(),
        ]);
    }
}