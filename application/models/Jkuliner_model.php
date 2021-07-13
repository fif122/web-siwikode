<?php

class Jkuliner_model extends CI_Model{

    public $id;
    public $nama;

    public function getAllData(){
        $this->db->select('id, nama');
        $this->db->from('jenis_kuliner');
        $this->db->where('id !=', 1);
        $query = $this->db->get();
        return $query;
    }

    public function findById($id){
       $query = $this->db->get_where('jenis_kuliner',['id'=>$id]);
       return $query->row();
    }
 
    public function update($data,$id){  
        $this->db->update('jenis_kuliner',$data,array('id'=>$id));
    }

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function save($data){
        return $this->db->insert('jenis_kuliner',$data);
    }


}

?>