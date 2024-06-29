<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
</head>
<body>
    <h1>List Product</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)
                <tr>
                    <td>{{ $value['id'] }}</td>
                    <td>{{ $value['name'] }}</td>
                    <td>{{ $value['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>