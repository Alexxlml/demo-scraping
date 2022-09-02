<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-full p-4 mt-20 mb-20">
                    <div class="flex justify-center w-full ">
                        <iframe width="800" height="500"
                            src="https://datastudio.google.com/embed/reporting/c2a83db4-22e1-4dfb-92dd-7031c85ab604/page/LuBV" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>