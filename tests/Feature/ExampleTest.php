<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertRedirect(route('login'));

    $this->get(route('login'))
        ->assertOk()
        ->assertViewIs('auth.login')
        ->assertSee('Selamat Datang');
});
