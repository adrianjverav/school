<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateQualificationInTheTimeAllowed extends TestCase
{
    /**
     * Probar que al actualizar la nota de un alumno
     * ésta se haga en el horario permitido.
     *
     * @test
     */
    public function updateQualificationInTheTimeAllowed()
    {
       	$this->visit('qualification/update')
       		 ->type('20', 'qualification')
       		 ->press('Actualizar')
       		 ->see('Nota ha sido actualizada.');
    }
}
