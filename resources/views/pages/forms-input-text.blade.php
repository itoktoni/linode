<x-app-layout title="Menu List Component" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-4 pb-4">

        <div class="card">
            <div class="border-b border-slate-200 p-4 dark:border-navy-500 sm:px-5">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Menu List Example 1
                </h2>
            </div>
            <div class="p-4 sm:px-5 w-full grid lg:grid-cols-2 gap-4 sm:grid-cols-2 sm:gap-5">

                <x-input label="Name" placeholder="your name" corner="Ex: John"/>

                 <label class="block">
                    <span>Username</span>
                    <input class="form-input mt-1.5 px-3 py-2 w-full rounded-lg border bg-transparent placeholder:text-slate-400/70 border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Username" type="text"/>
                </label>

                 <label class="block">
                    <span>Username</span>
                    <input class="form-input mt-1.5 w-full rounded-lg border bg-transparent px-3 py-2 placeholder:text-slate-400/70 border-slate-300 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Username" type="text"/>
                </label>

            </div>
        </div>
    </main>
</x-app-layout>
