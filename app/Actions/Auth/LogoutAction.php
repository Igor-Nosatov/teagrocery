<?php

declare (strict_types = 1);

namespace App\Actions\Auth;

use App\Repositories\Auth\AuthRepositoryInterface;

final class LogoutAction
{
    private $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function execute()
    {
        return $this->authRepository->logout();
    }
}
