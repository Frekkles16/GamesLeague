<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class torneig extends CI_Controller {

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
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('inicio');
	}

	public function ir_registro(){
		$this->load->view('registro');
	}

	public function registro() {
        $datos=$this->input->post(); 
        if($this->input->post() != null) {
            $this->form_validation->set_rules('nom', 'nom','required', ['required'=>'<span class="text-danger">No pots deixar el nombre en blanc </span>']);
            
            $this->form_validation->set_rules('email', 'email','required|valid_email', ['required'=>'<span class="text-danger">No pots deixar el email en blanc</span>','valid_email'=>'<span class="text-danger">El correo tiene que ser valido</span>']);

            $this->form_validation->set_rules('data', 'data','required', ['required'=>'<span class="text-danger">No pots deixar la data en blanc</span>']);

            $this->form_validation->set_rules('user', 'user','required', ['required'=>'<span class="text-danger">No pots deixar el camp usuari en blanc</span>']);

            $this->form_validation->set_rules('passwd', 'passwd','required', ['required'=>'<span class="text-danger">No pots deixar la contrasenya en blanc</span>']);

            $this->form_validation->set_rules('comprov', 'comprov','required|matches[passwd]', ['required'=>'<span class="text-danger">No pots deixar el contrasenya en blanc</span>', 'matches' => '<span class="text-danger">Les contrasenyes no son iguals</span>']);
            
            
            if ($this->form_validation->run() == false){
                $this->load->view('registro',$datos);
            }
            else{
                $this->load->model('Registro');
                $this->session->iniciar=$datos["user"];
                $this->Registro->inserirDades($datos);
                $this->index();
            }
            
        } else {
            $this->load->view('registro');
        }
    }
}
