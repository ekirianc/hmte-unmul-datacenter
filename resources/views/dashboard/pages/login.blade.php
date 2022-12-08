<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body class="login-page">
    <div class="container-fluid" style="height: 100vh;">
        <div class="style">
            <div class="triangle-1"></div>
            <div class="triangle-2"></div>
        </div>
        <div class="row h-100">

            <div class="col-5 position-relative d-none d-sm-block welcome">
                <div class="content position-absolute top-50 start-50 translate-middle w-100">
                    <p>Selamat datang di</p>
                    <h1><span class="badge">HMTE</span> Data Center</h1>
                    <p>Dapatkan akses data mengenai perkuliahan di Teknik Elektro Universitas Mulawarman</p>
                </div>
                <div class="bottom-line position-absolute start-50 translate-middle"></div>
            </div>

            <div class="col-sm-7 position-relative form-container">
                <div class="col-9 col-lg-5 position-absolute top-50 start-50 translate-middle">
                    <h2>Login Ke HMTE Data Center</h2>
                    <p>Silahkan login menggunakan akun yang di berikan oleh Departeman MEDIFO</p>


                    @if(session()->has('loginError'))
                        <div class="alert alert-danger" role="alert">
                            {{session('loginError')}}
                        </div>
                    @endif

                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="nim" type="text"
                                   class="form-control @error('nim') is-invalid @enderror"
                                   id="floatingInput" placeholder="nim" required autofocus value="{{old('nim')}}">
                            <label for="floatingInput">NIM</label>
                            @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   id="floatingPassword" placeholder="Password" required">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-lg">Login</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
