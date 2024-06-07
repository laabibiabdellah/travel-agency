<x-scope>
    <style>
        body {
    font-family: Arial, sans-serif;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background: none;
    border: 1px solid #ccc;
    padding: 10px;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px #00000033;
    z-index: 1;
}

.dropdown-content label {
    display: block;
    padding: 8px 16px;
    cursor: pointer;
}

.dropdown-content label:hover {
    background-color: #f1f1f1;
}

.dropdown-content input {
    margin-right: 10px;
}

.dropdown:hover .dropdown-content {
    display: block;
}

    </style>
    
        <!-- Booking Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="booking p-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-md-6 text-white">
                            <h6 class="text-white text-uppercase">Hotel Bboking</h6>
                            <h1 class="text-white mb-4">Online Booking</h1>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                        </div>
                        <div class="col-md-6">
                            <h1 class="text-white mb-4">Book A Tour</h1>
                            <form method="POST" >
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" value="{{$hotel->hotel_name}}" disabled id="hotel-name" placeholder="Hotel Name">
                                            <label for="hotel-name">Hotel Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control bg-transparent" value="{{$hotel->min_price}}" disabled placeholder="Price">
                                            <label for="price">Price</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" value="{{$hotel->city}}" id="city" disabled placeholder="City">
                                            <label for="city">City</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-transparent" disabled placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">{{$hotel->description}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating date" id="booking_date" data-target-input="nearest">
                                            <input type="date" class="form-control bg-transparent datetimepicker-input" id="booking_date" placeholder="Booking date" data-target="booking_date" data-toggle="datetimepicker" />
                                            <label for="booking_date">Booking date</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dropdown">
                                            <button class="dropbtn text-white" >Example label</button>
                                            <div class="dropdown-content">
                                                <label><input type="checkbox" id="select-all"> Select all</label>
                                                <label><input type="checkbox" class="option" value="One"> One </label>
                                                <label><input type="checkbox" class="option" value="Two"> Two</label>
                                                <label><input type="checkbox" class="option" value="Three"> Three</label>
                                                <label><input type="checkbox" class="option" value="Four"> Four</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                                        <h3 class="text-white"> 200 MAD</h3>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Start -->
</x-scope>