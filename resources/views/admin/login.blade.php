<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('admin/bootstrap5.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Connexion</h1>
        @if(session()->has('message'))
        <p>{{ session('message') }}</p>
        @endif
        <form action="{{ route('login_admin_post') }}" method="POST" class="row col-6 mx-auto mt-4">
            <div class="form-group mb-2">
                @csrf
                <label for="email" class="mb-2 col-12">Email</label>
                <input required="required" type="email" name="email" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="email" class="mb-2 col-12">Password</label>
                <input required="required" type="password" name="password" class="form-control">
            </div>
            <div class="form-group mb-2">
                <input type="submit" value="Connectez vous" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>