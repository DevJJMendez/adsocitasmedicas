<?php
namespace App\Services;

use App\Models\Thirddata;
use Illuminate\Support\Arr;

class UserService{
  public function createUserWithThirdData(array $thirddataAttributes):Thirddata
  {
    return Thirddata::create($thirddataAttributes);
  }
}