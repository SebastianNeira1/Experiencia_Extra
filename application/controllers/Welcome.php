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
		

		public function __construct() {
		parent::__construct();
		$this->load->model('Mi_modelo');
		$this->load->helper('url');
	}

	public function index(){
		$transformer = $this->Mi_modelo->obtener();
		$data['transformer']= $transformer;
		$this->load->view('header',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('footer',$data);
	}
	/**
	public function editar_energon($mineral_energon){
		$mineral_energon = $mineral_energon - 10;
		$this->load->helper('url');
		$this->load->view('header',$data);
		$this->load->view('editar',$data);
		$this->load->view('footer',$data);
	}
	
	public function editar(){
		$raza=$this->input->post('Raza');
		$nombre=$this->input->post('Nombre');
		$mineral_energon=$this->input->post('Mineral_Energon');
		$lider=$this->input->post('Lider');
		$this->Mi_modelo->editar($raza,$nombre,$mineral_energon,$lider);
		redirect('');
	}
	**/
	public function editarindex($mineral_energon){
		$editable = $this->Mi_modelo->obtenerporid($mineral_energon);
		$data['editable']=$editable[0];
		$this->load->helper('url');
		$this->load->view('header',$data);
		$this->load->view('editar',$data);
		$this->load->view('footer',$data);

	}


}
