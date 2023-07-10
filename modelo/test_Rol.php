<?php
    include('Rol.php');
    $obj_rol=new Rol(null,"CONSULTÓ");
    $result_ins=$obj_rol->agrega($obj_rol);

    if ($result_ins==1){
        echo "Rol insertado correctamente";
    }else{
        echo "ROL NO INSERTADO, VUELVA A INTENTAR";
    }
?>