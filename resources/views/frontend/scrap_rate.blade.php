@extends('frontend.layouts.app')
@section('content')
    <!-- Breadcroumb Area -->

	<div class="breadcroumb-area contact-bg">
		<div class="overlay-2"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title text-center">
						<h1>Scrap Rate</h1>
						<h6><a href="{{route('scrap_rate')}}">Home</a> / Scrap Rate</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="project-area section-padding pb-80">
        <div class="container">            
            <div class="project-wrap-2">
                <div class="row">
				@forelse ($products as $product)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="project-single">
                            <div class="project-img">
							<img src="{{ asset('backend/images/product/' . $product->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('backend/images/no-image.png') }}'"
                            alt="">
                            </div>
                            <div class="project-content">
							   <div class="project-cat text-center">
                                    <h5>Rs. {{ $product->price }}/Kg</h5>
                                </div>
                                <div class="project-title text-center">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                                <div class="project-more text-center">
                                    <a class="main-btn border-btn" href="{{route('sell_scrap')}}">Pickup Request <i
                                            class="las la-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
					@empty
                   <h5>Data Not Found</h5>
                @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection