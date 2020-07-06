<?php

namespace Tests\Feature;

use App\Plugin\Example\Models\Test;
use App\User;
use Tests\TestCase;
use App\Plugin\Core\Libraries\Tests\PluginRefreshDatabase;

/**
 * Testes de funcionalidade.
 * Para mais informações sobre as ferramentas disponíveis para este tipo de teste no Laravel,
 * visite https://laravel.com/docs/7.x/http-tests
 */
class ExampleTest extends TestCase
{
    // Prepara o banco de dados "in memory"
    // no contexto do pacote
    use PluginRefreshDatabase;

    /** @test */
    public function basic()
    {
        $response = $this->json('GET', '/api/example/grid/provider');
        $response->assertStatus(200);
    }

    /** @test */
    public function auth()
    {
        // Cria um usuario no banco de dados
        $user = factory(User::class)->create();

        // Autentica na api usando o usuário recém criado
        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->json('GET', '/api/example/grid/provider');

        $response->assertStatus(200);
    }

    /** @test */
    public function populate()
    {
        // Se fosse necessessário popular uma tabela
        // para que o endpoint '/api/example/grid/provider' 
        // pudesse devolver dados fake
        factory(Test::class, 5)->create();

        // 5 registros foram criados
        $this->assertCount(5, Test::all());

        $response = $this->json('GET', '/api/example/grid/provider');
        $response->assertStatus(200);

        // $response->content();
    }
}
