<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $parser = \Config\Services::parser();
        // echo $parser->setData(["content"=>"test"])->render('inc/master');
        // $this->template('list',["data"=>1]);
    }

    public function index2()
    {
        return view('welcome_message');
    }
}
