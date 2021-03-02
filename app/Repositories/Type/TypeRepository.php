<?php
namespace App\Repositories\Type;

use App\Entity\Type;
use App\Repositories\Type\TypeRepositoryInterface;

class TypeRepository  implements TypeRepositoryInterface 
{
    public function getTypes()
    {
       return Type::query();
    }
}

		