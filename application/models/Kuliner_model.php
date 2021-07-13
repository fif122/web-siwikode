<?php

class Kuliner_model extends CI_Model{
    public function getAllData(){
        $this->db->select('k.*, j.nama as nama_kuliner,');
        $this->db->from('wisata k');
        $this->db->join('jenis_kuliner j','k.jenis_kuliner_id=j.id');
        $this->db->where('jenis_kuliner_id !=', 1);
        $query = $this->db->get();

       return $query;
    }

    public function findById($id){
        $this->db->select('k.*, j.nama as nama_kuliner,');
        $this->db->from('wisata k');
        $this->db->join('jenis_kuliner j','k.jenis_kuliner_id=j.id');
        $this->db->where('k.id',$id);
        $query = $this->db->get();
        return $query->row();
    }
 
    public function update($data,$id){  
        $this->db->update('wisata',$data,array('id'=>$id));
    }

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function save($data){
        return $this->db->insert('wisata',$data);
    }


}
