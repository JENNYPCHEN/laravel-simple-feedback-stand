<html>

<head>
    <title>ChingYi P.C : Votre Avis </title>
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/png" class='rounded' />
    <meta name="description" content="ChingYi P.C, développeuse Web PHP/Symfony en recherche d'une opportunité en Île-de-France" />
    <meta name="robots" content="all,follow" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@500;600;700&family=Satisfy&display=swap" rel="stylesheet">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- main css-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<main class="vh-100" style="background-color:#FFF4E4">
    <header  >
    @if ($message =Session::get('success'))
    <div class="alert alert-secondary text-center alert-dismissible fade show container" role="alert">
 {{$message}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="container p-5 text-center">
    <h1 class="p-1 py-5 logo">ChingYi P.C</h1>
    <h2 class="p-1 font"> votre avis compte beaucoup pour moi</h2>
    <h3 class="p-1 py-4 font ">que pensez-vous de mon portfolio/entretien ?</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class ="col-auto face">
            <form action="{{route('store')}}" method="post" >
            @csrf
            <input type="text" name="satisfaction" value="satisfied" class=" d-none">
            <button role="button" type="submit" class="btn face"><i class='bx bxs-happy-alt'></i></button>
            </form>
            </div>
            <div class ="col-auto face">
            <form action="{{route('store')}}" method="post">
            @csrf
            <input type="text" name="satisfaction" value="neutral" class=" d-none">
            <button role="button" type="submit" class="btn face"><i class='bx bxs-face-mask'></i></button>
            </form>
            </div>
            <div class ="col-auto face">
            <form action="{{route('store')}}" method="post">
            @csrf
            <input type="text" name="satisfaction" value="disappointing" class=" d-none">
            <button role="button" type="submit" class="btn face"><i class='bx bxs-sad' ></i></button>
            </form>
            </div>
        </div>
    </div>

    </header>
    <footer class="text-center">
    <p class="p-1 py-5 logo"><a href="http://chingyipc.com/">ChingYi P.C</a><br><a href="http://chingyipc.com/">http://chingyipc.com/</a></p>
    </footer>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>