<?php

declare (strict_types = 1);

namespace App\Actions\Blog;

use App\Repositories\Blog\BlogRepositoryInterface;

final class GetPostByTitleAction
{
    private $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function execute($title)
    {
        return $this->blogRepository->showPostByTitle($title)->first();
    }
}
