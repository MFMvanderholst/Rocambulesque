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
                    <label for="name">naam</label>
                    <input type="text" name="name" value="{{$data->name}}"><br>

                    @error('name')
                    <div style="color:blue">{{$message}}</div> <br>
                    @enderror


                    <label for="description">beschrijving</label>
                    <input type="text" name="description" value="{{$data->description}}"><br>

                    @error('description')
                    <div style="color:red">{{$message}}</div><br>
                    @enderror


                    <label for="price">Nieuwe prijs</label>
                    <input type="text" name="price" value="{{$data->price}}"><br>

                    @error('price')
                    <div style="color:red">{{$message}}</div><br>
                    @enderror

                    <label for="menu_category_id">soort categorie</label>
                    <select name="menu_category_id" id="menu_category_id">
                        @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>

                    <label for="dish_id">soort gerecht</label>
                    <select name="dish_id" id="dish_id">
                        @foreach ($dish as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>

                    
                    <div>
                        <label for="image">Afbeelding</label>
                        <input type="file" name="image" id="imageInput" onchange="displayImage()">
                        <img id="displayedImage" src="{{$data->image}}" alt="Geselecteerde afbeelding">
                    </div>

                    <script>
                        function displayImage() {
                            var input = document.getElementById("imageInput");
                            var displayedImage = document.getElementById("displayedImage");

                            var file = input.files[0];

                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    displayedImage.src = e.target.result;
                                };
                                reader.readAsDataURL(file);
                            }
                        }
                    </script>
                        


                    <button type="submit">Aanpassen</button>
                </form>
            </div>
        </div>
    </x-admin-layout>

</body>

</html>