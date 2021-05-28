<?php
/* MODEL */
class Inicio extends CI_Model{
public function __construct(){
parent::__construct();
 $this->load->database();
}
    public function iniciarSesion($datos){

        $sql='SELECT Nom_Usuari FROM usuari WHERE Nom_Usuari LIKE "'.$datos["user"].'" AND Password LIKE "'.$datos["passwd"].'"';
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }
}
?>
