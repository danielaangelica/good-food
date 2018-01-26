<?php
require_once 'database.php';
class Paciente
{
  public $nombre;
  public $apellidos;
  public $edad;
  public $usuario;
  public $contrasena;

  public function __construct($nombre,$apellidos,$edad,$usuario,$contrasena)
  {
      $this->nombre=$nombre;
      $this->apellidos=$apellidos;
      $this->edad=$edad;
      $this->usuario=$usuario;
      $this->contrasena=$contrasena;
  }

  public static function get()
	{
		$sql = "SELECT
				*
			   FROM
				nutriologo";
		$db = new Database();
		if ($rows = $db->query($sql)) {
			$db->close();
			return $rows;
		}
		$db->close();
		return false;
	}


  public function save(){
    $sql="INSERT into
				nutriologo (	nombre,
							apellidos,
							edad,
              usuario,
              contrasena)
				VALUES(
							'".$this->nombre."',
							'".$this->apellidos."',
              '".$this->edad"',
              '"$this->usuario"',
              '"$this->contrasena"'
				)";
		$db=new Database();
		if ($db->query($sql)) {
			$db->close();
			return true;
		}
		$db->close();
		return false;
  }

  public function getId(){
    $sql="SELECT
          idpaciente
          WHERE
          usuario='".$this->usuario."'";
    $db = new Database();
    if ($rows = $db->query($sql)) {
      $db->close();
      return $rows;
    }
    $db->close();
    return false;
  }

  public function update(){
    $id=getId();
    $sql="UPDATE
          paciente
          SET
          nombre='".$this->nombre."',
          apellidos='".$this->apellidos."',
          edad='".$this->edad."',
          contrasena='".$this->contrasena."'
          WHERE
          idpaciente='"$id"'";
    $db=new Database();
    if ($db->query($sql)) {
      $db->close();
      return true;
    }
    $db->close();
    return false;
  }

  public function delete(){
    $id=getId();
    $sql="DELETE
          FROM
          paciente
          WHERE
          idpaciente='.$id.'";
          $db=new Database();
    if ($db->query($sql)) {
        $db->close();
        return true;
    }
    $db->close();
    return false;
  }
}
