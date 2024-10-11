<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="p-3 card carte mt-5 shadow">
                @if (session()->has('success'))
                    <div class="alert alert-success mt-2">{{session()->get('success')}}</div>
                @endif
                <h2 class="text-center">Inscription</h2>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nom">
                        @error('nom')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                        @error('password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <button class="btn btn-primary">S'inscrire</button>
                      </div>
                      <p>Deja un compte? <a href="{{route('login')}}">Connecter-vous</a></p>
                </div>
                </form>
              
        </div>
    </div>
</body>
</html>
    
