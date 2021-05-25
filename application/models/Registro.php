<?php
/* MODEL */
class Registro extends CI_Model{
public function __construct(){
parent::__construct();
 $this->load->database();
}
    public function inserirDades($datos){

        $sql='INSERT INTO usuari(Nom, Nom_Usuari, D_Naixement, Email, Password) VALUES ("'.$datos["nom"].'","'.$datos["user"].'","'.$datos["data"].'","'.$datos["email"].'","'.$datos["passwd"].'")';
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }
}
?>
