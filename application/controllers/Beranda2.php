<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*//$this->load->view('welcome_message');
		echo "<h3>List Categories</h3>";
		$data = $this->Categories_model->getAlldata();
		//var_dump($data);
		$vdata = "<ol>";
		foreach ($data as $row)
		{
			$vdata .="<li>".$row->CategoryName."</li>";
		}
		$vdata .="</ol>";
		echo $vdata;*/
		
		$data['judul'] = heading("List Categories",3);
		$data['categories'] = $this->Categories_model->getAlldata();
		$this->load->view('view_categories',$data);
		
	}	
		
	public function kedua ($nama, $usia){
		$this->load->helper("My_string");
		
		echo "Nama Saya : {$nama} usia : {$usia}";
		echo "<br>".$this->_gaji(3);
		
		$uri ='<ol>';
		$uri .='<li>'.$this->uri->segment(1).'</li>';
		$uri .='<li>'.$this->uri->segment(2).'</li>';
		$uri .='<li>'.$this->uri->segment(3).'</li>';
		$uri .='<li>'.$this->uri->segment(4).'</li>';
		echo $uri;
	}

	private function _gaji($jmlbulan)
	{
		$gaji = (gapok + tunjangan) * $jmlbulan;
		return "Gaji : ".format_currency($gaji);
	}
	
}