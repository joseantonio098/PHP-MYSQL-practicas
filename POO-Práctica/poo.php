<?php
class Humano{ //----> Clase-Objeto  -----> (abstract class): "Protege la clase"

        public $nombre;  //----> Propiedad ---> 3 tipos(public/protected/private)
        public $edad;    //----> (public static): Permite acceder a la propiedad sin instanciar el objeto¡

        function __construct($nombre,$edad){ //----> Función Constructora
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public static function info($pais){ //----> Método
            return $this->nombre . ' tiene ' . $this->edad . ' años y vive en ' . $pais;
        }
    }

    class Super_humano extends Humano{ //----> Heredamos las propiedades y metodos de una Clase¡
        public $poder;

        function __construct($nombre,$edad,$poder){  
            parent::__construct($nombre,$edad);  
            $this->poder = $poder; 
        }
    }

    $humano_1 = new Super_humano('Jose',22,'magia'); //----> Instanciar un objeto
    echo $humano_1->poder;

?>