<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<style>
    .btn-general:focus{
        box-shadow: none !important;
    }
    .logos-image{
        width:100px;
        height:10px;
    }
    .logos-image img{
        width:100% ;
        height:100%;
        object-fit: contain;
    }
</style>
<body class="bg-light">
    <section class="container ">

        <div class="row pt-4">
            <div class="col-lg-4 m-auto pt-5">
                <form action="/admin/update/{{$food->id}}" method="POST"  class="" style="border: 1px solid rgb(36, 34, 34);border-radius:20px;">
                    @csrf
                    @method('PUT')
                    <a href="/" class="logos-image" class="" style="">
                        <img class="m-auto position-relative" src="{{asset('images/logo.png')}}" alt="" style="width: 130px; height:130px;left:30%;">
                    </a>
                    @if(session()->has('message'))
                        <div class="d-block position-relative" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" style="width:100.5%;height:6rem;background-color:rgb(36, 34, 34);top:-18px;border-radius:20px 20px 0px 0px;left:-1px;">
                            <p class="text-center text-light fs-4 pt-4">{{session('message')}}</p>
                        </div>
                    @endif
                    <div class="d-block px-4 pb-4">

                        <p class="text-center fs-5">Admin Edit Page</p>
                        <div class="d-block my-2">
                            <label for="">Name:</label><br>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" class="form-control btn-general" name="name" type="text" placeholder="Enter Name Here" value="{{$food->name}}">
                        </div>
                        <div class="d-block my-2">
                            <label for="">description:</label><br>
                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" class="form-control btn-general" name="description" type="text" placeholder="Enter description Here" value="{{$food->description}}">
                        </div>
                        <div class="d-block my-2">
                            <label for="">price:</label><br>
                            @error('price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" class="form-control btn-general" name="price" type="text" placeholder="Enter Price Here" value={{$food->price}}>
                        </div>
                        <div class="d-block my-2">
                            <label for="">Tags:</label><br>
                            @error('tags')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" class="form-control btn-general" name="tags" type="text" placeholder="Enter Tags Here" value="{{$food->tags}}">
                        </div>
                        <button class="btn btn-general form-control py-2 my-2 text-light" type="submit" style="background-color: rgb(26, 6, 6);">Submit</button>
                    </div>
                </form>
            </div>
        </div>


    </section>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://kit.fontawesome.com/d15ccd782a.js" crossorigin="anonymous"></script>
</body>

</html>
