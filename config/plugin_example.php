<?php

declare(strict_types=1);

return [

    'plugin_namespace' => 'Example',

    // Apenas para desenvolvimento do pacote! 
    // Este parâmetro notifica o Artisan sobre a localização 
    // da instalação principal do Laravel a fim de facilitar
    // a atualização do pacote na instalação oficial.
    'laravel_path' => realpath(__DIR__ . '/../../laravel'),
];
