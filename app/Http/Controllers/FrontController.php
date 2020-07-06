<?php

namespace App\Plugin\Example\Http\Controllers;

use App\Plugin\Core\Libraries\Panel\Entry;
use Illuminate\Http\Request;

class FrontController extends AController
{
    /**
     * Essa rota devolve as informações iniciais para a camada de apresentação
     */
    public function home()
    {
        // $this->changeTheme('core');

        $this->breadcrumb()
            ->append(new Entry('Home', '/core/home'))
            ->append(new Entry('Paginas', '/core/page', 'exclamation-circle-fill'));

        $this->pageTitle('Este é meu home');
        return vue('example::example.home');
    }

    /**
     * Essa rota devolve as informações iniciais para a camada de apresentação
     */
    public function page()
    {
        $this->changeTheme('core');
        $this->pageTitle('Este é meu título nice');

        $this->breadcrumb()
            ->append(new Entry('Home', '/core/home'))
            ->append(new Entry('Paginas', '/core/page', 'exclamation-circle-fill'));

        $this->sidebar()->append(new Entry('Carambolis'));
        return vue('example::example.page');
    }

    public function form()
    {
        $this->changeTheme('core');
        $this->pageTitle('Formulário');
        $this->breadcrumb()
            ->append(new Entry('Home', '/core/home'))
            ->append(new Entry('Formumário', '/core/page', 'exclamation-circle-fill'));

        // Handler::instance()->disableSidebarLeft();
        return vue('example::example.form');
    }

    public function grid()
    {
        $this->changeTheme('core');
        $this->pageTitle('Grade de Dados');
        return vue('example::example.grid');
    }
}