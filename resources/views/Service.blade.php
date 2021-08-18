@extends('layout.app')
@section('title','service')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-4 p-1">
            <div class="card">
                <img src="{{asset('images/nature.jpg')}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis totam maiores deleniti architecto? Quia ipsa nemo eaque rem officia.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 p-1">
            <div class="card">
                <img src="{{asset('images/nature.jpg')}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis totam maiores deleniti architecto? Quia ipsa nemo eaque rem officia.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 p-1">
            <div class="card">
                <img src="{{asset('images/nature.jpg')}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis totam maiores deleniti architecto? Quia ipsa nemo eaque rem officia.</p>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <h5>Address</h5>
            <p>Baladin Amin Abason ,Tongi , Gazipur</p>
            <p>+8801839945080</p>
            <p>web.ahraihan@gmail.com</p>
        </div>
    </div>
</div>

@endsection