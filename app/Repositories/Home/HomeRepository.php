<?php
namespace App\Repositories\Home;

use App\Entity\Post;
use App\Entity\Product;
use App\Repositories\Home\HomeRepositoryInterface;

class HomeRepository  implements HomeRepositoryInterface 
{
    public function getProducts()
    {
       return Product::query();
    }

    public function getRandomPosts() 
    {
        return Post::query();
    }
}

		