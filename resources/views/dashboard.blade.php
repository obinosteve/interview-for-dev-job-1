<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('dashboard') }}" method="get">
                        <input type="text" name="q" id="q" style=""
                            placeholder="Enter the name to search">
                        <button type="submit">Search</button>
                    </form>

                    @if ($users && $users->count())
                        @foreach ($users as $user)
                            <div>{{ $user->name . ' - ' . $user->email }}</div>
                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
