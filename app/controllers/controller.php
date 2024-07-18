<?php
require_once __DIR__ . '/../models/model.php';
class controller {
    private $model;

    public function __construct(){
        $this->model = new model();
    }

    public function login($username, $password){
        return $this->model->login($username, $password);
    }
}
?>
