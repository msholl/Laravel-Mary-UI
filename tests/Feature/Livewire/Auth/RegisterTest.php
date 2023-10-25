<?php

use App\Livewire\Auth\Register;

it('should be able to register a new user in the system', function () {

    Livewire::test(Register::class)
        ->set('name', 'John Doe')
        ->set('email', 'joe@doe.com')
        ->set('email_confirmation', 'joe@doe.com')
        ->set('password', 'password')
        ->call('submit')
        ->assertHasNoErrors();

    assertDatabaseHas('users', [
        'name' => 'John Doe',
        'email' => 'joe@doe.com'
    ]);

    assertDatabaseCount('users', 1);
});
