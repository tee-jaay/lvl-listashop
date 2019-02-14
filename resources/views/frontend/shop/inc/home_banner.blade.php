<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                @if (Request::segment(1) == 'shop')
                    <h2>All Products</h2>
                    <div class="page_link">
                        <a href="{{route('homepage')}}">Home</a>
                        <a href="{{route('shop.home')}}">Shop</a>
                    </div>
                @endif
                @if (Request::is('*product'))
                    <h2>Product Details</h2>
                    <div class="page_link">
                        <a href="{{route('homepage')}}">Home</a>
                        <a href="{{route('shop.home')}}">Shop</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>