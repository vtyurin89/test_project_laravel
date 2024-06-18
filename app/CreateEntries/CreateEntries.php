<?php

namespace App\CreateEntries;

class CreateEntries
{
    public $eveSwaggerUrls = [
        'systems' => "https://esi.evetech.net/dev/universe/systems/",
        'stars' => "https://esi.evetech.net/dev/universe/stars/",
        'regions' => "https://esi.evetech.net/dev/universe/regions/",
        'constellations' => "https://esi.evetech.net/dev/universe/constellations/",
    ];

    public $var = 'momo';

    public function createConstellations()
    {

        echo $this->eveSwaggerUrls['stars'];

    }

}

?>
