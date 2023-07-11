<?php
include('Class_Rol_dal.php');

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
/*

$result_del=$obj_rol->eliminar(2);

    if ($result_del==1){
        echo "Rol eliminado correctamente";
    }else{
        echo "ROL NO SE PUDO ELIMINAR, VUELVA A INTENTAR";
    }
*/

/*update*/ 
/* 
    $obj_rol=new Rol(3,"LECTORes");
    $result_upd=$obj_rol->actualizar($obj_rol);

    if ($result_upd==1){
        echo "Rol actualizado correctamente";
    }else{
        echo "ROL NO SE PUDO actualizar, VUELVA A INTENTAR";
    }
    */

    /*select por id*/
    /*
    $obj_rol2=new Rol;
    $result_id2=$obj_rol2->rolPor_Id(1);
    if ($result_id2==null){
        echo "No se encontró Rol";
    }else{
        echo '<pre>';
        print_r($result_id2);
        echo '</pre>';
    }

*/
       /*select por id*/
       $obj_rol2=new Class_Rol_dal;
       $result_id2=$obj_rol2->lista_roles();
       if ($result_id2==null){
           echo "No se encontró lista de Roles";
       }else{
           echo '<pre>';
           print_r($result_id2);
           echo '</pre>';
       }

    

?>