<?php
require_once 'database.php';
class Nutriologo
{
  public $nombre;
  public $apellidos;
  public $matricula;
  public $usuario;
  public $contrasena;

  public function __construct($nombre,$apellidos,$matricula,$usuario,$contrasena)
  {
      $this->nombre=$nombre;
      $this->apellidos=$apellidos;
      $this->matricula=$matricula;
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
							matricula,
              usuario,
              contrasena)
				VALUES(
							'".$this->nombre."',
							'".$this->apellidos."',
              '".$this->matricula"',
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
          idnutriologo
          WHERE
          matricula='".$this->matricula."'";
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
          Nutriologo
          SET
          nombre='".$this->nombre."',
          apellidos='".$this->apellidos."',
          contrasena='".$this->contrasena."'
          WHERE
          idnutriologo='"$id"'";
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
          Nutriologo
          WHERE
          idnutriologo='.$id.'";
          $db=new Database();
    if ($db->query($sql)) {
        $db->close();
        return true;
    }
    $db->close();
    return false;
  }


}
