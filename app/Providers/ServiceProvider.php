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
            ->setPicture('https://ui-avatars.com/api/?name=Claire+Redfield&background=0D8ABC&color=fff&size=25')
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
            ->append(new Entry('Grid', '/example/grid', 'list'))
            ->append(new Entry('Form', '/example/form', 'layout-text-sidebar-reverse'))
            ->append(new Entry('Página', '/example/page', 'file-earmark'));
        $entry = (new Entry('Submenu', '/example/page', 'box-arrow-in-down'))
            ->appendChild(new Entry('Laravel', 'https://laravel.com'))
            ->appendChild((new Entry('Vue', 'https://vuejs.org'))->setStatus(Entry::STATUS_ACTIVE))
            ->appendChild((new Entry('Google', 'http://www.google.com.br'))->setStatus(Entry::STATUS_DISABLED));

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
