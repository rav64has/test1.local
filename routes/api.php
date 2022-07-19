<?php
use application\controllers\Api\ApiController;

route::get('/user', [ApiController::class, 'users']);
?>