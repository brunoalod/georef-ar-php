<?php

namespace GeorefAR\Models;

class Provincia
{
    public int $id;
    public string $nombre;
    public float $centroide_lat;
    public float $centroide_lon;

    public function __construct(int $id, string $nombre, float $centroide_lat, float $centroide_lon)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->centroide_lat = $centroide_lat;
        $this->centroide_lon = $centroide_lon;
    }

    public static function fromArray($arr) : Provincia
    {
        return new Provincia(
            $arr['id'],
            $arr['nombre'],
            $arr['centroide']['lat'],
            $arr['centroide']['lon']
        );
    }
}