<?php

declare (strict_types = 1);

namespace App\Actions\Home;

use App\Repositories\Home\HomeRepositoryInterface;

final class GetProductDataAction
{
    private $homeRepository;

    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function execute()
    {   
        $data['products'] = $this->homeRepository->getProducts()
        ->has('brands')->with('brands')
        ->has('categories')->with('categories')->take(4)
        ->inRandomOrder()->get();
        
        $data['posts'] = $this->homeRepository->getRandomPosts()->take(2)->inRandomOrder()->get();
        return $data;
    }
}
