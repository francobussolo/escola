<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Informações da Escola
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Atualize as informações da Escola.
        </p>
    </header>

    <form wire:submit="save" class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model.blur="name" id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="andress" :value="__('Andress')" />
            <x-text-input wire:model.blur="andress" id="andress" name="andress" type="text" class="mt-1 block w-full" required autofocus autocomplete="andress" />
            <x-input-error class="mt-2" :messages="$errors->get('andress')" />
        </div>

        <div>
            <x-input-label for="city" :value="__('City')" />
            <x-text-input wire:model="city" id="city" name="city" type="text" class="mt-1 block w-full" required autofocus autocomplete="city" />
            <x-input-error class="mt-2" :messages="$errors->get('city')" />
        </div>
        
        <div>
            <x-input-label for="state" :value="__('State')" />
            <x-text-input wire:model="state" id="state" name="state" type="text" class="mt-1 block w-full" required autofocus autocomplete="state" />
            <x-input-error class="mt-2" :messages="$errors->get('state')" />
        </div>

        <div>
            <x-input-label for="zip" :value="__('ZIP')" />
            <x-text-input wire:model="zip" id="zip" name="zip" type="text" class="mt-1 block w-full" required autofocus autocomplete="zip" />
            <x-input-error class="mt-2" :messages="$errors->get('zip')" />
        </div>

        <div>
            <x-input-label for="cnpj" :value="__('CNPJ')" />
            <x-text-input wire:model="cnpj" id="cnpj" name="cnpj" type="text" class="mt-1 block w-full" autofocus autocomplete="cnpj" />
            <x-input-error class="mt-2" :messages="$errors->get('cnpj')" />
        </div>

        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input wire:model="phone" id="phone" name="phone" type="text" class="mt-1 block w-full" autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('e-mail')" />
            <x-text-input wire:model="email" id="email" name="email" type="email" class="mt-1 block w-full"  autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="Escola Salva">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>