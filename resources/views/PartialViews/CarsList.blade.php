<div class="container-fluid categories py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Vehicle <span class="text-primary">Categories</span></h1>
            <p class="mb-0">Here you can find the vehicles and it's categories
            </p>
        </div>
        <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">




@foreach ($Vehicles as $v)


            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="img/car-4.png" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>{{$v->VehicleModel->Name}}</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">4.8 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">${{$v->Price}}</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">4 Seat</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">{{$v->VehicleTransmission->Transmission_Name??'Not specified'}}</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">{{$v->VehicleTank->Fuel_Type??'no type'}}</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">{{$v->VehicleModel->Year}}</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">{{$v->VehicleMotor->Name??'not specified'}}</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">27K</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>


                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Car categories End -->
