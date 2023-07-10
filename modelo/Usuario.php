<?php

declare(strict_types=1);


class Usuario extends Conexion
{

    private  $id_user;

    private  $codigo_empleado;

    private  $id_rol;

    private  $password;

    private  $fecha_ultimo_ingreso;




    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @param  $id_u 
     * @param  $ce 
     * @param  $id_r 
     * @param  $pwd 
     * @param  $f
     */
    public function Usuario( $id_u,  $ce,  $id_r,  $pwd,  $f)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getId_user()
    {
        // TODO implement here
    }

    /**
     * @param  $id_u
     */
    public function setId_user( $id_u)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getCodigo_Empleado()
    {
        // TODO implement here
    }

    /**
     * @param  $ce
     */
    public function setCodigo_Empleado( $ce)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getId_rol()
    {
        // TODO implement here
    }

    /**
     * @param  $id_r
     */
    public function setId_rol( $id_r)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getPassword()
    {
        // TODO implement here
    }

    /**
     * @param  $pwd
     */
    public function setPassword( $pwd)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getFechaU()
    {
        // TODO implement here
    }

    /**
     * @param  $f
     */
    public function setFechaU( $f)
    {
        // TODO implement here
    }

    /**
     * @param  $obj
     */
    public function agregarU( $obj)
    {
        // TODO implement here
    }

    /**
     * @param  $obj
     */
    public function actualizarU( $obj)
    {
        // TODO implement here
    }

    /**
     * @param  $id
     */
    public function eliminarU( $id)
    {
        // TODO implement here
    }

    /**
     * @param  $id
     */
    public function usuario_por_ID( $id)
    {
        // TODO implement here
    }

    /**
     * @param  $obj
     */
    public function verificaUser( $obj)
    {
        // TODO implement here
    }

}
