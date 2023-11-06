<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Naam</th>
            <th>Datum en tijd</th>
            <th>Telefoon</th>
            <th>Email</th>
            <th>Opmerking</th>
            <th>Wijzig</th>
            <th>Delete</th>
        </tr>
        <tr>
            @foreach ($data1 as $users)
            <td>{{ $users->name }}</td>
            @endforeach
            @foreach ($data2 as $reservations)
            <td>{{ $reservations->date }} {{ $reservations->time }}</td>
            @endforeach
            @foreach ($data1 as $users)
            <td>{{ $users->phone }}</td>
            <td>{{ $users->email }}</td>
            @endforeach
            @foreach ($data2 as $reservations)
            <td>{{ $reservations->remark }}</td>
            <td><a href="/reservation/{{ $reservations->id }}/edit">Wijzig</a></td>
            <td></td>
            @endforeach
        </tr>
    </table>
</body>
</html>