<?php

declare(strict_types=1);


class Evento extends Conexion
{

    private  $id_evento;

    private  $id_user;

    private  $titulo;

    private  $descripcion_objetivo;

    private  $fecha_inicio;

    private  $fecha_termino;

    private  $hora_inicio;

    private  $hora_termino;

    private  $lugar;

    private  $color;

    private  $prioridad;

    private  $fecha_alta;


    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @param  $id_e 
     * @param  $id_u 
     * @param  $tit 
     * @param  $do 
     * @param  $fi 
     * @param  $ft 
     * @param  $hi 
     * @param  $ht 
     * @param  $lu 
     * @param  $co 
     * @param  $pri 
     * @param  $f
     */
    public function Evento( $id_e,  $id_u,  $tit,  $do,  $fi,  $ft,  $hi,  $ht,  $lu,  $co,  $pri,  $f)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getId_evento()
    {
        // TODO implement here
    }

    /**
     * @param  $id_e
     */
    public function setId_evento( $id_e)
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
    public function getTitulo()
    {
        // TODO implement here
    }

    /**
     * @param  $t
     */
    public function setTitulo( $t)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getDescripcion_objetivo()
    {
        // TODO implement here
    }

    /**
     * @param  $do
     */
    public function setDescripcion_objetivo( $do)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getFechainicio()
    {
        // TODO implement here
    }

    /**
     * @param  $fi
     */
    public function setFechainicio( $fi)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getFechatermino()
    {
        // TODO implement here
    }

    /**
     * @param  $ft
     */
    public function setFechatermino( $ft)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getHorainicio()
    {
        // TODO implement here
    }

    /**
     * @param  $hi
     */
    public function setHorainicio( $hi)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getHoratermino()
    {
        // TODO implement here
    }

    /**
     * @param  $ht
     */
    public function setHoratermino( $ht)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getLugar()
    {
        // TODO implement here
    }

    /**
     * @param  $l
     */
    public function setLugar( $l)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getColor()
    {
        // TODO implement here
    }

    /**
     * @param  $c
     */
    public function setColor( $c)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getPrioridad()
    {
        // TODO implement here
    }

    /**
     * @param  $p
     */
    public function setPrioridad( $p)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function getFechaalta()
    {
        // TODO implement here
    }

    /**
     * @param  $f
     */
    public function setFechaalta( $f)
    {
        // TODO implement here
    }

    /**
     * @param  $obj
     */
    public function agregarE( $obj)
    {
        // TODO implement here
    }

    /**
     * @param  $obj
     */
    public function actualizarE( $obj)
    {
        // TODO implement here
    }

    /**
     * @param  $id
     */
    public function eliminiarE( $id)
    {
        // TODO implement here
    }

    /**
     * @param  $id_user 
     * @param  $id_evento
     */
    public function lista_evento_user( $id_user,  $id_evento)
    {
        // TODO implement here
    }

}
