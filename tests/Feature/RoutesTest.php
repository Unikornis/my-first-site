<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test:
     * url->nézet: /->welcome
     */
    public function test_alap_utvonal_url_cim_es_nezet(): void
    {
        /*
        $response = $this->get('/');

        $response->assertStatus(200);
 */
        // 1. példa
        $response = $this->get('/');
        $response->assertViewIs('welcome');
    }
    /**
     * A basic feature test:
     * url->nézet: /contact->státuszkód=200=>nincs hiba, a kért oldal létezik.
     */
    public function test_alap_utvonal_url_cim_es_statuszkod(): void
    {
        // 2. példa
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
    /**
     * A basic feature test:
     * url->nézet: /contac->státuszkód=404=>nincs ilyen oldal, hibakód=404.
     */
    public function test_alap_utvonal_url_cim_es_nincs_oldal_statuszkod(): void
    {

        // 3. példa
        $response = $this->get('/contac');
        $response->assertNotFound();
    }
    /**
     * A basic feature test:
     * url->nézet: /tömb->tömb elemeinek megjelenítése.
     */
    public function test_alap_utvonal_url_cim_es_tomb(): void
    {
        // 4. példa
        $response = $this->get('/tomb');
        $response->assertOk();
        $response->assertSee('market');
    }
    /**
     * A basic feature test:
     * url->nézet: /request-test->title hozzáfűzése és megjelenítése.
     */
    public function test_alap_utvonal_url_cim_es_title(): void
    {

        // 5. példa
        $response = $this->get('/request-test?title=MyFirstTitle');
        $response->assertSee('MyFirstTitle');
    }
}
