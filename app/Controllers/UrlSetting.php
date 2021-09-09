<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

use App\Models\UrlModel;
class UrlSetting extends BaseController
{
    use ResponseTrait;
    public function index()
    {
     $urlModel = new UrlModel();
     
      $data =  $urlModel->get_all_data();

        $this->template('list',["data"=>$data]);
    }
    public function getDetail($id=0){
        return $this->setResponseFormat('json')->respond(['id' => $id]);
    }
    public function delete(){
        $urlModel = new UrlModel();
        $request = \Config\Services::request();
        $id=  $request->getPost("id");
        $urlModel->update_data($id,["status"=>0]);
        
        return $this->setResponseFormat('json')->respond(['status' => true]);
    }
    public function addUrl(){
        $urlModel = new UrlModel();
        $gen = $this->generateRandomString();
        $data = $urlModel->checkUrl($gen);
        while (count($data) != 0) {
            $gen = $this->generateRandomString();
            $data = $urlModel->checkUrl($gen);
        }
        $request = \Config\Services::request();
        $url=  $request->getPost("url");
        $start=  $request->getPost("start");
        $dataAdd = [
            "shotUrl"=>$gen,
            "urlName"=>$url,
            "status"=>1,
        ];
        if($start){
            list($day,$month,$year)=explode("/",$start);
            $dataAdd["startDate"] =date("Y-m-d H:i:s",strtotime($year."/".$month."/".$day ." 00:00:00"));
        }
  
        $urlModel->insert_data($dataAdd);
            $reutn =[
            'status' => true,
            "shotUrl"=>base_url().'/'.$gen,
           
          
            ];
        return $this->setResponseFormat('json')->respond($reutn);
    }

   private function generateRandomString($length = 9) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}