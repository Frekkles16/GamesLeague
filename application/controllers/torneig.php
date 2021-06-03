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
        session_start();
        // $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->library('encrypt');
    }

	public function index()
	{
		$this->load->view('inicio');
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
            	// $datos["passwd"] = $this->encrypt->encode($datos["passwd"]);
                $this->load->model('Registro');
                $this->Registro->inserirDades($datos);
                $this->load->model('datos');

                $datos['mios'] = $this->datos->mios();
                $this->load->view('perfil', $datos);


                $datos2 = $datos['mios']->result_array();
                $_SESSION["id"] = $datos2[0]['Id_Usuari'];
                // $this->index();	
            }
            
        } else {
            $this->load->view('registro');
        }
    }

    public function login()
    {
    	if(!isset( $_SESSION['user'])){
    	
	        $datos=$this->input->post(); 

	        if($this->input->post() != null) {
	            $this->form_validation->set_rules('user', 'user','required', ['required'=>'<span class="text-danger">No pots deixar el camp usuari en blanc</span>']);

	            $this->form_validation->set_rules('passwd', 'passwd','required', ['required'=>'<span class="text-danger">No pots deixar la contrasenya en blanc</span>']);
	            
	            if ($this->form_validation->run() == false){
	                $this->load->view('login',$datos);
	            }
	            else{
	            	$this->load->model('Inicio');
	                $rows = $this->Inicio->iniciarSesionAd($datos);

	            	if ($rows > 0 ) {
	            		$_SESSION['user'] = $datos["user"];

	            		$this->load->model('datos');
	            		$datos['admin'] = $this->datos->admin();


		                $datosAdmin = $datos['admin']->result_array();

		                $_SESSION["id"] = $datosAdmin[0]['Id_Admin'];
		                $_SESSION["tipus"] = 'admin';
	            		$this->load->view('admin');
	            		
	            	}else
	            	{
		            	$this->load->model('Inicio');
		                $rows = $this->Inicio->iniciarSesion($datos);

		                if($rows > 0) {
		                	$_SESSION["user"] = $datos["user"];

		                	$this->load->model('datos');
		                    $datos['mios'] = $this->datos->mios();
		                    $this->load->view('perfil', $datos);
		                    $datos2 = $datos['mios']->result_array();
		                    $_SESSION["id"] = $datos2[0]['Id_Usuari'];
		                    $_SESSION["tipus"] = 'user';

		                } else {
		                    $this->load->view('login');
		                }
	            	}
	                
	                
	            }
	            
	        } else {
	            $this->load->view('login');
	        }
	    }else
	    {
	    	$this->perfil();

	    }
    }

    public function torneig()
    {
    	$this->load->model('datos');
    	$dades['mis_torneos'] = $this->datos->torneos_mios();

    	$this->load->model('datos');
    	$dades['torneos_all'] = $this->datos->torneos_all();

    	$this->load->view('torneo', $dades);

    }
    public function perfil(){
        
        $this->load->model('datos');
        $datos['mios'] = $this->datos->mios();
        $this->load->view('perfil', $datos);
    }

    public function miPartida($idTorneo)
    {

    	$this->load->model('datos');
        $datos['partida'] = $this->datos->miPartida($idTorneo);
        $datos2 = $datos['partida']->result_array();

        $this->load->model('datos');
        $datos['jugadors'] = $this->datos->JugadoresPartida($datos2[0]['Id_Partida']);
        $datos['nPartida'] = $datos2[0]['Id_Partida'];
        $this->load->view('partida', $datos);

    }

    public function archivoUp($idPartida) {
        if($this->input->post() != null) {
            if (empty($_FILES['arxiu']['name'])) {

                $this->form_validation->set_rules('arxiu', 'Arxiu','required', ['required'=>'<span class="text-danger">No has seleccionado archivo</span>']);
                
                if ($this->form_validation->run() == false){
                    // $this->load->view('subir');
                }
            } else{
               $subir = array(
                "tipusF" => $_FILES["arxiu"]["type"],
                "fitxer" => addslashes(file_get_contents($_FILES["arxiu"]["tmp_name"])),
                "id" => $idPartida
            );
               $this->load->model('datos'); 
               $this->datos->archivoUp($subir);
               $this->login();
           }
       	}else {
        	$this->load->view('login');
    	}
    }

    public function inscripcio($idTorneo)
    {
    	$this->load->model('datos');
    	$datos['torneo'] = $this->datos->Torneo($idTorneo);
    	$datos['jugadors'] = $this->datos->Jtorneo($idTorneo);
    	$this->load->view('clasificacion', $datos);
    }

    public function delete()
    {
    	$this->load->model('datos');
    	$rows= $this->datos->eliminarAdmin();
    	$this->index();
    	$rows = $this->Inicio->iniciarSesion($datos);
        if($rows > 0) {
        	session_destroy();
        	echo '<script> alert("Admin esborrat correctament"); </script>';
        } else {
            $this->load->view('admin');
            echo '<script> alert("Admin esborrat correctament"); </script>';
        }
    }


  //   public function crearTorneo()
  //   {
  //   	$datos=$this->input->post(); 

  //   	$this->load->model('datos');
  //       $this->datos->crearTorneo($datos);
		// echo "<script>alert('Torneo insertado correctamente!.');</script>";

		// $this->login();

  //   }

}
