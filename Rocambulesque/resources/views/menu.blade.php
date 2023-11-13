<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<header>
    @include('navbar')
</header>
<body>

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
                    @foreach ($data as $item)

                    <tr>

                    </tr>
                    <tr>
                        <td> {{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                    </tr>

                    @endforeach


                </table>
            </div>
        </div>
        @include('footer')
</body>

</html>