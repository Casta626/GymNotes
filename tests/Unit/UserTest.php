<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function test_comprobar_permiso()
    {
        $permiso = 'crear-ejercicios';

        $usuario = [
            
                "nombre" => "pruebas",
                "permiso" => $permiso
            
        ];

        $response = $usuario["permiso"];

        $this->assertEquals($response, $permiso);
    }
}
