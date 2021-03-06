<?php 
	class Portfolio extends CI_Controller
	{
		function index()
		{
			$this->load->model('portofolio_model');
			$data['incl'] = 'portfolio';
			$data['port'] = $this->portofolio_model->get_port(12,0);
			$data['kategori'] = 'all';
			$data['tahun'] = 'any';
			$data['new_exist'] = false;
			$data['old_exist'] = ($this->portofolio_model->get_port(12,12)->num_rows() > 0);
			$data['page'] = 1;
			$this->load->view('page',$data);
		}

		function page($p)
		{
			$this->load->model('portofolio_model');
			$data['incl'] = 'portfolio';
			$data['kategori'] = 'all';
			$data['tahun'] = 'any';
			if ($p > 1){
				$data['port'] = $this->portofolio_model->get_port(12,($p-1)*12);
				$data['new_exist'] = ($this->portofolio_model->get_port(12,($p-2)*12)->num_rows() > 0);
				$data['old_exist'] = ($this->portofolio_model->get_port(12,$p*12)->num_rows() > 0);
				$data['page'] = $p;
				$this->load->view('page',$data);
			}else{
				redirect('portfolio');
			}
		}
		function category($kat,$tahun,$p=1)
		{
			$this->load->model('portofolio_model');
			$data['incl'] = 'portfolio';
			$data['kategori'] = $kat;
			$data['tahun'] = $tahun;
			$per_page = 9;

			if ((($kat == 'all')&&($tahun == 'any')) || !is_numeric($p)) {
				redirect('portfolio');
			} else {
				if ($p > 1){
					$data['new_exist'] = ($this->portofolio_model->get_port_kat($kat,$tahun,$per_page,($p-2)*$per_page)->num_rows() > 0);
				}else{
					$data['new_exist'] = false;
				}
				$data['old_exist'] = ($this->portofolio_model->get_port_kat($kat,$tahun,$per_page,$p*$per_page)->num_rows() > 0);
				$data['port'] = $this->portofolio_model->get_port_kat($kat,$tahun,$per_page,($p-1)*$per_page);
				$data['page'] = $p;
				$this->load->view('page',$data);
			}
		}

		function post($id)
		{
			if (!is_numeric($id)) {
				redirect('portfolio');
			}
			$this->load->model('portofolio_model');
			$data['incl'] = 'post_portfolio';
			$data['post'] = $this->portofolio_model->get_port_id($id)->row();
			$this->load->view('page',$data);
		}
	}
 ?>