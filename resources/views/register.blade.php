<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-4 m-5 p-4 border">
        <h3>Register</h3>
        <form action="{{route('register')}}" method="POST" >
            @csrf
            <div class="mb-1">
                <label for="">Name:</label>
                <input type="text" name="name" class="form-control mt-1 @error('name') is-invalid @enderror">
                @error('name') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="mb-1">
                <label for="">Email:</label>
                <input type="text" name="email" class="form-control mt-1 @error('email') is-invalid @enderror">
                @error('email') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="mb-1">
                <label for="">Password:</label>
                <input type="password" name="password" class="form-control mt-1 @error('password') is-invalid @enderror">
                @error('password') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="mb-1">
                <label for="">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control mt-1 @error('password') is-invalid @enderror">
                @error('password') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <button class="btn btn-sm btn-success mt-2">Submit</button>
        </form>
    </div>
</body>
</html>