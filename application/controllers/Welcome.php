<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function hello()
	{
		$this->load->view('hello');
	}

	public function siwikode()
	{
		$this->load->view('user/wisata_rek');
	}
	
	public function wis_kul()
	{
		$this->load->view('user/wisata_kul');
	}

	public function reg_kul()
	{
		$this->load->view('user/registrasi_kuliner');
	}

	public function reg_wis()
	{
		$this->load->view('user/registrasi_wisata');
	}

	public function det_masjid()
	{
		$this->load->view('user/detail/detail_masjid');
		
	}

	public function det_kampung()
	{
		$this->load->view('user/detail/detail_kampung');
		
	}

	public function det_taman()
	{
		$this->load->view('user/detail/detail_taman');
		
	}

	public function det_martabak()
	{
		$this->load->view('user/detail/detail_martabak');
	}

	public function det_soto()
	{
		$this->load->view('user/detail/detail_soto');
	}

	public function det_kue()
	{
		$this->load->view('user/detail/detail_kue');
	}
}
