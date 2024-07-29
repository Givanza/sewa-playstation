<?php

namespace App\Controllers;

class UserController extends BaseController{
    public function user(){
        return view('user/indexUser.php');
    }
    public function history(){
        return view('user/history.php');
    }
    public function payments(){
        return view('user/payments.php');
    }
}