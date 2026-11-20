<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertRedirect(route('login'));

    $this->get(route('login'))
        ->assertOk()
        ->assertViewIs('auth.login')
        ->assertSee('Selamat Datang');
});

it('shows the dashboard summary', function () {
    $this->get(route('dashboard'))
        ->assertOk()
        ->assertViewIs('dashboard')
        ->assertViewHasAll(['jumlahUser', 'jumlahProduk', 'jumlahSampel', 'sampelTerbaru'])
        ->assertSee('Sampel Terbaru');
});
