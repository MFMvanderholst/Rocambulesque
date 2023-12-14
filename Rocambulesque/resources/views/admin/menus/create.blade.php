<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">

<body>
    <x-admin-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Reservaties') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("nieuw gerecht") }}
                    </div>
                </div>

                <form action="menusC" method="post">
                    @csrf

                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <label for="name">name:</label>

                    <input type="text" name="name">
                    @error('name')
                    <div style="color: red;">{{$message}}</div>
                    @enderror

                    <br><br>
                    <label for="description">beschrijving</label>
                    <input type="text" name="description">
                    @error('description')
                    <div style="color: red;">{{$message}}</div>
                    @enderror
                    <br><br>
                    <label for="image">image:</label>
                    <input type="file" name="image">
                    @error('image')
                    <div style="color: red;">{{$message}}</div>
                    @enderror
                    <br><br>
                    <label for="price">prijs:</label>
                    <input type="text" name="price">
                    @error('price')
                    <div style="color: red;">{{$message}}</div>
                    @enderror
                    <br><br>
                    <label for="menu_category_id">soort categorie</label>
                    <select name="menu_category_id" id="menu_category_id">
                        @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>

                    <br>
                    <label for="dish_id">soort gerecht</label>
                    <select name="dish_id" id="dish_id">
                        @foreach ($dish as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="submit">
                </form>

            </div>
        </div>
    </x-admin-layout>

</body>

</html>