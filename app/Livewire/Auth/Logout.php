<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function render(): string
    {
        return <<<'HTML'
            <div>
                <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" wire:click="logout"/>
            </div>
        HTML;

    }

    public function logout()
    {

        auth()->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect(route('login'));
    }
}
