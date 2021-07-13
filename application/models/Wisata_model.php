<?php

class Wisata_model extends CI_Model{
    public function getAllData(){
        $this->db->select('w.*, j.nama as nama_wisata,');
        $this->db->from('wisata w');
        $this->db->join('jenis_wisata j','w.jenis_wisata_id=j.id');
        $this->db->where('jenis_wisata_id !=', 1);
        $query = $this->db->get();

       return $query;
    }

    public function findById($id){
        $this->db->select('w.*, j.nama as nama_wisata,');
        $this->db->from('wisata w');
        $this->db->join('jenis_wisata j','w.jenis_wisata_id=j.id');
        $this->db->where('w.id',$id);
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

?>