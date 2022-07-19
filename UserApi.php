<?php
include 'api.php';
include './lib/db.php';
// include 'Users.php';

class UserApi extends Api
{
    public $apiName = 'users';

    /**
     * Метод GET
     * Вывод списка всех записей
     * http://ДОМЕН/users
     * @return string
     */
    public function indexAction()
    {
        $db = (new Db())->getConnect();
        $users = Users::getAll($db);
        if($users){
            return $this->response($users, 200);
        }
        return $this->response('Data not found', 404);
    }
  }