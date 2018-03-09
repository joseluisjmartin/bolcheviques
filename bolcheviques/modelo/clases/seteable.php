<?php
  /**
   * clase para ayudar a decodificar el json que previamente convertimos en array asociativo
   * implementa una unica función de la que heredan todas las incluidas en el json
   * esta función recorre un array asociativo
   * que ha de ser paralelo a las propiedades de la clase
   */
  class Seteable{
//isAssoc e is_assoc son funciones para averiguar si un array es asociativo
//para ello examinan si las claves son string
//el primero además tiene en cuenta la secuencialidad

    public static function isAssoc(array $arr)
    {
    if (array() === $arr) return false;
    return array_keys($arr) !== range(0, count($arr) - 1);
    }

    public static function is_assoc($array) {
	     return array_keys( $array ) !== range( 0, count($array) - 1 );
    }

    public function set($data) {
      foreach ($data AS $key => $value){
          if(!is_array($value)){
            $this->{$key} = $value;
          }else{
            if(Seteable::isAssoc($value)){
              $this->{$key}->set($value);
            }else{
              foreach ($value as $row) {
                $this->{$key}[]=$row;
                }
              }
            }
          }
        }

  }

 ?>
