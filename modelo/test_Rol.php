<?php
include('Rol.php');
/*
    $obj_rol=new Rol(null,"CONSULTÓ");
    $result_ins=$obj_rol->agrega($obj_rol);

    if ($result_ins==1){
        echo "Rol insertado correctamente";
    }else{
        echo "ROL NO INSERTADO, VUELVA A INTENTAR";
    }

*/
//borrado
$obj_rol=new Rol();
$result_del=$obj_rol->eliminar(2);

    if ($result_del==1){
        echo "Rol eliminado correctamente";
    }else{
        echo "ROL NO SE PUDO ELIMINAR, VUELVA A INTENTAR";
    }
?>