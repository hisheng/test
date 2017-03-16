<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/3/16
 * Time: 14:32
 */
namespace App\Test;
use App\Log\Email;

class Hello {
    static public function hi(){
        echo 'hi world';
        Email::send();
    }
}