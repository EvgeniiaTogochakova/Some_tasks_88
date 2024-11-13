<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of users</title>
</head>

<body>
    <h2>List of users</h2>
    <table border="2">
        @foreach($users as $user)
        <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>