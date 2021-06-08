<?php
/* MODEL */
class Datos extends CI_Model{
public function __construct(){
parent::__construct();
 $this->load->database();
 // session_start();
}
    
    public function archivoUp($datos){
        $sql='UPDATE partida SET `TipusF` = "' . $datos["tipusF"] . '", `Fitxer` = "' . $datos["fitxer"] . '" WHERE `Id_Partida` = ' .$datos["id"];
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }

    public function delete()
    {
        $_SESSION["id"];
        $this->db->delete('admin', array('Id_Admin' => $_SESSION["id"]));
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
        $sql="SELECT `partida`.Id_Partida, `partida`.Tipus, `partida`.Resultado,`partida`.Fitxer, `torneig`.* FROM `partida` LEFT JOIN `pa_to_us` ON `pa_to_us`.`Id_Partida` = `partida`.`Id_Partida` LEFT JOIN `torneig` ON `pa_to_us`.`Id_Torneig` = `torneig`.`Id_Torneig` WHERE `pa_to_us`.`Id_Torneig` = " . $id_torneo  . " AND `pa_to_us`.`Id_Usuari`= " . $id ." AND `partida`.`Id_Partida`= (SELECT MAX(`partida`.Id_Partida) FROM `partida` LEFT JOIN `pa_to_us` ON `pa_to_us`.`Id_Partida` = `partida`.`Id_Partida` LEFT JOIN `torneig` ON `pa_to_us`.`Id_Torneig` = `torneig`.`Id_Torneig` WHERE `pa_to_us`.`Id_Torneig` = " . $id_torneo . " AND `pa_to_us`.`Id_Usuari`= ".$id . ")";
        return $this->db->query($sql);
    }

    public function JugadoresPartida($id_partida)
    {
        $sql='SELECT `pa_to_us`.Id_Pa_To_Us, `usuari`.*, compte.* FROM `pa_to_us` INNER JOIN `usuari` ON `pa_to_us`.`Id_Usuari` = `usuari`.`Id_Usuari` INNER JOIN compte ON compte.Id_Usuari = usuari.Id_Usuari WHERE `pa_to_us`.`Id_Partida` = '. $id_partida . ' AND compte.Id_Videojoc = (SELECT Id_Videojoc FROM torneig LEFT JOIN partida ON torneig.Id_Torneig = partida.Id_Torneig WHERE partida.Id_Partida = ' . $id_partida . ')';
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

    public function comprovar($datos)
    {
        $sql='SELECT * FROM `compte` LEFT JOIN torneig ON compte.Id_Videojoc = torneig.Id_Videojoc WHERE compte.Id_Usuari = ' . $_SESSION["id"]  .' AND compte.Id_Videojoc = (SELECT Id_Videojoc FROM torneig LEFT JOIN pa_to_us ON torneig.Id_Torneig = pa_to_us.Id_Torneig WHERE pa_to_us.Id_Pa_To_Us = '. $datos["idPa"] . ')';
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }

    public function desapuntarme($idpartida)
    {
        $sql='UPDATE pa_to_us SET Id_Usuari = NULL WHERE Id_Pa_To_Us= ( SELECT `Id_Pa_To_Us` FROM `pa_to_us` WHERE Id_Partida ='. $idpartida . ' AND Id_Usuari = ' . $_SESSION["id"] . ' )';
        $this->db->query($sql);
        $filas=$this->db->affected_rows();
        return $filas;
    }

}
?>
