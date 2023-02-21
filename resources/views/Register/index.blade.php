<link rel="stylesheet" href="css/custom.css">
<link href="css/styles.css" rel="stylesheet" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="name" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Name">
                        <label for="name">name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="username" name="username"
                            class="form-control @error('username') is-invalid @enderror" id="username"
                            placeholder="username">
                        <label for="username">username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid
                        @enderror" id="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <small><a href="/">Back to home</a></small>
                    <small class=" d-block text-center ">Already Register? <a href="/login">Login</a></small>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign up</button>
                </form>
        </div>
        </main>
    </div>
</div>