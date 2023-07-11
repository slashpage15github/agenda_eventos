<?php
//solo colo la definicion del objeto, constructor ,getters , setters
if (class_exists('Class_Rol')!=true){
     class Class_Rol
    {

        private  $id_rol;

        private  $tipo;


        /**
         * Default constructor
         */
        public function __construct($id_rol=NULL,$tipo=NULL)
        {
            $this->id_rol=$id_rol;
            $this->tipo=$tipo;
        }

    
        public function getId_rol()
        {
           return $this->id_rol;
        }

    
        public function setId_rol( $id)
        {
            $this->id_rol=$id;
        }

    
        public function getTipo()
        {
            return $this->tipo;
        }

    
        public function setTipo( $t)
        {
            $this->tipo = $t;
        }
    }
}