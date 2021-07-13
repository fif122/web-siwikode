<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}

	public function index() {
		$this->load->model('wisata_model');
		$data['wisata'] = $this->wisata_model->getAllData();
		$this->load->view('wisata/index',$data);
	}

	public function delete($id){
		//delete * from wisata where id = id
		$this->load->model('wisata_model');
		$where = array('id' => $id);
		$this->wisata_model->delete(array('id'=>$id),'wisata');
		return redirect('wisata/index');
	}

	public function save(){	
		$this->load->model('jwisata_model');
		$data['jwisata'] = $this->jwisata_model->getAllData();
		$this->load->view('wisata/tambah_wisata',$data);
	}

	public function tambah(){
		//panggil model
		$this->load->model('wisata_model');

		//tambah data
		$data['nama']= $this->input->post('nama');
		$data['deskripsi']= $this->input->post('deskripsi');
		$data['jenis_wisata_id']= $this->input->post('jenis_wisata_id');
		$data['fasilitas']= $this->input->post('fasilitas');
		$data['bintang']= $this->input->post('bintang');
		$data['kontak']= $this->input->post('kontak');
		$data['alamat']= $this->input->post('alamat');
		$data['latlong']= $this->input->post('latlong');
		$data['email']= $this->input->post('email');
		$data['web']= $this->input->post('web');
		$data['jenis_kuliner_id']=1;
		
		$this->wisata_model->save($data);

		//redirect
		return redirect('wisata/index');
	}

	public function view($id){
		$this->load->model('wisata_model');
		$data['wisata'] = $this->wisata_model->findById($id);
		$this->load->view('wisata/view',$data);
	}

	public function edit($id){
		$this->load->model('wisata_model');
		$data['wisata'] = $this->wisata_model->findById($id);
		$this->load->model('jwisata_model');
		$data['jwisata'] = $this->jwisata_model->getAllData();
		$this->load->view('wisata/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('wisata_model');

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['nama']= $this->input->post('nama');
		$data['deskripsi']= $this->input->post('deskripsi');
		$data['jenis_wisata_id']= $this->input->post('jenis_wisata_id');
		$data['fasilitas']= $this->input->post('fasilitas');
		$data['bintang']= $this->input->post('bintang');
		$data['kontak']= $this->input->post('kontak');
		$data['alamat']= $this->input->post('alamat');
		$data['latlong']= $this->input->post('latlong');
		$data['email']= $this->input->post('email');
		$data['web']= $this->input->post('web');

		//method update data
		$this->wisata_model->update($data,$id);

		//redirect	
		return redirect('wisata/index');
	}
	

}