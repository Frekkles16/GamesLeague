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

    public function delete()
    {
        $_SESSION["id"];
        $this->db->delete('admin', array('Id_Admin' => $_SESSION["id"]));
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
        $sql='UPDATE partida SET `TipusF` = "' . $datos["tipusF"] . '", `Fitxer` = "' . $datos["fitxer"] . '" WHERE `Id_Partida` = ' .$datos["id"];
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

    public function admin() {

        return $this->db->get_where('admin', array('Nom' => $_SESSION["user"]));
    }

    public function torneos_mios() {
        $id = $_SESSION["id"];
        $sql='SELECT `torneig`.*, `videojoc`.`Nom_Videojoc` FROM `torneig` INNER JOIN `pa_to_us` ON `pa_to_us`.`Id_Torneig` = `torneig`.`Id_Torneig` INNER JOIN `videojoc` ON `torneig`.`Id_Videojoc` = `videojoc`.`Id_Videojoc` WHERE `pa_to_us`.`Id_Usuari` = '. $id . ' GROUP BY `torneig`.`Id_Torneig`';
        return $this->db->query($sql);
    }

    public function torneos_all() {
        $id = $_SESSION["id"];
        $sql='SELECT `torneig`.*, `videojoc`.`Nom_Videojoc` FROM `torneig` INNER JOIN `pa_to_us` ON `pa_to_us`.`Id_Torneig` = `torneig`.`Id_Torneig` INNER JOIN `videojoc` ON `torneig`.`Id_Videojoc` = `videojoc`.`Id_Videojoc` GROUP BY `torneig`.`Id_Torneig`';
        return $this->db->query($sql);
    }

    public function miPartida($id_torneo)
    {
        $id = $_SESSION["id"];
        $sql='SELECT `partida`.*, `torneig`.* FROM `partida` INNER JOIN `pa_to_us` ON `pa_to_us`.`Id_Partida` = `partida`.`Id_Partida` INNER JOIN `torneig` ON `pa_to_us`.`Id_Torneig` = `torneig`.`Id_Torneig` WHERE `pa_to_us`.`Id_Torneig` ='. $id_torneo .' AND `pa_to_us`.`Id_Usuari`='. $id;
        return $this->db->query($sql);
    }

    public function JugadoresPartida($id_partida)
    {
        $sql='SELECT `pa_to_us`.Id_Pa_To_Us, `usuari`.* FROM `pa_to_us` INNER JOIN `usuari` ON `pa_to_us`.`Id_Usuari` = `usuari`.`Id_Usuari` WHERE `pa_to_us`.`Id_Partida` = '. $id_partida;
        return $this->db->query($sql);
    }

    public function Torneo($torneo)
    {
        $sql='SELECT * FROM `torneig` WHERE `Id_Torneig` = '. $torneo;
        return $this->db->query($sql);
    }

    public function Jtorneo($torneo)
    {
        $sql='SELECT  `pa_to_us`.`Id_Pa_To_Us`, `usuari`.`Nom_Usuari`FROM `pa_to_us` LEFT JOIN `usuari` ON `pa_to_us`.`Id_Usuari`= `usuari`.`Id_Usuari`LEFT JOIN `partida` ON `partida`.`Id_Partida` = `pa_to_us`.`Id_Partida` WHERE `pa_to_us`.`Id_Torneig` = '. $torneo . ' ORDER BY `pa_to_us`.`Id_Partida`';
        return $this->db->query($sql);
    }
    
    public function compartirArchivo($Compartir) {
        $sql='INSERT INTO compartir(codiF, codiUC) VALUES ("'.$Compartir["fitxerCompartir"].'","'.$Compartir["usuariCompartir"].'")';
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }

    public function afegirCompte($datos)
    {
        $sql='INSERT INTO compte(Id_Usuari, Id_Videojoc, Nom_Compte) VALUES ('.$_SESSION['id'].','.$datos["juego"].',"'.$datos["nombre"] .'")';
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }

    public function inscribir($datos)
    {
        $sql='UPDATE `pa_to_us` SET `Id_Usuari` =' . $_SESSION["id"]. ' WHERE `pa_to_us`.`Id_Pa_To_Us` = ' . $datos["idPa"];
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }

}
?>
