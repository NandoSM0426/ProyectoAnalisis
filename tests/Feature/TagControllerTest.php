<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class TagControllerTest extends TestCase
{

    use RefreshDatabase; // Reiniciar la base de datos antes de las pruebas

    public function testIndexReturnsJsonResponse()
    {
        $response = $this->get('/api/Tags');
        $response->assertStatus(200);
        $response->assertJsonStructure(['tags']);
    }

    public function testCreateViewIsRendered()
    {
        $response = $this->get('/api/Tags/create');
        $response->assertStatus(200);
        $response->assertViewIs('tag.create');
    }
    public function testStoreCreatesTag()
    {
        $data = [
            'Nombre' => 'Ejemplo',
            'Tipo' => 'Prueba',
        ];
    
        $response = $this->post('/api/Tags/Guardar', $data);
        $response->assertStatus(201); // Changed from 302 to 201
    
        // Asegurarse de que la etiqueta se ha creado en la base de datos
        $this->assertDatabaseHas('tags', $data);
    }
}
