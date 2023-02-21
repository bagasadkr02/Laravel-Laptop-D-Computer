<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>

</head>

<body>

    <nav class="navbar navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Laptop D Computer</a>
            @auth
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                </ul>
            </div>
            @else
            <a class="btn btn-primary" href="/login">Login admin</a>
            @endauth
        </div>
    </nav>
    <div class="row justify-content-center">
    <div class="card align-items-center mt-5" style="width: 38rem;">
        <div class="card-header">
            <li class="list-group-item">Menampilkan 1 - {{ count($tokos) }} untuk <b>"{{ request('searchKota') }}"</b></li>
        </div>
      </div>
    </div>
    <section class="data-laptop" >
        <div class="container justify-content-center" style="width: 100em">
            <div class="row">
                    @foreach ($tokos as $laptops)
                        <div class="card text-bg-light mt-5 mb-5" style="width: 25rem; margin-left: 1em">
                            <div class="card-body">
                                <h5 class="card-title">Nama Toko : {{ $laptops->nama_toko }}</h5>
                                <p class="description">Deskripsi Toko : {{ $laptops->description }}</p>
                                <p class="notes">Catatan Toko : {{ $laptops->notes }}</p>
                                <p class="address">Alamat Lengkap : {{ $laptops->address }}</p>
                            </div>
                            <a href="https://api.whatsapp.com/send?phone=62{{ Str::substr($laptops->phone_number, 1) }}&text=%20Halo,%20Apakah%20Toko%20Sedang%20Buka%20?%20Saya%20Ingin%20Melakukan%20Service%20Laptop" class="btn btn-primary mb-3" target="_blank">CHAT TUKANG SERVICE</a>
                        </div>
                    @endforeach
                    {{ $tokos->appends(request()->query())->links("pagination::bootstrap-4") }}
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>