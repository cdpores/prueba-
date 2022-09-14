<?php 
require_once('Conexion.php');

class Medico extends Conexion{

  public function __construct(){
    $this->db=parent::__construct();
  }

  public function agregar($idMedico, $nombreMedico, $apellidoMedico, $telefonoMedico, $correoMedico, $tarjetaProfesional, $especialidadMedico, $estadoMedico){
    $agregar=$this->db->prepare("INSERT INTO medico (idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico)  VALUES (:idMedico, :nombreMedico, :apellidoMedico, :telefonoMedico, :correoMedico, :tarjetaProfesional, :especialidadMedico, :estadoMedico);");
    $agregar->bindparam(':idMedico', $idMedico);
    $agregar->bindparam(':nombreMedico', $nombreMedico);
    $agregar->bindparam(':apellidoMedico', $apellidoMedico);
    $agregar->bindparam(':telefonoMedico', $telefonoMedico);
    $agregar->bindparam(':correoMedico', $correoMedico);
    $agregar->bindparam(':tarjetaProfesional', $tarjetaProfesional);
    $agregar->bindparam(':especialidadMedico', $especialidadMedico);
    $agregar->bindparam(':estadoMedico', $estadoMedico);
    
    if($agregar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function consultar(){
    $rows=null;
    $mostrar=$this->db->prepare(" SELECT *FROM medico;");
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function cosnsultarxid($idMedico){
    $rows=null;
    $mostrar=$this->db->prepare("SELECT * FROM medico WHERE idMedico=:idMedico;");
    $mostrar->bindparam(':idMedico', $idMedico);
    $mostrar->execute();
    while($result=$mostrar->fetch()){
      $rows[]=$result;
    }
    return $rows;
  }

  public function actualizar($idMedico, $nombreMedico, $apellidoMedico, $telefonoMedico, $correoMedico, $tarjetaProfesional, $especialidadMedico, $estadoMedico){
    $editar=$this->db->prepare("UPDATE medico SET idMedico=:idMedico, nombreMedico=:nombreMedico, apellidoMedico=:apellidoMedico, telefonoMedico=:telefonoMedico, correoMedico=:correoMedico, tarjetaProfesional=:tarjetaProfesional, especialidadMedico=:especialidadMedico, estadoMedico=:estadoMedico
    WHERE idMedico=:idMedico;");
    $editar->bindparam(':idMedico', $idMedico);
    $editar->bindparam(':nombreMedico', $nombreMedico);
    $editar->bindparam(':apellidoMedico', $apellidoMedico);
    $editar->bindparam(':telefonoMedico', $telefonoMedico);
    $editar->bindparam(':correoMedico', $correoMedico);
    $editar->bindparam(':tarjetaProfesional', $tarjetaProfesional);
    $editar->bindparam(':especialidadMedico', $especialidadMedico);
    $editar->bindparam(':estadoMedico', $estadoMedico);
  
    if($editar->execute()){
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $rows=null;
    $eliminar=$this->db->prepare("DELETE FROM medico WHERE idMedico=:id");
    $eliminar->bindparam(':id', $id);
    $eliminar->execute();
    if($eliminar->execute()){
      return true;
    }else{
      return false;
    }
  }


}
?>