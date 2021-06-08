<?php

namespace GeorefAR;

use GeorefAR\Http\HttpClient;
use GeorefAR\Models\Direccion;
use GeorefAR\Models\Municipio;
use GeorefAR\Models\Provincia;

class GeorefAR
{
    /**
     * Devuelve un array de Provincia. Acepta $nombre como parámetro de búsqueda.
     *
     * @param string $nombre
     * @return array
     */
    public function provincias(string $nombre = null) : array
    {
        $client = new HttpClient();

        $client->get('/provincias');

        if($nombre)
        {
            $client->param('nombre', $nombre);
        }

        $res = $client->process();

        $provincias = [];

        foreach($res->body['provincias'] as $provincia)
        {
            $provincias[] = Provincia::fromArray($provincia);
        }

        return $provincias;
    }

    /**
     * Devuelve un array de Direccion.
     *
     * @param string $direccion
     * @param string $provincia
     * @param string $departamento
     * @return void
     */
    public function direcciones(string $direccion, string $provincia = null, string $departamento = null)
    {
        $client = new HttpClient();

        $client->get('/direcciones');

        $client->param('direccion', $direccion);
        
        if($provincia)
        {
            $client->param('provincia', $provincia);
        }

        if($departamento)
        {
            $client->param('departamento', $departamento);
        }

        $res = $client->process();

        $direcciones = [];

        foreach($res->body['direcciones'] as $item)
        {
            $direcciones[] = Direccion::fromArray($item);
        }

        return $direcciones;
    }

    /**
     * Devuelve un array de Municipio.
     *
     * @param string $provincia
     * @param string $nombre
     * @return void
     */
    public function municipios(string $provincia = null, string $nombre = null)
    {
        $client = new HttpClient();

        $client->get('/municipios');
        
        if($provincia)
        {
            $client->param('provincia', $provincia);
        }

        if($nombre)
        {
            $client->param('nombre', $nombre);
        }

        $res = $client->process();

        $municipios = [];

        foreach($res->body['municipios'] as $municipio)
        {
            $municipios[] = Municipio::fromArray($municipio);
        }

        return $municipios;
    }
}