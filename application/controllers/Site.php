<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('currency_format_helper');
	}

	
	public function index($offset=0)
	{
		$this->countervisitor();
		/* Pagination */
		$config['uri_segment'] = 3;
		$config['base_url'] = base_url().'site/index';
		$config['total_rows'] = $this->model->count_all();
		$config['per_page'] = 6;

		/*============================== ambil query database ==================*/
		$data['data_produk']=$this->model->GetProduk("where tb_produk.status = 'publish' group by tb_produk.id_produk order by tb_produk.id_produk desc limit ".$config['per_page']." offset ".$offset)->result_array();
		$data['rekomen'] = $this->model->GetProduk("where status = 'publish' order by rand() limit 3")->result_array();
		/*======================================================================*/

                // CSS Bootstrap               
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';            
		$config['prev_link'] = '«';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '»';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
                // Akhir CSS

		$config["num_links"] = round( $config["total_rows"] / $config["per_page"] );           
		$this->pagination->initialize($config);
		$data['pages'] = $this->pagination->create_links();

		

		$this->load->view('layout/header',$data);
		$this->load->view('site/index', $data);
		$this->load->view('layout/slidebar', $data);
		$this->load->view('layout/footer', $data);
	}

	private function countervisitor(){

		if($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_robot()){
			$agent = $this->agent->robot();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Unidentified User Agent';
		}
		
		$data_visitor = $this->model->GetVisitor("where ip = '".$_SERVER['REMOTE_ADDR']."'")->result_array();
		if($data_visitor == NULL){
			$data = array(
				'ip' => $_SERVER['REMOTE_ADDR'],
				'os' => $this->agent->platform(),
				'browser' => $agent,
				'tanggal' => date("Y-m-d H:i:s")
			);
			$this->model->Simpan('tb_visitor',$data);
			$this->session->set_userdata('pasartungging',"Ridho");
			setcookie("pasartungging",'Ridho', time()+3600*24);
		}else{
			if(!isset($_COOKIE['pasartungging'])){
				$data_visitor = $this->model->GetVisitor("where ip = '".$_SERVER['REMOTE_ADDR']."' and tanggal = '".date("Y-m-d H:i:s")."'");
				if($data_visitor != NULL){
					if(!$this->session->userdata('pasartungging.com')){
						$data = array(
							'ip' => $_SERVER['REMOTE_ADDR'],
							'os' => $this->agent->platform(),
							'browser' => $agent,
							'tanggal' => date("Y-m-d H:i:s")
						);
						$this->model->Simpan('tb_visitor', $data);
						$this->session->set_userdata('pasartungging',"Ridho");
						setcookie("pasartungging",'Ridho', time()+3600*24);
					}else{
						setcookie("pasartungging",'Ridho', time()+3600*24);
					}
				}else{
					$data = array(
							'ip' => $_SERVER['REMOTE_ADDR'],
							'os' => $this->agent->platform(),
							'browser' => $agent,
							'tanggal' => date("Y-m-d H:i:s")
					);
					$this->model->Simpan('tb_visitor', $data);
					$this->session->set_userdata('pasartungging',"Ridho");
					setcookie("pasartungging",'Ridho', time()+3600*24);
				}
			}
		}
	}

	public function category() {
		$id_k		= $this->uri->segment(3);
		$data['data']	= $this->model->per_categori($id_kat);
		

		$data['page_title'] = 'Category';
		$this->load->view('layout/header',$data);
		$this->load->view('site/category', $data);
		$this->load->view('layout/slidebar', $data);
		$this->load->view('layout/footer', $data);
	}


}
