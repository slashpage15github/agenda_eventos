<?php
    include('Class_Rol.php');
    include("class_conexion.php");
    class Class_Rol_dal extends Conexion
    {
        /**
         * Default constructor
         */
        public function __construct($id_rol=NULL,$tipo=NULL)
        {
            parent::__construct();
        }

        public function __destruct() {
            parent::__destruct();
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

    
        public function actualizar($obj)
        {
            $sql="update rol set ";
            $sql.="tipo ="."'".$obj->getTipo()."'";
            $sql.=" where id_rol='".$obj->getId_rol()."'";

            //echo $sql;
            $this->set_sql($sql);
            $this->db_conn->set_charset('utf8');
            mysqli_query($this->db_conn, $this->db_query) or die (mysqli_error($this->db_conn));

            if (mysqli_affected_rows($this->db_conn) == 1){
                $actualizado=1;
            }else{
                $actualizado=0;
            }
            unset($obj);
            return $actualizado;
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

    
        public function rolPor_Id($id)
        {
            $id=$this->db_conn->real_escape_string($id);
            $sql="select * from rol where id_rol=$id";
            $this->set_sql($sql);
            $result=mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));

            $total_regs=mysqli_num_rows($result);
            $obj_detalle=null;

            if ($total_regs==1){
                $renglon=mysqli_fetch_assoc($result);
                $obj_detalle=new Class_Rol(
                    $renglon["id_rol"],
                    $renglon["tipo"]
                );
            }
            return  $obj_detalle;
        }

    
        public function lista_roles()
        {
            $sql="select * from rol";
            $this->set_sql($sql);
            $rs=mysqli_query($this->db_conn,$this->db_query) or die (mysqli_error($this->db_conn));
            $total_roles=mysqli_num_rows($rs);
            $obj_lista=null;

            if ($total_roles>0){
                $i=0;
                while ($renglon = mysqli_fetch_assoc($rs)){
                    $obj_lista= new Class_Rol(
                        $renglon["id_rol"],
                        $renglon["tipo"]                        
                    );
                    $i++;
                    $lista[$i]=$obj_lista;
                    unset($obj_lista);
                }
                return $lista;
            }
        }

    }