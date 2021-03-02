<?php

namespace App\Http\Controllers;

use App\Actions\Blog\GetPostsAction;
use App\Actions\Blog\GetPostByTitleAction;

class PostController extends Controller
{
    private $getPosts;
    private $getPostByTitle;
    public function __construct(
        GetPostsAction $getPosts,
        GetPostByTitleAction $getPostByTitle
    ) {
        $this->getPosts = $getPosts;
        $this->getPostByTitle = $getPostByTitle;
    }

    public function index()
    {
        $data['posts']  = $this->getPosts->execute();
        return response()->json($data, 200);
    }

    public function show($title)
    {
        $data['post']  =  $this->getPostByTitle->execute($title);
        return response()->json($data, 200);
    }
}
