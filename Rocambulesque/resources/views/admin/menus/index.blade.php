<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
    <link rel="stylesheet" href="{{ asset('css/adminmenu.css') }}">
</head>

<body>
    <x-admin-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Reservations') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Menus") }}
                    </div>
                </div>
                @if(session('status'))
                <div style="color: green;">
                    {{session('status')}}
                </div>
                @endif
                <table>
                    <th>
                        <p>naam</p>
                    </th>
                    <th>
                        <p>beschrijving</p>
                    </th>
                    <th>
                        <p>prijs</p>
                    </th>
                    <th>
                        <p>wijzig</p>
                    </th>
                    <th>
                        <p>Verwijder</p>
                    </th>
                    @foreach ($data as $item)

                    <tr>

                    </tr>
                    <tr>
                        <td> {{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->getCategory->name}}</td>
                        <td><a href="{{route('admin.menus.edit',$item->id)}}">wijzig</a></td>
                        <td>
                            <form action="{{route('admin.menus.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('weet je zeker dat je dit wilt verwijderen')">Verwijder</button>
                        </td>
                        </form>

                    </tr>

                    @endforeach


                </table>
            </div>
        </div>
    </x-admin-layout>
</body>

</html>