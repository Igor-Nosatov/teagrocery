<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Checkout\CheckoutRepositoryInterface;
use App\Repositories\Checkout\CheckoutRepository;
use App\Repositories\Type\TypeRepositoryInterface; 
use App\Repositories\Type\TypeRepository; 
use App\Repositories\Blog\BlogRepositoryInterface; 
use App\Repositories\Blog\BlogRepository; 
use App\Repositories\Cart\CartRepositoryInterface; 
use App\Repositories\Cart\CartRepository; 
use App\Repositories\Catalog\CatalogRepositoryInterface; 
use App\Repositories\Catalog\CatalogRepository; 
use App\Repositories\Contact\ContactRepositoryInterface; 
use App\Repositories\Contact\ContactRepository;
use App\Repositories\Home\HomeRepositoryInterface; 
use App\Repositories\Home\HomeRepository; 
use App\Repositories\Product\ProductRepositoryInterface; 
use App\Repositories\Product\ProductRepository; 
use App\Repositories\Auth\AuthRepositoryInterface; 
use App\Repositories\Auth\AuthRepository; 
use App\Repositories\Wishlist\WishlistRepositoryInterface;
use App\Repositories\Wishlist\WishlistRepository;
use App\Repositories\Note\NoteRepositoryInterface;
use App\Repositories\Note\NoteRepository;
use App\Repositories\Feedback\FeedbackRepositoryInterface;
use App\Repositories\Feedback\FeedbackRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
        $this->app->bind(CatalogRepositoryInterface::class, CatalogRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(HomeRepositoryInterface::class, HomeRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(TypeRepositoryInterface::class, TypeRepository::class);
        $this->app->bind(WishlistRepositoryInterface::class, WishlistRepository::class);
        $this->app->bind(NoteRepositoryInterface::class, NoteRepository::class);
        $this->app->bind(FeedbackRepositoryInterface::class, FeedbackRepository::class);
        $this->app->bind(CheckoutRepositoryInterface::class, CheckoutRepository::class);
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
    }
}
