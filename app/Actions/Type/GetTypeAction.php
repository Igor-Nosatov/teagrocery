<?php

declare (strict_types = 1);

namespace App\Actions\Type;

use App\Repositories\Type\TypeRepositoryInterface;

final class GetTypeAction
{
    private $typeRepository;

    public function __construct(TypeRepositoryInterface $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function execute()
    {
        return $this->typeRepository->getTypes()->get();
    }
}
