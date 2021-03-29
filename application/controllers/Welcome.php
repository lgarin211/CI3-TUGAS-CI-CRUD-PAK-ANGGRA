<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataSiswa()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_siswa','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['no_telp']= $tampil->no_telp;
			$data['content']='VFormUpdateSiswa';
		}
		else
		{	
			$data['DataSiswa']=$this->MSudi->GetData('tbl_siswa');
			$data['content']='VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa()
	{
		$data['content']='VFormAddSiswa';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa()
	{
		 $add['nis']=$this->input->post('Nis');
         	 $add['nama']= $this->input->post('Nama');
         	 $add['no_telp']= $this->input->post('No_telp');  
        	 $this->MSudi->AddData('tbl_siswa',$add);
        	 redirect(site_url('Welcome/DataSiswa'));
	}



	public function UpdateDataSiswa()
	{
		 $nis=$this->input->post('txt_nis');
		 $update['nama']= $this->input->post('txt_nama');
         	 $update['no_telp']= $this->input->post('txt_no_tlp');
          	 $this->MSudi->UpdateData('tbl_siswa','nis',$nis,$update);
		 redirect(site_url('Welcome/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		 $nis=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_siswa','nis',$nis);
        	 redirect(site_url('Welcome/DataSiswa'));
	}


	
	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}