<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reservation_listing.css') }}">

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
                    <div class="title">
                        {{ __("Edit menu") }}
                    </div>
                </div>

                </div>
                    <div class="bg">
                </div>

                <form class="form-styling" action="{{route('admin.reservation.update',$data->id)}}" method="post">
                    @csrf
                    @method('put')
                    <label for="mealType"">Uw keuze:</label>
            <select name=" mealType">
                        <option value="Dinner">Dinner</option>
                        <option value="Lunch">Lunch</option>
                        </select>
                        @error('mealType')
                        <p class="error">{{ $message }}</p>
                        @enderror

                        <label for="adults">Aantal volwassenen (+12):</label>
                        <input type="number" min="1" max="4" name="adults" value="{{ $data->adults }}">
                        @error('adults')
                        <p class="error">{{ $message }}</p>
                        @enderror
                        <label for="children">Aantal kinderen:</label>
                        <input type="number" min="0" max="2" name="children" value="{{ $data->children }}">
                        @error('children')
                        <p class="error">{{ $message }}</p>
                        @enderror

                        <label for="date">Kies uw datum:</label>
                        <input type="date" name="date" value="{{ $data->date }}">
                        @error('date')
                        <p class="error">{{ $message }}</p>
                        @enderror

                        <label for="time">Kies uw tijd:</label>
                        <select name="timeHour">
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                        <select name="timeMinutes">
                            <option value="00">00</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                        </select>
                        @error('timeHour', 'timeMinutes')
                        <p class="error">{{ $message }}</p>
                        @enderror

                        <label for="remark">EV. opmerkingen:</label>
                        <textarea name="remark" rows="4" placeholder="Kinderstoelen, allergieën etc..." cols="50">{{ $data->remark }}</textarea>
                        @error('remark')
                        <p class="error">{{ $message }}</p>
                        @enderror


                        <button type="submit">Aanpassen</button>
                </form>
            </div>
        </div>
    </x-admin-layout>

</body>

</html>


£