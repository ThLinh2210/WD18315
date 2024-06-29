<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
    table, th, td{
        border:1px solid black;
    }
    table{
        border-collapse:collapse;
    } 
    th, td {
        padding: 15px;
        text-align: left;
    }  
    </style>
</head>
<body>
    <h1>Information</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year of birth</th>
                <th>Hometown</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)
                <tr>
                    <td>{{ $value['id'] }}</td>
                    <td>{{ $value['name'] }}</td>
                    <td>{{ $value['year_of_birth'] }}</td>
                    <td>{{ $value['hometown'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
