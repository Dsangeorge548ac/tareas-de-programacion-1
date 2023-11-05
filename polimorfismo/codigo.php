<?php
class operaciones {
    public function hacerSonido() {
        return "Sonido de un animal desconocido";
    }
}

class Perro extends operaciones {
    public function hacerSonido() {
        return "Ladra";
    }
}

class Gato extends operaciones {
    public function hacerSonido() {
        return "Maulla";
    }
}

function hacerRuido($animal) {
    return $animal->hacerSonido();
}

?>
