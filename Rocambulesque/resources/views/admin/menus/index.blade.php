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
                    <div class="title">
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
                        <p>Naam</p>
                    </th>
                    <th>
                        <p>Beschrijving</p>
                    </th>
                    <th>
                        <p>Prijs</p>
                    </th>
                    <th>
                        <p>Afbeelding</p>
                    </th>
                    <th>
                        <p>Categorie</p>
                    </th>
                    <th>
                        <p>Nieuw gerecht </p>
                    </th>
                    <th>
                        <p>Wijzigen</p>
                    </th>
                    <th>
                        <p>Verwijderen</p>
                    </th>
                    @foreach ($data as $item)

                    <tr>

                    </tr>
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            @if (isset($item->image))
                            ✓
                            @else
                            𐄂
                            @endif
                        </td>
                        <td>{{$item->getCategory->name}}</td>
                        <td class="option"><a href="{{route('admin.menus.create')}}">Nieuwe gerecht invoeren</a></td>
                        <td class="option"><a href="{{route('admin.menus.edit',$item->id)}}">Wijzig</a></td>
                        <td class="option">
                            <form action="{{route('admin.menus.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Verwijder</button>
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