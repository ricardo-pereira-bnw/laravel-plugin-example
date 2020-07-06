<?php

declare(strict_types=1);

namespace App\Plugin\Example\Providers;

use App\Plugin\Core\Libraries\Panel\Entry;
use App\Plugin\Core\Libraries\Panel\UserData;
use App\Plugin\Core\Providers\PluggableServiceProvider;

class ServiceProvider extends PluggableServiceProvider
{
    public function boot()
    {
        parent::boot();

        // --------------------------------------------------------------------
        // Para disponibilizar os dados do usuário ao painel
        // --------------------------------------------------------------------
        // Esse método deve ser usado no ServiceProvider do mecanismo 
        // de autenticação implementado no projeto 
        // --------------------------------------------------------------------
        UserData::instance()
            ->setName('Claire Redfield')
            ->setLogin('claire@residentevil.com.br')
            ->setPicture('http://lorempixel.com/25/25/people/9/')
            ->setPermissions([]);

        // --------------------------------------------------------------------
        // As migalhas podem ser configuradas no service provider do plugin e também 
        // nos controladores que extenderem App\Plugin\Core\Http\Controllers\PluggableController
        $this->breadcrumb()
            ->append(new Entry('Home', '/example/home'));

        // --------------------------------------------------------------------
        // Os itens de menu podem ser configurados no service provider do plugin e também 
        // nos controladores que extenderem App\Plugin\Core\Http\Controllers\PluggableController
        $this->sidebar()
            ->append(new Entry('Grid', '/example/grid'))
            ->append(new Entry('Form', '/example/form'))
            ->append(new Entry('Primeiro', '/example/page', 'exclamation-circle-fill'))
            ->append(new Entry('Segundo', '/example/page'));
        $entry = (new Entry('Terceiro', '/example/page'))
            ->appendChild(new Entry('Quarto', 'https://laravel.com'))
            ->appendChild((new Entry('Quinto', 'http://www.google.com.br'))->setStatus(Entry::STATUS_ACTIVE))
            ->appendChild((new Entry('Sexto', 'https://vuejs.org'))->setStatus(Entry::STATUS_DISABLED));
        $this->sidebar()->append($entry);

        // --------------------------------------------------------------------
        // Os itens do menu do cabeçalho podem ser configurados no service provider do plugin e também 
        // nos controladores que extenderem App\Plugin\Core\Http\Controllers\PluggableController
        $this->headerMenu()
            ->append(new Entry('Usuario', '/example/home', 'exclamation-circle-fill'))
            ->append(new Entry('Grid', '/example/grid'))
            ->append(new Entry('Form', '/example/form'))
            ->append((new Entry('Sep'))->setType(Entry::TYPE_SEPARATOR))
            ->append((new Entry('Página Um', '/example/page'))->setStatus(Entry::STATUS_DISABLED))
            ->append((new Entry('Página Dois', '/example/page'))->setStatus(Entry::STATUS_DISABLED));
    }

    public function register()
    {
        parent::register();
    }
}
