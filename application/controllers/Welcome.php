<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('viewprogram');
	}
	public function dashboard($nama, $gender)
	{
		$data['nama_lengkap'] = $nama;
		$data['jenis_kelamin']=$gender;
		$this->load->view('beranda', $data);
	}

	public function profil()
	{
		$this->load->view('profil');
	}
	public function utama()
	{
		$this->load->view('utama');
	}
	public function event()
	{
		$this->load->view('event');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
}
