<?php

declare (strict_types = 1);

namespace App\Actions\Auth;

use Illuminate\Http\Request;
use App\Repositories\Auth\AuthRepositoryInterface;

final class GetAuthUserAction
{
    private $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function execute(Request $request)
    {
        return $this->authRepository->getAuthUser($request);
    }
}
