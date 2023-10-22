<?php
  class convertir {
    public function multiplicar ($cantidadtaza, $cantidadDolar) {
      return $cantidadtaza * $cantidadDolar;
      }
  }

  class operaciones extends convertir{    
    public function sumar($cantidadtaza) {
      return $cantidadtaza + 100;
    }
    public function restar($cantidadtaza) {
      return $cantidadtaza -100;
    }
  }

?>