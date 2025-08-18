<x-app-layout title="Menu List Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-4 pb-4">

        <form class="card" method="POST">
            @csrf

            <x-errors />

            <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Menu List Example 1
                </h2>
            </div>
            <div class="p-4 sm:px-5 w-full grid lg:grid-cols-2 gap-4 sm:grid-cols-2 sm:gap-5">

                <x-input label="Name" name="name" placeholder="your name" corner="Ex: John"/>
                <x-input label="Email" type="email" name="email" placeholder="your name" corner="Ex: John"/>
                <x-input label="Password" type="password" name="password" placeholder="your name" corner="Ex: John"/>

                <x-button label="Submit" corner="Ex: John" type="submit" class="w-full sm:w-auto" />
            </div>
        </form>
    </main>
</x-app-layout>
