<?php
namespace App\Models;
use CodeIgniter\Model;

class UrlModel extends Model
{
    protected $table = 'shoturl';
    // protected $allowedFields =["id","urlName","shotUrl"];
    // .. other member variables


    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    public function insert_data($data = array())
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }

    public function update_data($id, $data = array())
    {
        $this->db->table($this->table)->update($data, array(
            "id" => $id,
        ));
        return $this->db->affectedRows();
    }
    public function update_data_where($whre=[], $data = array())
    {
        $this->db->table($this->table)->update($data, $whre);
        return $this->db->affectedRows();
    }
    public  function setView($url){
        $builder = $this->db->table($this->table);
        $builder->set('view', 'view+1',false);
        $builder->where('shotUrl', $url);
        $builder->where('status', 1);   
        $builder->update();
    }

    // public function delete_data($id)
    // {
    //     return $this->db->table($this->table)->delete(array(
    //         "id" => $id,
    //     ));
    // }

    public function get_all_data()
    {
        $query = $this->db->query('select id,urlName,concat("'.base_url().'","/",shotUrl) as shotUrl,view from ' . $this->table.' where status = 1');
        return $query->getResultArray();
    }
    public function checkUrl($url)
    {
        $builder = $this->db->table($this->table);
        $query = $builder->getWhere(['shotUrl' => $url,'status'=>'1'], 1, 0);
        return $query->getResultArray();
    }
}