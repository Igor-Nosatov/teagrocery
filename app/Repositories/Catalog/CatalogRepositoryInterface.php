<?php
namespace App\Repositories\Catalog;

interface CatalogRepositoryInterface
{
  public function getProducts();
  public function getCategories();
  public function getBrands();
}
  