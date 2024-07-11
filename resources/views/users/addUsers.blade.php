<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
    <!-- <a href="{{ route('users.listUsers')}}" class="btn btn-success">List Users</a> -->
    <h1>ADD NEW USER</h1>
        <form action="{{ route('users.addPostUsers')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Ten nhan su</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email">Email nhan su</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="name">Phong ban</label>
                <select name="phongban" id="phongban" class="form-control">
                    @foreach ($phongban as $value)
                        <option value="{{$value->id}}">{{ $value->ten_donvi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tuoi">Tuoi</label>
                <input type="number" class="form-control" id="tuoi" name="tuoi">
            </div>
            <button type="submit" class="btn btn-primary">Them moi</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>