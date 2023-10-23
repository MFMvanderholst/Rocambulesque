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
            <td>{{ $users->name }}</td>
            <td>{{ $reservation->date }} {{ $reservation->time }}</td>
            <td>{{ $users->phone }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $reservation->remark }}</td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>