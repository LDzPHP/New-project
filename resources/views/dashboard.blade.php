<x-app-layout>
    <div class="bg-gradient-to-l from-purple-900 to-white">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-purple-900 leading-tight 
            bg-gradient-to-r from-purple-900 to-white rounded-md p-5">
                <a type="button" class="bg-yellow-200 p-14 rounded-md" 
                href="{{ route('customers.index') }}"> {{ __('Customers') }} </a>
                    
                <a type="button" class="bg-yellow-400 p-14 rounded-md" 
                href="{{ route('prs.index') }}">Prints</a>

                <a type="button" class="bg-yellow-600 p-14 rounded-md" 
                href="{{ route('sales.index') }}">Sales</a>         
            </h2>
        </x-slot>

        <div class="py-12" bg-black>
                {{--<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            You're logged in!
                        </div>
                    </div>
                </div>--}}
        
            @yield('content')
        </div>
    </div>
</x-app-layout>