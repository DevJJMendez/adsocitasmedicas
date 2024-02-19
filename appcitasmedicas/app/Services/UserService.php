<?php
namespace App\Services;

use App\Models\Thirddata;
use Hash;

class UserService{
  public function createUserWithThirdData(array $thirddataAttributes,array $userAttributes)
  {
    $thirddata=Thirddata::create($thirddataAttributes);

    $userAttributes['third_data_id'] = $thirddata->data_id;

    // TODO: FIXME: This
    // $userAttributes['password'] = Hash:;
  }
}