<div class="card mx-4">
    <form wire:submit="save">

        <x-errors />

        <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
            <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                Menu List Example 1
            </h2>
        </div>
        <div class="p-4 sm:px-5 w-full grid lg:grid-cols-2 gap-4 sm:grid-cols-2 sm:gap-5">

            <x-input label="Name" wire:model="name" name="name" placeholder="your name" corner="Ex: John" />
            <x-input label="Email" type="email" wire:model="email" name="email" placeholder="your name" corner="Ex: John" />
            <x-input label="Password" type="password" wire:model="password" name="password" placeholder="your name" corner="Ex: John" />

            <x-footer>
                <x-href label="Primary" color="danger" href="{{ route('apps/list') }}" />
                <x-button label="Submit" type="submit" class="w-auto sm:w-auto" />
            </x-footer>

        </div>

    </form>
</div>