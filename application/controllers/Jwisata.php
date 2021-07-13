<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jwisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}

	public function index() {
		$this->load->model('jwisata_model');
		$data['jwisata'] = $this->jwisata_model->getAllData();
		$this->load->view('jwisata/index',$data);
	}

	public function delete($id){
		//delete * from wisata where id = id
		$this->load->model('jwisata_model');
		$where = array('id' => $id);
		$this->jwisata_model->delete(array('id'=>$id),'jenis_wisata');
		return redirect('jwisata/index');
	}

	public function save(){	
		$this->load->view('jwisata/tambah_wisata');
	}

	public function tambah(){
		//panggil model
		$this->load->model('jwisata_model');

		//tambah data
		$data['id']= $this->input->post('id');
		$data['nama']= $this->input->post('nama');
		
		$this->jwisata_model->save($data);

		//redirect
		return redirect('jwisata/index');
	}

	public function view($id){
		$this->load->model('jwisata_model');
		$data['jwisata'] = $this->jwisata_model->findById($id);
		$this->load->view('jwisata/view',$data);
	}

	public function edit($id){
		$this->load->model('jwisata_model');
		$data['jwisata'] = $this->jwisata_model->findById($id);
		$this->load->view('jwisata/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('jwisata_model');

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['id'] = $this->input->post('id');
		$data['nama'] = $this->input->post('nama');

		//method update data
		$this->jwisata_model->update($data,$id);

		//redirect	
		return redirect('jwisata/index');
	}
	

}