@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Products</div>
                <div class="card-body">
               
                    <p class="card-text">Manage and view all products available in the store.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Your Cart</div>
                <div class="card-body">
                 
                    <p class="card-text">View and manage items in your cart.</p>
                    <a href="{{ route('cart.index') }}" class="btn btn-light">Go to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Profile</div>
                <div class="card-body">
                
                    <p class="card-text">Manage your account settings and preferences.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

