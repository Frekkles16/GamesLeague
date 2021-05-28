<?php
/* MODEL */
class Datos extends CI_Model{
public function __construct(){
parent::__construct();
 $this->load->database();
 // session_start();
}
    
    
    public function eliminarArchivo($Eliminar) {
        $this->db->delete('compartir', array('codiF' => $Eliminar["eliminar"]));
        $this->db->delete('fitxers', array('codiF' => $Eliminar["eliminar"]));
    }
    
    public function otros() {
        return $this->db->get_where('usuaris', array('codiU !=' => $this->session->iniciar));
    }
    
    public function compartidosMi() {
        $this->db->select('*');
        $this->db->from('fitxers');
        $this->db->join('compartir', 'compartir.codiF = fitxers.codiF');
        $this->db->where('codiUC', $this->session->iniciar);
        return $this->db->get();
    }

    public function archivoUp($datos){
        $sql='INSERT INTO fitxers(nomF, tipusF, data, contingut, codiU) VALUES ("'.$datos["nomF"].'","'.$datos["tipusF"].'","'.date("y/m/d").'","'.$datos["fitxer"].'","'.$datos["codiU"].'")';
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }

    public function info($Info) {
        return $this->db->get_where('fitxers', array('codiF' => $Info["info"]));
    }
    
    
    public function download($datos) {
        foreach($datos["downArch"]->result_array() as $row) {
            header('Content-length:  '.strlen($row["contingut"]).'');
            header('Content-type: '.$row["tipusF"].'');
            header("Content-Type: application/force-download"); 
            header('Content-Disposition: attachment; filename='.$row["nomF"].'');
            header("Content-Type: application/octet-stream;");
            echo $row["contingut"];
        }
    }

    public function usuarios($datos) {
        return $this->db->get_where('compartir', array('codiF' => $datos["info"]));
    }

    public function mios() {

        return $this->db->get_where('usuari', array('Nom_Usuari' => $_SESSION["user"]));
    }
    
    public function compartirArchivo($Compartir) {
        $sql='INSERT INTO compartir(codiF, codiUC) VALUES ("'.$Compartir["fitxerCompartir"].'","'.$Compartir["usuariCompartir"].'")';
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }
}
?>
