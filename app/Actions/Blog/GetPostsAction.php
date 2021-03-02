<?php

declare (strict_types = 1);

namespace App\Actions\Blog;

use App\Repositories\Blog\BlogRepositoryInterface;

final class GetPostsAction
{
    private $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    { 
        $this->blogRepository = $blogRepository;
    }

    public function execute()
    {
        return $this->blogRepository->showPost()->orderBy('name', 'asc')->get();
    }
}
