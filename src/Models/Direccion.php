<?php

namespace GeorefAR\Models;

class Direccion
{
    public string $calle;
    public string $altura;
    public string $departamento;
    public int $provincia_id;
    public string $provincia_nombre;
    public string $nomenclatura;
    public float $ubicacion_lat;
    public float $ubicacion_lon;

    public function __construct(
        string $calle, 
        string $departamento, 
        int $provincia_id,
        string $provincia_nombre,
        string $nomenclatura,
        float $ubicacion_lat,
        float $ubicacion_lon
    )
    {
        $this->calle = $calle; 
        $this->departamento = $departamento;
        $this->provincia_id = $provincia_id;
        $this->provincia_nombre = $provincia_nombre;
        $this->nomenclatura = $nomenclatura;
        $this->ubicacion_lat = $ubicacion_lat;
        $this->ubicacion_lon = $ubicacion_lon;
    }

    public static function fromArray($arr) : Direccion
    {
        return new Direccion(
            $arr['calle']['nombre'],
            $arr['departamento']['nombre'],
            $arr['provincia']['id'],
            $arr['provincia']['nombre'],
            $arr['nomenclatura'],
            $arr['ubicacion']['lat'],
            $arr['ubicacion']['lon']
        );
    }
}