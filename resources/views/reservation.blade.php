<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/catering.css')}}">
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
    body .second-section{
        width:100%;
        height: 100%;
        position:fixed;
        z-index: 100;
        background-color: rgba(121, 119, 119, 0.322);
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
                        <a class="nav-links catering-links mx-3"  href="/menu"><li class="">Menu</li></a>
                        <a  class="nav-links catering-links mx-3" href=""><li class=" ">Services</li></a>
                        <a class="nav-links catering-links mx-3"  href="/reservation"><li class="">Reservations</li></a>
                        <a class="nav-links catering-links mx-3"  href=""><li class=" ">About</li></a>
                    </ul>
                    <button class="btn order-btn m-0 btn-general px-4 rounded-pill text-light m-auto">Order Now</button>
                </div>

            </div>
        </nav>

        <div class="container pb-5" style="height:fit-content !important;">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{-- <select name="" class="select-control px-3 py-2 rounded-3" id="">
                            <option value="" selected style="">Kindly select a Reservation</option>
                            <option value="" style="">Private Event</option>
                            <option value="" style="">Dinner/Dates</option>
                            <option value="" style="">Catering</option>
                            <option value="" style="">Meals</option>
                            <option value="" style="">Wedding/party</option>
                            <option value="" style="">Delivery</option>
                        </select> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-11 m-auto p-4" style="border: 1px solid rgba(121, 119, 119, 0.322);border-radius:20px;">
                    <form action="/store/reservation" class="" method="POST">
                        @csrf
                        {{-- @method('PUT') --}}
                        <p class="text-light text-center fs-5">Kindly place your reservation</p>
                        <div class="d-block my-3">
                            <label for="" class="text-light">Name:</label>
                            <input type="text" name="name" class="form-control py-3 input-for-me" placeholder="Your Name please">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="d-block my-3">
                            <label for="" class="text-light">Email:</label>
                            <input type="email" name="email" class="form-control py-3 input-for-me" placeholder="Your Email please">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <select name="type" class="form-control py-3 mt-3 input-for-me" id="">
                            <option value="" selected style="">Kindly select a Reservation</option>
                            <option value="Private Event" style="">Private Event</option>
                            <option value="Dinner/Dates" style="">Dinner/Dates</option>
                            {{-- <option value="" style="">Catering</option>
                            <option value="" style="">Meals</option>
                            <option value="" style="">Wedding/party</option>
                            <option value="" style="">Delivery</option> --}}
                        </select>
                        @error('type')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <select name="table" class="form-control py-3 mt-3 input-for-me" id="">
                            <option value="" selected style="">Kindly select a Table</option>
                            @foreach($reservations as $reservation)

                                <option value="{{ $reservation->name }}" style="">{{ $reservation->name }}</option>
                                @endforeach

                        </select>
                        @error('table')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="d-block my-3">
                            <label for="" class="text-light">Table for:</label>
                            <input type="text" name="people" class="form-control py-3 input-for-me" placeholder="Table for how many people">
                            @error('people')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="d-block my-3">
                            <label for="" class="text-light">Date:</label>
                            <input type="date" name="date" class="form-control py-3 input-for-me" placeholder="Table for how many people">
                            @error('date')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-general form-control text-light py-3 my-3" style="background-color:rgb(26, 7, 7);">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @if(session()->has('message'))
        
        <section class="second-section" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" style="top:0rem;">
            <div class="row">
                <div class="col-lg-4 m-auto position-relative" style="background-color: rgb(245, 230, 230);top:35vh;border-radius:20px;">
                    <div class="d-block px-3 py-5">
                        {{-- <i class="fa-solid fa-circle-check" style="color: rgb(32, 6, 6);font-size:2rem !important;"></i> --}}
                        <p class="text-center">
                            <i class="fa-solid fa-circle-check fa-4x" style="color: brown;"></i>

                        </p>

                        <p class="text-center" style="font-size: 1.4rem;">{{session('message')}}</p>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://kit.fontawesome.com/d15ccd782a.js" crossorigin="anonymous"></script>
</body>
<footer>
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
