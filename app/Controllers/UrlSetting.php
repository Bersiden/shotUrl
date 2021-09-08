<?php

namespace App\Controllers;

class UrlSetting extends BaseController
{
    public function index()
    {
      $data =[];

      for ($i=0; $i < 10; $i++) { 
        $data[]=[
            "id"=>$i,
            "urlName"=>"http://".$i,
            "shotUrl"=>"http://".$i."/shot",
        ];
      }

        $this->template('list',["data"=>$data]);
    }
}
