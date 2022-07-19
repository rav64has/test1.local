<?php
namespace aplication\controllers\Api\ApiController;

use aplication\models\model_portfolio;

class ApiController extends controllers
{
  public function getUsers(Request $req)
  {
    try{
      $data =Users::all();
      return
      response()->json([
        'ok'->true,
        'data'-> $data,
      ]);
    }catch (\Exception $e){
      return
      response()->json([
        'ok'->false,
        'msg'-> $e->getMessage(),
      ]);
    }
  }
}
?>