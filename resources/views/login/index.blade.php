<link rel="stylesheet" href="css/custom.css">
<link href="css/styles.css" rel="stylesheet" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></ button>
            </div>
            @endif
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                <form action='/login' method='post'>
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid
                        @enderror" id="email" placeholder="name@example.com" value="{{old ('email')}}">
                        <label for="email" autofocus>Email address</label autofocus required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    @auth
                    @else
                    <small class=" d-block text-center">Tambah admin<a href="/register">Register</a></small>
                    <small><a href="/">Back to home</a></small>
                    @endauth
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
                </form>

        </div>
        </main>
    </div>
</div>