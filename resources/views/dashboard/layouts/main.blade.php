<!doctype html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--font--}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    {{--CSS--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{--Icons--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0894bf5bdc.js" crossorigin="anonymous"></script>
    {{--Animation--}}
    <link href="https://cdn.jsdelivr.net/gh/code-fx/Pure-CSS3-Animated-Border@V1.0/css/animated-border/animated-border.min.css" rel="stylesheet">
    {{--custom--}}
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/jadwal-kuliah.css">
    <link rel="stylesheet" href="/css/main.css">
    {{--dark mode--}}
    {{--<link rel="stylesheet" href="/css/dark-mode.css">--}}

    @vite([])

</head>
<body class="dashboard">

<div class="wrapper d-flex align-items-stretch">
    @include('dashboard.layouts.sidebar')

    <!-- Page Content  -->
    <div id="content-wrapper" class="content-wrapper">
        {{--navbar--}}
        <div class="navbar d-flex px-1 px-md-5 py-2">
            <button type="button" id="sidebarCollapse" class="btn mr-3 px-3">
                <i class="fa fa-bars" style="font-size: 1.5rem"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
            <h1 class="fw-bold title-color m-0">{{ str_replace(array('HMTE Data Center | ', 'Matkul | '), '' , $title)  }}</h1>

            <!-- profile pict -->
            <div class="d-flex ps-3 ms-auto">
                <button class="btn mr-3"><i class="bi bi-bell-fill"></i></button>
                <button class="btn dark-mode" ><i class="bi bi-moon"></i></button>
                <button class="btn bg-grey-1 px-4 my-2 mx-3 rounded-pill btn-search" style="cursor: text"><i class="bi bi-search"></i> Search</button>
                <a href="#exampleModal" class="p-2 position-relative" data-bs-toggle="modal">
                    <img src="/images/edna.jpg" alt="">
                </a>
            </div>
        </div>

        <!--content-->
        <div class="content ">
            @yield('page')
        </div>

    </div> <!--content wrapper-->
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="/js/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="/js/jquery.dragnscroll.js"></script>



    <script>
        /*select semester in profile detail*/
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

        /*dragable tag in ebook content list*/
        $('.ebook-tag').dragNscroll()

        /*dark mode*/
        // $( ".dark-mode" ).click(function() {
        //     $( 'body' ).toggleClass( "dark-mode" );
        // });

    </script>

</body>
</html>
