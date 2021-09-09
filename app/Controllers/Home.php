<?php

namespace App\Controllers;
use App\Models\UrlModel;
class Home extends BaseController
{
    public function index($d)
    {

        $urlModel = new UrlModel();

        $data = $urlModel->checkUrlLoad($d);
        if(count($data)==0){
            return view('errors/html/error_404');
        }else{
            $urlModel->setView($d);       
            return redirect()->to($data[0]['urlName']);       
        }


    }

    public function index2()
    {
        return view('welcome_message');
    }
}