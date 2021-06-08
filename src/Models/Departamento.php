<?php

namespace GeorefAR\Models;

class Departamento
{
    public int $id;
    public string $nombre;
    public int $provincia_id;
    public string $provincia_nombre;
    public float $centroide_lat;
    public float $centroide_lon;

    public function __construct(
        int $id, 
        string $nombre, 
        float $centroide_lat,
        float $centroide_lon,
        int $provincia_id,
        string $provincia_nombre
    )
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->provincia_id = $provincia_id;
        $this->provincia_nombre = $provincia_nombre;
        $this->centroide_lat = $centroide_lat;
        $this->centroide_lon = $centroide_lon;
    }

    public static function fromArray($arr) : Departamento
    {
        return new Departamento(
            $arr['id'],
            $arr['nombre'],
            $arr['centroide']['lat'],
            $arr['centroide']['lon'],
            $arr['provincia']['id'],
            $arr['provincia']['nombre']
        );
    }
}