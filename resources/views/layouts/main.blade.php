<!doctype html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0894bf5bdc.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="dashboard">

<div class="wrapper d-flex align-items-stretch">
    @include('partials.sidebar')

    <!-- Page Content  -->
    <div id="content-wrapper" class="content-wrapper">
        <div class="content">
            <!--tanggal dan judul-->
            <?php
                $dt = \Carbon\Carbon::now();
                $dt->setTimezone('Asia/Singapore');
            ?>
            <p class="mb-0">{{ $dt->toDayDateTimeString() }}</p>
            <h1 class="fw-bold title-color mb-3">{{ Request::path() === '/' ? 'Dashboard':'' }}</h1>

            @yield('page')

        </div> <!--content-->
    </div> <!--content wrapper-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="/js/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/main.js"></script>


    <script>
        // $(".matkul-box").click(function () {
        //     window.location = $(this).data("location");
        //     return false;
        // });

        const { createApp } = Vue

        createApp({
            data() {
                return {
                    confirm:0,
                    hide: 1,
                    semester: {{auth()->user()->semester}}
                }
            }
        }).mount('#app')


    </script>

</body>
</html>
