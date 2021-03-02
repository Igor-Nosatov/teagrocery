<?php
namespace App\Repositories\Blog;

interface BlogRepositoryInterface
{
    public function showPost();
    public function showPostByTitle($title); 
}