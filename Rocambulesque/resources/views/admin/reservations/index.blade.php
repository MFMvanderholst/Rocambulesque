<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/adminmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/reservation_listing.css') }}">
</head>

<body>
    <x-admin-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-black-800 dark:text-black-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div class="bg"></div>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Reservaties") }}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-container">
            <table>

<<<<<<< HEAD
=======
<<<<<<< HEAD
            <th>
                <p>soort eten</p>
            </th>
=======
           
>>>>>>> 1eb2adfc456f9ba047e680bfeee28a7bab72688a


                <th>
                    <p>Naam</p>
                </th>

                <th>
                    <p>Email</p>
                </th>

<<<<<<< HEAD
                <th>
                    <p>Telefoon nummer</p>
                </th>

                <th>
                    <p>Datum</p>
                </th>
=======
>>>>>>> f7142fc246054afc7e3b603284b3dfc604cd5438
            <th>
                <p>Datum</p>
            </th>

            <th>
                <p>Tijd</p>
            </th>
            <th>
                <p>aantal volwassenen</p>
            </th>
            <th>
                <p>aantal kinderen</p>
            </th>
            <th>
                <p>wijzig</p>
            </th>

            <th>
                <p>verwijderd</p>
            </th>
<<<<<<< HEAD

            <th>
                <p>reservering aantal</p>
            </th>

            <?php $countReservations = 0; ?>
            @foreach ($data as $item)
            <?php $countReservations++; ?>
            <tr>
                <td>{{$item->mealType}}</td>
=======
            @foreach ($data as $item)
            <tr>
                <td> {{$item->fname}} {{$item->lname}}</td>
                <td> {{$item->email}}</td>
                <td> {{$item->phone}}</td>
>>>>>>> f7142fc246054afc7e3b603284b3dfc604cd5438
                <td> {{$item->date}}</td>
                <td>{{$item->timeHour}}:{{$item->timeMinutes}}</td>
                <td>{{$item->adults}}</td>
                <td>{{$item->children}}</td>
                <td><a href="{{route('admin.reservation.edit',$item->id)}}">wijzig</a></td>
                <td>
                    <form action="{{route('admin.reservation.destroy',$item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('weet je zeker dat je dit wilt verwijderen')">Verwijder</button>
                </td>
                <td>
                    <p><?php echo $countReservations ?> / 8</p>
                </td>
                </form>
>>>>>>> 1eb2adfc456f9ba047e680bfeee28a7bab72688a

                <th>
                    <p>Tijd</p>
                </th>
                <th>
                    <p>aantal volwassenen</p>
                </th>
                <th>
                    <p>aantal kinderen</p>
                </th>
                <th>
                    <p>wijzig</p>
                </th>
                <th>
                    <p>verwijderd</p>
                </th>
                @foreach ($data as $item)
                <tr>
                    <td> {{$item->fname}} {{$item->lname}}</td>
                    <td> {{$item->email}}</td>
                    <td> {{$item->phone}}</td>
                    <td> {{$item->date}}</td>
                    <td>{{$item->timeHour}}:{{$item->timeMinutes}}</td>
                    <td>{{$item->adults}}</td>
                    <td>{{$item->children}}</td>
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


    </x-admin-layout>
</body>

</html>