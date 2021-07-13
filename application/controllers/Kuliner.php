<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuliner extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}

	public function index() {
		$this->load->model('kuliner_model');
		$data['kuliner'] = $this->kuliner_model->getAllData();
		$this->load->view('kuliner/index',$data);
	}

	public function delete($id){
		//delete * from kuliner where id = id
		$this->load->model('kuliner_model');
		$where = array('id' => $id);
		$this->kuliner_model->delete(array('id'=>$id),'');
		return redirect('kuliner/index');
	}

	public function save(){	
		$this->load->model('jkuliner_model');
		$data['jkuliner'] = $this->jkuliner_model->getAllData();
		$this->load->view('kuliner/tambah_kuliner',$data);
	}

	public function tambah(){
		//panggil model
		$this->load->model('kuliner_model');

		//tambah data
		$data['nama']= $this->input->post('nama');
		$data['deskripsi']= $this->input->post('deskripsi');
		$data['jenis_kuliner_id']= $this->input->post('jenis_kuliner_id');
		$data['fasilitas']= $this->input->post('fasilitas');
		$data['bintang']= $this->input->post('bintang');
		$data['kontak']= $this->input->post('kontak');
		$data['alamat']= $this->input->post('alamat');
		$data['latlong']= $this->input->post('latlong');
		$data['email']= $this->input->post('email');
		$data['web']= $this->input->post('web');
		$data['jenis_wisata_id']=1;
		
		$this->kuliner_model->save($data);

		//redirect
		return redirect('kuliner/index');
	}

	public function view($id){
		$this->load->model('kuliner_model');
		$data['kuliner'] = $this->kuliner_model->findById($id);
		$this->load->view('kuliner/view',$data);
	}

	public function edit($id){
		$this->load->model('kuliner_model');
		$data['kuliner'] = $this->kuliner_model->findById($id);
		$this->load->model('jkuliner_model');
		$data['jkuliner'] = $this->jkuliner_model->getAllData();
		$this->load->view('kuliner/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('kuliner_model');

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
	
		$data['nama']= $this->input->post('nama');
		$data['deskripsi']= $this->input->post('deskripsi');
		$data['jenis_kuliner_id']= $this->input->post('jenis_kuliner_id');
		$data['fasilitas']= $this->input->post('fasilitas');
		$data['bintang']= $this->input->post('bintang');
		$data['kontak']= $this->input->post('kontak');
		$data['alamat']= $this->input->post('alamat');
		$data['latlong']= $this->input->post('latlong');
		$data['email']= $this->input->post('email');
		$data['web']= $this->input->post('web');

		//method update data
		$this->kuliner_model->update($data,$id);

		//redirect	
		return redirect('kuliner/index');
	}
	

}