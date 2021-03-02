<?php

declare (strict_types = 1);

namespace App\Actions\Auth;

use App\Entity\User;
use App\Repositories\Auth\AuthRepositoryInterface;

final class RespondWithTokenAction
{
    private $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function execute($token)
    {
        return $this->authRepository->respondWithToken($token);
    }
}
