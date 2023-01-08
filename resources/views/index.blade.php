@extends('layout')

@section('content')

    {{-- second-section --}}
    <section class="second-setion">
        <div class="container-lg py-5">
            <div class="row col-lg-11 m-auto">
                <div class="col-lg-6 col-md-6">
                    <div class="about-image-box">
                        <img src="{{asset('images/second-food.jpg')}}" alt="" style="border-radius:20px;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-area">
                        <p style="font-size:4rem;">About Us</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos repellat eaque veritatis ut, fugit facilis quos harum molestias nisi laborum perferendis odio atque optio beatae sapiente natus ipsum commodi corporis porro! Officiis neque hic repudiandae eveniet accusamus reiciendis quas iusto placeat tempore, pariatur dignissimos odio quaerat qui ipsum ullam maiores ratione error voluptatem ab autem sunt, velit quo quis cupiditate.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos repellat eaque veritatis ut, fugit facilis quos harum molestias nisi laborum perferendis odio atque optio beatae sapiente natus ipsum commodi corporis porro! Officiis neque hic repudiandae eveniet accusamus reiciendis quas iusto placeat tempore, pariatur dignissimos odio quaerat qui ipsum ullam maiores ratione error voluptatem ab autem sunt, velit quo quis cupiditate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- third section --}}
    <section class="third-section">
        <div class="container-lg py-5">
            <div class="row">
                <p class="text-light" style="font-size:3rem;">Our Services</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="services-section-div">
                        <i class="fa-solid fa-utensils main-service-icon"></i><br>
                        <span class="main-service-text">Meals</span>
                        <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam illum aut assumenda veritatis cumque quae nulla at sit mollitia voluptas, reiciendis dolores non pariatur deserunt?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="services-section-div">
                        <i class="fa-solid fa-champagne-glasses main-service-icon"></i><br>
                        <span class="main-service-text">Weddings/Party</span>
                        <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam illum aut assumenda veritatis cumque quae nulla at sit mollitia voluptas, reiciendis dolores non pariatur deserunt?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="services-section-div">
                        <i class="fa-solid fa-cake-candles main-service-icon"></i><br>
                        <span class="main-service-text">Catering</span>
                        <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam illum aut assumenda veritatis cumque quae nulla at sit mollitia voluptas, reiciendis dolores non pariatur deserunt?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="services-section-div">
                        <i class="fa-solid fa-bowl-food main-service-icon"></i><br>
                        <span class="main-service-text">Pivate Event</span>
                        <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam illum aut assumenda veritatis cumque quae nulla at sit mollitia voluptas, reiciendis dolores non pariatur deserunt?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="services-section-div">

                        <i class="fa-solid fa-martini-glass-citrus main-service-icon"></i><br>
                        <span class="main-service-text">Dinner/Dates</span>
                        <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam illum aut assumenda veritatis cumque quae nulla at sit mollitia voluptas, reiciendis dolores non pariatur deserunt?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6">
                    <div class="services-section-div">

                        <i class="fa-solid fa-face-surprise main-service-icon"></i><br>
                        <span class="main-service-text">Others</span>
                        <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam illum aut assumenda veritatis cumque quae nulla at sit mollitia voluptas, reiciendis dolores non pariatur deserunt?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- fourth section --}}
    <section class="fourth-section">
        <div class="container py-4">
            <div class="row">
                <span class="text-dark" style="font-size:3rem;">Our     Products</span>
            </div>
            <div class="d-none d-lg-block d-md-block">
                <div class="row">
                    <div class="col-lg-4 col-md-4 p-0">
                        <div class="products-display-one position-relative">
                            <img src="{{asset('images/second-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:3rem;">Meals</p>
                            </div>
                        </div>

                        <div class="products-display-one position-relative">
                            <img src="{{asset('images/fifth-food.jpeg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:3rem;">Weeding/ Party</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 p-0">
                        <div class="products-display products-display-two position-relative">
                            <img src="{{asset('images/ninth-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:3rem;">Catering</p>
                            </div>
                        </div>
                        <div class="products-display products-display-two position-relative">
                            <img src="{{asset('images/seventh-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:3rem;">Orders</p>
                            </div>
                        </div>
                        <div class="products-display products-display-two position-relative">
                            <img src="{{asset('images/fourth-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:30%;font-size:3rem;">Dinner/ Dates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 p-0">
                        {{-- <div class="products-display products-display-three position-relative">
                            <img src="{{asset('images/fifth-food.jpeg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:3rem;">Suprise Packages</p>
                            </div>
                        </div> --}}
                        <div class="products-display products-display-three position-relative">
                            <img src="{{asset('images/second-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:3rem;">Others</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none d-md-none">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="products-display-one position-relative">
                            <img src="{{asset('images/fifth-food.jpeg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:2rem;">Weeding/ Party</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <div class="products-display-one position-relative">
                            <img src="{{asset('images/second-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:2rem;">Resturant</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <div class="products-display products-display-two position-relative">
                            <img src="{{asset('images/ninth-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:2rem;">Catering</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0">
                        <div class="products-display products-display-two position-relative">
                            <img src="{{asset('images/fourth-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:30%;font-size:2rem;">Dinner/ Dates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <div class="products-display products-display-one position-relative">
                            <img src="{{asset('images/fifth-food.jpeg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:25%;font-size:2rem;">Suprise Packages</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <div class="products-display products-display-two position-relative">
                            <img src="{{asset('images/seventh-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:2rem;">Orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0">
                        <div class="products-display products-display-one position-relative">
                            <img src="{{asset('images/second-food.jpg')}}" alt="">
                            <div class="position-absolute after-products-div">
                                <p class="position-relative text-center" style="z-index:;top:35%;font-size:2rem;">Others</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- fifth section --}}
    <section>
        <div class="container-fluid py-5">
            <div class="row testimonails-column">
                <div class="col-lg-6 col-md-6 col-12 p-0 ">
                    <div class="testimonial-images">
                        <img src="{{asset('images/chef.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 m-auto ">
                    <div class="testimonail-region m-auto px-lg-5 px-0 px-md-4 py-lg-0 py-md-0 py-5" style="width:fit-content;">
                        <p class="text-center text-light" style="font-size: 2rem;">Agegboyega</p>
                        <p class="text-center text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto numquam pariatur impedit laudantium esse eum soluta iste ex quia neque at tempora, animi deleniti vitae rem, quidem ipsum nulla fuga sit modi. Necessitatibus ut asperiores numquam velit ratione culpa incidunt nisi, distinctio cum, perspiciatis mollitia corrupti modi blanditiis. Minima, autem!</p>
                        <div class="stars-family m-auto" style="width:fit-content;">
                           <i class="fas fa-star" style="font-size:1.5rem;color:brown;"></i>
                           <i class="fas fa-star" style="font-size:1.5rem;color:brown;"></i>
                           <i class="fas fa-star" style="font-size:1.5rem;color:brown;"></i>
                           <i class="fas fa-star" style="font-size:1.5rem;color:brown;"></i>
                           <i class="fas fa-star" style="font-size:1.5rem;color:brown;"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    {{-- sixth section --}}
    <section>
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 m-auto m-md-0 m-lg-0">
                    <div class="card card-map" style="height:fit-content;">
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=500&amp;hl=en&amp;q=blue house, adenike ,ogbomosho&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-block py-4">
                        <div class="d-block">
                            <span style="font-size:1.5rem;">Locate Us</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est pariatur, sunt et ipsum dolorem tenetur.</p>
                        </div>


                        <div class="d-block">
                            <span style="font-size:1.5rem;">contact Us</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est pariatur, sunt et ipsum dolorem tenetur.</p>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center m-0">
                                    <i class="fa-solid fa-square-phone m-0" style="font-size:1.2rem;"></i>
                                    <p class="m-0 mx-1" >+234 814 002 3959</p>
                                </div>
                                <div class="d-flex align-items-center m-0 mx-3">
                                    <i class="fa-solid fa-envelope m-0" style="font-size:1.2rem;"></i>
                                    <p class="m-0 mx-1" >africanbite@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-block mt-4">
                            <span style="font-size:1.5rem;">Follow Us</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est pariatur, sunt et ipsum dolorem tenetur.</p>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center m-0">
                                    <i class="fa-brands fa-square-instagram m-0" style="font-size:1.6rem;"></i>
                                </div>
                                <div class="d-flex align-items-center m-0 mx-3">
                                    <i class="fa-brands fa-square-twitter m-0" style="font-size:1.6rem;"></i>
                                </div>
                                <div class="d-flex align-items-center m-0 mx-2">
                                    <i class="fa-brands fa-square-facebook m-0" style="font-size:1.6rem;"></i>
                                </div>
                                <div class="d-flex align-items-center m-0 mx-2">
                                    <i class="fa-brands fa-linkedin m-0" style="font-size:1.6rem;"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
