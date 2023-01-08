@auth


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<style>
    @media(max-width:500px){
        .nav-links{
            font-size:1.5rem !important;
            text-align: center !important;
        }
    }
    @media(max-width:500px){
        .me-you{
            width: 100% !important;
        }
    }
    .me-you{
            width: 50%;
        }
    /* In your CSS file */

    .pagination-container .page-item {
    display: inline-block;
    }

    .pagination-container .page-item .page-link {
    display: block;
    padding: 0.5rem 0.75rem;
    color: brown;
    background-color: rgb(235, 235, 235);
    border: 0px solid #dee2e6;
    }

    .pagination-container .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: brown;
    border-color: rgb(34, 9, 9);
    }

    .pagination-container .page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    }

    .pagination-container .page-item:last-child .page-link {
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    }

</style>
<body class="">
    <section class="container-fluid">



        <div class="container-fluid column-menu">
            <div class="d-flex py-4 justify-content-center align-items-center">
                <a href="/" class="logo-image m-0">
                    <img class="d-lg-block d-md-block d-block" src="{{asset('images/African.png')}}" alt="">
                    {{-- <img class="d-lg-none d-md-none d-block" src="{{asset('images/logo.png')}}" alt=""> --}}
                </a>

            </div>

            @if(session()->has('message'))
                <div class="d-block position-relative m-auto me-you" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" style="height:6rem;background-color:rgb(228, 183, 183);">
                    <p class="text-center fs-4 pt-4">{{session('message')}}</p>
                </div>
            @endif
            <div class="row  py-5 px-4">

                <div class="d-flex justify-content-center">
                    <a href="/admin/reservation" class="fs-3" style="color:whitesmoke;">Reservation</a>
                </div>


                <div class="d-lg-flex d-md-flex d-block justify-content-end align-items-center">
                    <p class="text-light fs-5 mx-3 m-0">Welcome {{auth()->user()->name}}</p>
                    <form action="/logout" method="POST" class=" m-0">
                        @csrf
                        <button type="submit" class="btn m-0 btn-general px-4 rounded-pill fs-5" style="background-color:transparent;color:whitesmoke;">Logout</button>
                    </form>

                </div>
                @unless (count($food)==0)

                @foreach ($food as $meal)

                <div class="col-lg-4 col-md-4 col-12 m-auto my-3 p-3" style="border:1px dashed white;padding:1rem !important;">
                    <div class="d-block mx-3">

                        <div class="d-block " style="width:100%;">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-light text-center" style="font-size:2rem;">{{$meal['name']}}</p>
                                <p class="text-light m-0" style="font-size:1.5rem;">${{$meal['price']}}</p>
                            </div>
                            <div class="d-block">
                                <p class="text-light text-center">{{$meal['description']}}</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <form action="/admin/delete/{{$meal['id']}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="m-0 btn btn-general" type="submit" style="color:rgb(223, 155, 155);font-family:none !important;font-size:1.2rem;background-color:none;">Delete</button>
                            </form>
                            <a href="/admin/edit/{{$meal['id']}}" style="text-decoration: none;font-family:none !important;">
                                <button class="btn m-0 btn-general px-4 rounded-pill" style="border: 1px solid rgb(197, 106, 106) !important;font-size: 0.8rem !important;background-color: transparent !important;color:rgb(231, 180, 180);">edit</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endunless




                <div class="pagination-container d-flex justify-content-end ms-auto">
                    {{$food->links()}}
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://kit.fontawesome.com/d15ccd782a.js" crossorigin="anonymous"></script>
</body>
<footer class="">
    <div class="container-lg py-5">
        <div class="row">

        </div>
        <hr>
        <div class="col-12">
            <div class="d-lg-flex d-md-flex align-items-center justify-content-between">
                <p class="text-light opacity-75 text-center">copyright 2022</p>
                <p class="text-light opacity-75 text-center">designed by dev_sammy</p>
                <a href="/admin/create" class="btn m-0 btn-general px-lg-4 px-md-4 px-4 rounded-pill d-none d-lg-block d-md-block" style="background-color:rgb(223, 192, 192);color:rgb(26, 10, 10);font-family:none;">Post Job</a>
            </div>
            <div class="d-flex d-lg-none d-md-none align-items-center justify-content-center">

                <a href="/admin/create" class="btn m-0 btn-general px-lg-4 px-md-4 px-4 rounded-pill" style="background-color:rgb(223, 192, 192);color:rgb(26, 10, 10);font-family:none;">Post Job</a>
            </div>
        </div>
    </div>
</footer>
</html>
@else
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('css/menu.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Document</title>
</head>
<body style="background-image: none;background-color:whitesmoke;">

    <div class="row">
        <div class="col-lg-4 col-md-5 m-auto pt-5">
           <div class="d-block pt-5">
               <p class="fs-4 text-center">Hello please kindly login <a href="/admin/login" style="color: brown;">here</a> </p>
           </div>
        </div>
    </div>
</body>
</html>
@endauth
