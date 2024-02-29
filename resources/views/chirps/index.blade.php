<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Chirps') }}
        </h2>
    </x-slot>                        

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="" method="POST">
                        @csrf
                        <textarea 
                            name="message" 
                            placeholder="{{ __('What\'s on your mind?') }}"
                            class="dark:bg-slate-200 block w-full shadow-sm rounded-none mb-3 border-gray-300"
                        >
                        </textarea>
                        <x-primary-button>{{ __('Chirp') }}</x-primary-button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>