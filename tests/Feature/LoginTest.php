<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_visitar_web_inexistente()
    {
        $this->get('/sala-estudio')
            ->assertStatus(404);
    }
    public function test_visitar_web_existente()
    {
        $this->get('/login')
            ->assertStatus(200);
    }

    public function test_login_usuario()
    {
        // $usuario = new User();
        // $usuario->username = 'SrPruebas';
        // $usuario->email = "usuarioprueba@gmail.com";
        // $usuario->password = Hash::make('usuarioprueba');
        // $usuario->save();

        $this->get('/login');
        $credentials = [
            "username" => 'SrPruebas',
            "email" => "usuarioprueba@gmail.com",
            "password" => 'usuarioprueba',
        ];

        $response = $this->post('/login', $credentials);
        $response->assertRedirect('');
        $this->assertCredentials($credentials);
    }

}
