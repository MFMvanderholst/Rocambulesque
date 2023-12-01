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
                        {{ __("Edit menu") }}
                    </div>
                </div>


                <form action="{{route('admin.menus.update',$data->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="name">Verander naam</label>
                    <input type="text" name="name" value=""><br>

                    @error('name')
                    <div style="color:blue">{{$message}}</div> <br>
                    @enderror


                    <label for="description">Verander beschrijving</label>
                    <input type="text" name="description" value=""><br>

                    @error('description')
                    <div style="color:red">{{$message}}</div><br>
                    @enderror


                    <label for="price">Nieuwe prijs</label>
                    <input type="text" name="price" value=""><br>

                    @error('price')
                    <div style="color:red">{{$message}}</div><br>
                    @enderror


                    <button type="submit">Aanpassen</button>
                </form>
            </div>
        </div>
    </x-admin-layout>

</body>

</html>