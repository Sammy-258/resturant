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
</style>
<body class="">
    <section class="container-fluid menu-section">
        <nav class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/" class="logo-image m-0">
                    <img class="d-lg-block d-md-block d-block" src="{{asset('images/African.png')}}" alt="">
                    {{-- <img class="d-lg-none d-md-none d-block" src="{{asset('images/logo.png')}}" alt=""> --}}
                </a>
                <i class="fa-solid fa-bars m-0 mt-3 d-lg-none d-md-none d-block" style="font-size: 1.8rem;color:whitesmoke;" id="menu-small"></i>
                <div class="d-lg-flex d-md-flex d-none align-items-center mx-lg-5 small-links-display" id="small-menu-show">
                    <div class="d-flex justify-content-end p-4">
                        <i class="fa-solid fa-xmark fs-1 d-block d-lg-none d-md-none" style="font-size:1.5rem !important;color:whitesmoke;" id="close-menu"></i>
                    </div>
                    <ul class="nav-links-ul m-0 mx-lg-5 m-auto">
                        <a class="nav-links menu-links mx-3"  href="/menu"><li class="">Menu</li></a>
                        <a  class="nav-links menu-links mx-3" href=""><li class=" ">Services</li></a>
                        <a class="nav-links menu-links mx-3"  href="/reservation"><li class="">Reservations</li></a>
                        <a class="nav-links menu-links mx-3"  href=""><li class=" ">About</li></a>
                    </ul>
                    <form class="d-flex p-1" action="/menu" role="search" style="border: 0px solid rgb(182, 181, 181);border-radius:30px;background-color:rgb(34, 11, 11);">
                        <input class="form-control btn-general text-light" type="search" name="search" placeholder="Search" aria-label="Search" style="background-color: transparent !important;border:none !important;">
                        <button class="btn order-btn m-0 btn-general px-4 py-2 rounded-pill text-light" type="submit" style="font-size:0.8rem !important;">Search</button>
                    </form>
                </div>

            </div>
        </nav>


        <div class="container py-5">
            <div class="row">


                <div class="col-lg-7 col-md-11 col-12 m-auto column-menu py-5">
                    <div class="d-block">
                        {{-- <p class="text-center text-light fw-bold" style="font-size:2.4rem;">Dinner</p> --}}

                        <div class="row py-3">


                            <div class="col-lg-11 col-md-12 m-auto">
                                <div class="d-block mx-3" style="width:fit-content;">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p class="text-light text-center" style="font-size:2.3rem;">{{$meal['name']}}</p>

                                    </div>
                                    <div class="d-block">
                                        <p class="text-light text-center">{{$meal['description']}}</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-light m-0" style="font-size:1.5rem;">${{$meal['price']}}</p>
                                    <div class="d-none align-items-center m-0">
                                        @php
                                            $tags=explode(',', $meal['tags']);
                                        @endphp
                                        @foreach ($tags as $tag)
                                        <button>{{$tag}}</button>

                                        @endforeach
                                    </div>
                                    <button class="btn m-0 btn-general px-4 rounded-pill" style="border: 1px solid rgb(197, 106, 106) !important;font-size: 0.8rem !important;background-color: transparent !important;color:rgb(231, 180, 180);">Order Now</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://kit.fontawesome.com/d15ccd782a.js" crossorigin="anonymous"></script>
</body>
<footer class="">
    <div class="container-lg py-5">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-10 m-auto">
                <div class="logo-image-footer">
                    <img class="" src="{{asset('images/African.png')}}" alt="">
                </div>
                <div class="text-about">
                    <p class="text-light" style="font-size:0.9rem;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi laboriosam dolor quisquam culpa quos dolorem ab porro dicta ad iure?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-6">
                <div class="d-block">
                    <span class="text-light" style="font-size:2rem;margin-left:2rem;">Links</span>
                    <div class="d-block" style="margin-left:2rem;">
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Menu link</a>
                        <a  class="nav-links-footer d-block my-2" href="" style="text-decoration:none;">Catering link</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Others link</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">About link</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="d-block">
                    <span class="text-light" style="font-size:2rem;margin-left:2rem;">services</span>
                    <div class="d-block" style="margin-left:2rem;">
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Resturant services</a>
                        <a  class="nav-links-footer d-block my-2" href="" style="text-decoration:none;">Weddings/Party services</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Catering services</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Order services</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Dinner/Dates services</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Suprise services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-8 m-auto">
                <div class="d-block">
                    <span class="text-light" style="font-size:2rem;margin-left:2rem;">Our Products</span>
                    <div class="d-block" style="margin-left:2rem;">
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Meals product</a>
                        <a  class="nav-links-footer d-block my-2" href="" style="text-decoration:none;">Mini-chops product</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Processed-Drinks product</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">snacks product</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">Appetite's product</a>
                        <a class="nav-links-footer d-block my-2"  href="" style="text-decoration:none;">vergeterian-meal product</a>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between">
                <p class="text-light opacity-75">copyright 2022</p>
                <p class="text-light opacity-75">designed by dev_sammy</p>
            </div>
        </div>
    </div>
</footer>
</html>
