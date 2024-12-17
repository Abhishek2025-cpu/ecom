@extends('layouts.app')

@section('content')
<style>
    img{
        height: 400px;
    }
    </style>
    <!-- Hero Slider Section -->
<div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="hero-slide d-flex align-items-center justify-content-center text-center" style="background-image: url('images/slider1.png');">
                <div class="container text-white">
                    <h1 class="display-3 fw-bold mb-4">Welcome to Our Store</h1>
                    <p class="lead mb-4">Discover the best products at unbeatable prices. Start shopping now!</p>
                 
                    <a href="#featured-products" class="btn btn-outline-light btn-lg">Explore More</a>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="hero-slide d-flex align-items-center justify-content-center text-center" style="background-image: url('images/slider2.png');">
                <div class="container text-white">
                    <h1 class="display-3 fw-bold mb-4">Exclusive Deals Await You</h1>
                    <p class="lead mb-4">Get the latest gadgets and accessories at incredible discounts.</p>
                    
                    <a href="#featured-products" class="btn btn-outline-light btn-lg">Browse Now</a>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="hero-slide d-flex align-items-center justify-content-center text-center" style="background-image: url('images/slider3.png');">
                <div class="container text-white">
                    <h1 class="display-3 fw-bold mb-4">New Arrivals</h1>
                    <p class="lead mb-4">Check out the latest additions to our store and upgrade your lifestyle.</p>
                
                    <a href="#featured-products" class="btn btn-outline-light btn-lg">Discover More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- CSS Styling -->
<style>
    #heroSlider{
        width: 100%;
    }
.hero-slide {
    height: 100vh; /* Full viewport height */
    width: 100%;   /* Full width */
    background-size: cover;
    background-position: center;
    position: relative;
}

.hero-slide::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay for better readability */
}

.hero-slide .container {
    position: relative;
    z-index: 1;
}
</style>

    <div class="container mt-5">
        <!-- Welcome Section -->
        <div class="row">
            <div class="col text-center">
                <h1 class="display-4">Welcome to Our E-Commerce Store</h1>
                <p class="lead">Browse through the latest products and shop your favorite items!</p>
            </div>
        </div>

        <!-- Categories Section  -->
        <div class="row mt-5">
            <div class="col text-center">
                <h2>Shop by Category</h2>
            </div>
        </div>
        <div class="row mb-5">
             <!-- Category 1  -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/pic1.png') }}" class= "card-img-top" alt="Category 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Electronics</h5>
                        <p class="card-text">Browse the latest gadgets and electronics.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>

             <!-- Category 2  -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/pic2.png') }}" class="card-img-top" alt="Category 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Clothing</h5>
                        <p class="card-text">Explore trendy and stylish clothing options.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>

             <!-- Category 3  -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/pic3.png') }}" class="card-img-top" alt="Category 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Home & Living</h5>
                        <p class="card-text">Find furniture, décor, and other home essentials.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Products Section  -->
        <div class="row mt-5">
            <div class="col text-center">
                <h2>Featured Products</h2>
            </div>
        </div>

        <div class="row mb-5">
             <!-- Product 1  -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/pic4.png') }}"class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Smartphone</h5>
                        <p class="card-text">The latest model of our premium smartphone.</p>
                        <p class="font-weight-bold">$399.99</p>
                        <!-- Add to Cart Form -->
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="name" value="Sample Product">
                    <input type="hidden" name="price" value="99.99">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
                    </div>
                </div>
            </div>
<!-- 
             Product 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/pic5.png') }}"class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">T-shirt</h5>
                        <p class="card-text">Comfortable, stylish, and durable T-shirt.</p>
                        <p class="font-weight-bold">$19.99</p>
                       <!-- Add to Cart Form -->
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="name" value="Sample Product">
                    <input type="hidden" name="price" value="99.99">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
                    </div>
                </div>
            </div>

             <!-- Product 3  -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/pic6.png') }}" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Smartwatch</h5>
                        <p class="card-text">Track your fitness and stay connected with this smartwatch.</p>
                        <p class="font-weight-bold">$199.99</p>
                       <!-- Add to Cart Form -->
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="name" value="Sample Product">
                    <input type="hidden" name="price" value="99.99">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
<section class="features py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="icon mb-3">
                    <i class="fas fa-shipping-fast fa-3x text-primary"></i>
                </div>
                <h4>Fast Delivery</h4>
                <p>Get your orders delivered quickly and reliably.</p>
            </div>
            <div class="col-md-4">
                <div class="icon mb-3">
                    <i class="fas fa-headset fa-3x text-primary"></i>
                </div>
                <h4>24/7 Support</h4>
                <p>Our team is available around the clock for assistance.</p>
            </div>
            <div class="col-md-4">
                <div class="icon mb-3">
                    <i class="fas fa-dollar-sign fa-3x text-primary"></i>
                </div>
                <h4>Best Prices</h4>
                <p>We offer competitive prices on all our products.</p>
            </div>
        </div>
    </div>
</section>
        <!-- Categories Section -->
<section class="categories py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Shop by Category</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="category-card text-center p-3 border rounded">
                    <i class="fas fa-mobile-alt fa-3x text-primary mb-2"></i>
                    <h5>Electronics</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-card text-center p-3 border rounded">
                    <i class="fas fa-tshirt fa-3x text-primary mb-2"></i>
                    <h5>Clothing</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-card text-center p-3 border rounded">
                    <i class="fas fa-couch fa-3x text-primary mb-2"></i>
                    <h5>Home & Furniture</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-card text-center p-3 border rounded">
                    <i class="fas fa-book fa-3x text-primary mb-2"></i>
                    <h5>Books</h5>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Product Grid -->
<section id="products" class="products py-5">
    <div class="container">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="product-card border rounded p-3 text-center">
                    <img src="/images/pic7.png" class="img-fluid mb-3" alt="Product 1">
                    <h5>Smartphone</h5>
                    <p>$399.99</p>
                    <button class="btn btn-primary">Explore</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card border rounded p-3 text-center">
                    <img src="/images/pic8.png" class="img-fluid mb-3" alt="Product 2">
                    <h5>Headphones</h5>
                    <p>$99.99</p>
                    <button class="btn btn-primary">Explore</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card border rounded p-3 text-center">
                    <img src="/images/pic9.png" class="img-fluid mb-3" alt="Product 3" style="height:218px;width:100%">
                    <h5>Backpack</h5>
                    <p>$49.99</p>
                    <button class="btn btn-primary">Explore</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card border rounded p-3 text-center">
                    <img src="/images/pic10.png" class="img-fluid mb-3" alt="Product 4">
                    <h5>Smart Watch</h5>
                    <p>$199.99</p>
                    <button class="btn btn-primary">Explore</button>
                </div>
            </div>
        </div>
    </div>
</section> 

        <!-- Newsletter Section -->
<section class="newsletter bg-primary text-white py-5">
    <div class="container text-center">
        <h2>Subscribe to Our Newsletter</h2>
        <p>Stay updated with our latest products and offers.</p>
        <form class="d-flex justify-content-center mt-3">
            <input type="email" class="form-control w-50" placeholder="Enter your email">
            <button type="submit" class="btn btn-light ms-2">Subscribe</button>
        </form>
    </div>
</section>



   
@endsection
