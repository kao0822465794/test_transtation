<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('index');
	}


	public function add()
	{
		$data1 = array(
			'P_name'=>$this->input->post("P_Name"),
			'P_NameStation'=>$this->input->post("P_NameStation")
		);
		$data2 = array(
			'O_StationName'=>$this->input->post("O_StationName"),
			'O_OutTime'=>$this->input->post("O_OutTime")
		);
		$data3 = array(
			'H_To'=>$this->input->post("H_To"),
			'H_Out'=>$this->input->post("H_Out")
		);
		$data4 = array(
			'T_Namestation'=>$this->input->post("T_Namestation"),
			'T_To'=>$this->input->post("T_To")
		);
		// print_r($data1);
		$this->load->model('model');
		$this->model->add($data1,$data2,$data3,$data4);
		redirect('Welcome/select');
	}
	
	public function select()
	{
		$this->load->model('model');
		$maogao['query'] = $this->model->show();
		$this->load->view('show',$maogao);
	}

}
