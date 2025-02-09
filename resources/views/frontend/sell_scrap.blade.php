@extends('frontend.layouts.app')
@section('content')

     <!-- Breadcroumb Area -->
     <div class="breadcroumb-area pickup-bg">
         <div class="overlay-2"></div>
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="breadcroumb-title text-center">
                         <h1>Sell Scrap</h1>
                         <h6><a href="{{route('sell_scrap')}}">Home</a> / Sell Scrap</h6>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Quotation Section -->
     <div class="quotation-section gray-bg section-padding">
         <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="quotation-wrapper">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-12">
                                <h2 class="mb-20">Are you interested in a Quotation?</h2>                         
                                <p class="mb-20">Please complete the form below, to request a quote, and we’ll be in touch. Or you can call us +91-9454528015 and our specialists will provide the necessary help!</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="quotation-box">
                                    <div class="form_heading">
                                        <h5>Contact Information</h5>
                                        <p>This information will be used to contact you</p>
                                    </div>
                                    <form action="{{ route('enquiry.store') }}" method="POST" onsubmit="return checkform(this);">
                            @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label>Name
                                        </label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter Name"
                                            required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Phone
                                        </label>
                                        <input class="form-control" type="number" name="phone" placeholder="Enter Phone no."
                                            required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Pickup Address
                                        </label>
                                        <input class="form-control" type="text" name="email" placeholder="Enter Pickup Address"
                                            required="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-20">
                                        <label>Scrap Type
                                        </label>
                                        <div class="quotation-item">
                                            <select class="form-dropdown form-control select_option"
                                                 data-component="dropdown" name="scrap_type">
                                                <option value="0"> Select Scrap Type </option>
                                                <option value="1"> Paper </option>
                                                <option value="2"> Metals </option>
                                                <option value="3"> Plastic </option>
                                                <option value="4"> Electronics </option>
                                                <option value="5"> E- Waste </option>
                                                <option value="6"> Bulk Scrap </option>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6">
                                        <label>Pickup Date
                                        </label>
                                        <input class="form-control" type="date" name="pickup_date" required="">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label>Pickup Time
                                        </label>
                                        <input class="form-control" type="time" name="pickup_time" required="">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="main-btn primary">submit request</button>
                                    </div>
                                </div>
                            </form>
       
                                </div>
                            </div>
       
       
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>

@endsection