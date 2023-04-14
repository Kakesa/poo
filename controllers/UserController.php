<?php

namespace controllers;

class UserController{
    public function index(){
        require "views/users/login.php";
 }

 public function create(){
        require "views/users/create.php";
 }
}



