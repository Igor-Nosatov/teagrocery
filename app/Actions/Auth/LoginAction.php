<?php

declare (strict_types = 1);

namespace App\Actions\Auth;

use App\Entity\User;
use App\Repositories\Auth\AuthRepositoryInterface;
use Illuminate\Http\Request;

final class LoginAction
{
    private $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function execute(Request $request)
    {
        return $this->authRepository->login($request);
    }
}
