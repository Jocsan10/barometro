<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
       :root {
            --tinto: #691c32;
            --carmesi: #9F2241;
            --verdeF: #10312b;
            --verdeB: #235b4e;
            --dorado: #bc955c;
            --arena: #ddc9a3;
            --grisSF: #2e2f2e;
            --grisF:rgb(72, 72, 72)1;
            --gris: #6f7271;
            --grisB: #98989a;

            /*----------------Degradados------------- */

            /*Tinto */
            --tinto70: #A22243;
            --tinto50: #D59299;
            --tinto20: #EFD2D4;

            /*Verde */
            --verde70: #235A4E;
            --verde50: #8EA9A2;
            --verde20: #D1DCD8;
            --word: #0d6efd;
            --power_poimt: #D35230;
            --excel: #107c41;
            --pdf: #B30B00;
        }


        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 0 50px;
            border-bottom: 1px solid #dbdbdb;
            background-color: var(--tinto);
        }

        header ul li {
            display: inline-block;
            list-style: none;
            margin: 0 30px;
        }

        header ul li:last-child {
            margin-right: 0;
        }

        header ul li a {

            text-decoration: none;
            color: white;
            padding: 22px 0;
            display: inline-block;
            transition: all ease 0.3s;
            font-size: 18px;
        }

        header ul li a:hover {
            color: var(--dorado);
        }

        /* submenu style */
        header ul .submenu {
            position: absolute;
            width: 200px;
            background-color: var(--tinto);
            box-shadow: 0 20px 45px #00000020;
            margin-top: -50px;
            opacity: 0;
            z-index: -999;
            transition: all ease 0.5s;
        }

        header ul li:hover .submenu {
            z-index: 99;
            opacity: 1;
            margin-top: 0;
        }

        header ul .submenu li {
            margin: 0;
            width: 100%;
        }

        header ul .submenu li a {
            padding: 15px 20px;
            display: inline-block;
            width: 100%;
        }

        .logo {
            width: 150px;
        }

        .titulo_paginacion {
            margin-top: 5px;
            text-align: center;
        }

        .logo>a>img {
            width: 150px;

        }
        .ubicacion_apartado{
            width: 80%;
            margin-left: 10%;
            font-size: 1rem;
            color: var(--grisF);
            display: flex;
            flex-direction: row;
            text-decoration: none;
        }
        .ubicacion_apartado > a{
            font-size: .8rem;
            color: var(--grisF);
            text-decoration: underline;
        }
        .ubicacion_apartado > a:hover{
            color: var(--carmesi);
            text-decoration: underline;
        }
        .ubicacion_apartado > p{
            font-size: .8rem;
            color: var(--grisF);
        }
        .fa-file-word-o{
        color: var(--word);
    }
    .fa-file-excel-o{
        color: var(--excel);
    }
    .fa-file-pdf-o{
        color: var(--pdf);
    }
    .fa-file-powerpoint-o{
        color: var(--power_poimt);
    }
    .enlace_menu{
        font-weight: bold; 
    }
    </style>
    @yield('style')

</head>

<body>
    @isset($error)
        <script>
            Swal.fire(

                '{{ $error_no_se_encontro }}',
                '{{ $error_no_se_encontro_sub }}',

            )
        </script>
    @endisset
    <main>
        <header>
            <div class="logo">
                <a href="#"><img
                        src="https://www.puertovallarta.gob.mx/img/principal/Heraldicos/Gobierno-White.png"
                        alt=""></a>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="enlace_menu">Objetivo</a> </li>
                    <li><a href="#" class="enlace_menu">Presentación</a></li>
                    <li><a href="#" class="enlace_menu">Presupuesto modelo</a></li>
                </ul>
            </nav>
        </header>
    </main>

    @yield('contenido')
</body>

</html>
