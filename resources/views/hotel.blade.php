<x-scope>
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Hotels</h6>
                    <h1 class="mb-5">Our Hotels</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @if (count($hotels) <= 0)
                        <h2 class='text-center'>NULL</h2>
                    @else
                        @foreach ( $hotels as $hotel )
                        <div class="col-lg-4 col-md-6 wow fadeInUp mt-3" data-wow-delay="0.1s">
                            <div class="package-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{asset('storage/'.$hotel->hotel_img)}}" alt="">
                                </div>
                                <div class="d-flex border-bottom">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$hotel->city}}</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{$hotel->phone_number}}</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Nombre de chambre {{$hotel->room_count}}</small>
                                </div>
                                <div class="text-center p-4">
                                    <h4 class="mb-0">Prix a partir de {{$hotel->min_price}} MAD</h4>
                                    <div class="mb-3">
                                        @for ($i =0; $i < $hotel->starts ; $i++)
                                            <small class="fa fa-star text-primary"></small>
                                        @endfor 
                                    </div>
                                    <p>{{Str::limit($hotel->description, 50)}}</p>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="{{route('hotels.edit', $hotel)}}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
                
            </div>
        </div>
        <!-- Service End -->

</x-scope>