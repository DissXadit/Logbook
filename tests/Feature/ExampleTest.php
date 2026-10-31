<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertViewIs('auth.login')
        ->assertSee('Selamat Datang');
});
