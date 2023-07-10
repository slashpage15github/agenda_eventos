<?php
    if (class_exists('Conexion')!=true) {
        class Conexion{
            var $db_conn;
            var $db_name;
            var $db_query;

            function __construct(){
                $this->set_db("localhost","root","","agenda_eventos");
            }
        
            function __destruct()
            {
                $this->close_db();
            }
            function set_db($host,$user,$passwd,$db){
                if (!isset($this->db_conn)){
                    $this->db_conn = mysqli_connect($host,$user,$passwd,$db);
                    $this->db_name=$db;
                }

                if (!$this->db_conn){
                    echo "Error:No se puede conectar a la BD".PHP_EOL;
                    echo "ERRNO:".mysqli_connect_errno().PHP_EOL;
                    echo "Depuración:".mysqli_connect_error().PHP_EOL;
                }
            }

            function close_db(){
                if (isset($db_conn)){
                    mysqli_close($db_conn);
                }
            }

            function set_sql($sql){
                $this->db_query=$sql;
            }
        }
    }
?>