@extends('Frontend.master')

@section('section-01')


<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>
                    <p class="heading-text">Buy books, and we ship to you.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    <div class="container">
        <div class="row pt120">
            <div class="books-grid">

            <div class="row mb30">
              @foreach ($products as $key => $product)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="books-item">
                        <div class="books-item-thumb">
                            <img src="{{ asset('storage/'. $product->image) }}" alt="book" height="200" width="200">
                            <div class="new">New</div>
                            <div class="sale">Sale</div>
                            <div class="overlay overlay-books"></div>
                        </div>

                        <div class="books-item-info">
                            <h5 class="books-title"><a href="{{ route('single-product', $product->id) }}"> {{ $product->name }} </a></h5>

                            <div class="books-price">${{ $product->price }}.00</div>
                        </div>

                        <a href="19_cart.html" class="btn btn-small btn--dark add">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
                        </a>

                    </div>
                </div>
                  @endforeach
            </div>

            <div class="row pb120">


                <div class="col-lg-12">

                    <nav class="navigation align-center">

                        {{ $products->links() }}



                    </nav>

                </div>

            </div>
        </div>
        </div>
    </div>
</div>
@endsection
