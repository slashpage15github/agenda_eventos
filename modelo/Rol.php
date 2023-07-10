<?php
if (class_exists('Rol')!=true){
    include("class_conexion.php");
    class Rol extends Conexion
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
            parent::__construct();
        }

        public function __destruct() {
            parent::__destruct();
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

    
        public function agrega($obj)
        {
            $sql="insert into rol(";
            $sql.="tipo)";
            $sql.=" values (";
            $sql.="'".$obj->getTipo()."'";
            $sql.=")";

            //echo $sql;
            $this->set_sql($sql);
            $this->db_conn->set_charset('utf8');
            mysqli_query($this->db_conn, $this->db_query) or die (mysqli_error($this->db_conn));

            if (mysqli_affected_rows($this->db_conn) == 1){
                $insertado=1;
            }else{
                $insertado=0;
            }
            unset($obj);
            return $insertado;
        }

    
        public function actualizar( $obj)
        {
            // TODO implement here
        }

    
        public function eliminar($id)
        {
            $id=$this->db_conn->real_escape_string($id);
            $sql="delete from rol where id_rol=$id";
            //echo $sql;return;
            $this->set_sql($sql);
            mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
                if(mysqli_affected_rows($this->db_conn)>=1){
                    $borrado=1;
                }
                else{
                    $borrado=0;
                }

                return $borrado;
        }

    
        public function rolPor_Id( $id)
        {
            // TODO implement here
        }

    
        public function lista_roles()
        {
            // TODO implement here
        }

    }
}