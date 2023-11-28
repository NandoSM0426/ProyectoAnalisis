<?php

namespace Tests\Feature;

use App\Models\Office;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OfficeControllerTest extends TestCase
{
   
    public function testIndex()
    {
        // Create some offices
        Office::factory()->count(3)->create();
    
        // Make a request to the index endpoint
        $response = $this->getJson('/api/offices');
    
        // Assert that the response is successful
        $response->assertStatus(200);
    
        // Assert that the JSON response contains the expected data
        $response->assertJson([
            'data' => [
                [
                    'id' => 1,
                    'Nombre' => 'Office 1',
                    'Descripcion' => 'Description 1',
                    'Precio' => 100.00,
                    'Disponibilidad' => true,
                    'Imagen' => 'https://via.placeholder.com/640x480.png/001111?text=EjemploParaTest',
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString(),
                ],
                [
                    'id' => 2,
                    'Nombre' => 'Office 2',
                    'Descripcion' => 'Description 2',
                    'Precio' => 200.00,
                    'Disponibilidad' => true,
                    'Imagen' => 'https://via.placeholder.com/640x480.png/001111?text=EjemploParaTest',
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString(),
                ],
                [
                    'id' => 3,
                    'Nombre' => 'Office 3',
                    'Descripcion' => 'Description 3',
                    'Precio' => 300.00,
                    'Disponibilidad' => true,
                    'Imagen' => 'https://via.placeholder.com/640x480.png/001111?text=EjemploParaTest',
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString(),
                ],
            ]
        ]);
    }


}
