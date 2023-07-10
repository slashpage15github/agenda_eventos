<?php

declare(strict_types=1);


class Lista_Empleado extends Conexion
{

    private  $codigo_empleado;

    private  $id_departamento;

    private  $nombre;

    private  $paterno;

    private  $materno;

    private  $telefono;

    private  $correo;

    private  $domicilio;



    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @param  $ce 
     * @param  $id_dep 
     * @param  $n 
     * @param  $p 
     * @param  $m 
     * @param  $tel 
     * @param  $cor 
     * @param  $dom
     */
    public function Lista_Empleado( $ce,  $id_dep,  $n,  $p,  $m,  $tel,  $cor,  $dom)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getCodigoempleado()
    {
        // TODO implement here
    }

    /**
     * @param  $e
     */
    public function setCodigoempleado( $e)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getId_departamento()
    {
        // TODO implement here
    }

    /**
     * @param  $id_dep
     */
    public function setId_departamento( $id_dep)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getNombre()
    {
        // TODO implement here
    }

    /**
     * @param  $n
     */
    public function setNombre( $n)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getPaterno()
    {
        // TODO implement here
    }

    /**
     * @param  $p
     */
    public function setPaterno( $p)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getMaterno()
    {
        // TODO implement here
    }

    /**
     * @param  $m
     */
    public function setMaterno( $m)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getTelefono()
    {
        // TODO implement here
    }

    /**
     * @param  $t
     */
    public function setTelefono( $t)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getCorreo()
    {
        // TODO implement here
    }

    /**
     * @param  $c
     */
    public function setCorreo( $c)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getDomicilio()
    {
        // TODO implement here
    }

    /**
     * @param  $d
     */
    public function setDomicilio( $d)
    {
        // TODO implement here
    }

    /**
     * @param  $obj
     */
    public function agregarEmp( $obj)
    {
        // TODO implement here
    }

    /**
     * @param  $obj
     */
    public function modficarEmp( $obj)
    {
        // TODO implement here
    }

    /**
     * @param  $cod_emp
     */
    public function estatusBaja( $cod_emp)
    {
        // TODO implement here
    }

    /**
     * @param  $cod_emp
     */
    public function busca_por_cod_emp( $cod_emp)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function listar_Empleados_Todos()
    {
        // TODO implement here
    }

}
