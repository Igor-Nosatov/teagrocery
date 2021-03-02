<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Wishlist\GetWishlistAction;
use App\Actions\Wishlist\SaveWishlistAction;
use App\Actions\Wishlist\UpdateWishlistAction;
use App\Actions\Wishlist\DeleteWishlistAction;

class WishlistController extends Controller
{
    private $getWishlist;
    private $saveWishlist;
    private $updateWishlist;
    private $deleteWishlist;

    public function __construct(
        GetWishlistAction $getWishlist,
        SaveWishlistAction $saveWishlist,
        UpdateWishlistAction $updateWishlist,
        DeleteWishlistAction $deleteWishlist
    ) {
        $this->getWishlist = $getWishlist;
        $this->saveWishlist = $saveWishlist;
        $this->updateWishlist = $updateWishlist;
        $this->deleteWishlist = $deleteWishlist;
    }

    public function index()
    {
        $data['wishes'] = $this->getWishlist->execute();
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        return  $this->saveWishlist->execute($request);
    }

    public function update(Request $request, $id)
    {
        return $this->updateWishlist->execute($request, $id);
    }

    public function delete($id)
    {
        return $this->deleteWishlist->execute($id);
    }
}
