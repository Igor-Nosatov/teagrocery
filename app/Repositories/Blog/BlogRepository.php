<?php
namespace App\Repositories\Blog;

use App\Entity\Post;
use App\Repositories\Blog\BlogRepositoryInterface;

class BlogRepository  implements BlogRepositoryInterface
{
    public function showPost() 
    {
       return Post::query();
    } 

    public function showPostByTitle($title) 
    {
       return Post::where('title',$title);
    } 
}

