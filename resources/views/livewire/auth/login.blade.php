<x-card title="Entrar" shadow class="mx-auto w-[350px] lg:w-[600px]">
    @if($errors->hasAny(['invalidCredentials', 'rateLimiter']))
        <x-alert title="" description="" icon="o-exclamation-triangle" class="alert-warning">
            @error('invalidCredentials')
            <span>{{ $message }}</span>
            @enderror
            @error('rateLimiter')
            <span>{{ $message }}</span>
            @enderror
        </x-alert>
    @endif

    <x-form wire:submit="tryToLogin">
        <x-input label="Email" wire:model="email" required/>
        <x-input label="Password" wire:model="password" type="password" required/>
        <x-slot:actions>
            <x-button label="Acessar" class="btn-primary" type="submit" spinner="submit"/>
        </x-slot:actions>
    </x-form>
</x-card>

