<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black-800 dark:text-black-200 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Menu's") }}
                </div>
            </div>

            <table>

                @foreach ($data as $item)
                <tr>
                    <td> {{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                </tr>
                @endforeach


            </table>
        </div>
    </div>
</x-admin-layout>