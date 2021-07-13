<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jkuliner extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}

	public function index() {
		$this->load->model('jkuliner_model');
		$data['jkuliner'] = $this->jkuliner_model->getAllData();
		$this->load->view('jkuliner/index',$data);
	}

	public function delete($id){
		//delete * from kuliner where id = id
		$this->load->model('jkuliner_model');
		$where = array('id' => $id);
		$this->jkuliner_model->delete(array('id'=>$id),'jenis_kuliner');
		return redirect('jkuliner/index');
	}

	public function save(){	
		$this->load->view('jkuliner/tambah_kuliner');
	}

	public function tambah(){
		//panggil model
		$this->load->model('jkuliner_model');

		//tambah data
		$data['id']= $this->input->post('id');
		$data['nama']= $this->input->post('nama');
		
		$this->jkuliner_model->save($data);

		//redirect
		return redirect('jkuliner/index');
	}

	public function view($id){
		$this->load->model('jkuliner_model');
		$data['jkuliner'] = $this->jkuliner_model->findById($id);
		$this->load->view('jkuliner/view',$data);
	}

	public function edit($id){
		$this->load->model('jkuliner_model');
		$data['jkuliner'] = $this->jkuliner_model->findById($id);
		$this->load->view('jkuliner/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('jkuliner_model');

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['id'] = $this->input->post('id');
		$data['nama'] = $this->input->post('nama');

		//method update data
		$this->jkuliner_model->update($data,$id);

		//redirect	
		return redirect('jkuliner/index');
	}
	

}