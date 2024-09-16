@include('PartialViews.Head')
<!-- Carousel Start -->
<div class="header-carousel">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="First slide"/>
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">Continue vehicle details</h4>
                                    <form method="Post" name="AddVehicleForm" action="" enctype="multipart/form-data">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option disabled selected hidden>Select Your vehicle model name</option>
                                                    @foreach ($VModels as $model)


                                                    <option value="{{$model->id}}">{{$model->Name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">

                                                    <input class="form-control" type="text" placeholder="Enter a Vehicle Type" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span> <span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter a motor name" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter a fuel type" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example" >
                                                    <option value="1">Manual</option>
                                                    <option value="2" selected>Automatic</option>

                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example" >
                                                    @foreach ($VColors as $color)

                                                    <option disabled selected hidden>Select Your vehicle color</option>
                                                    <option value="{{$color->id}}">{{$color->Name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example" >
                                                    <option disabled selected hidden>Select Your vehicle condition</option>
                                                    @foreach ($VConditions as $Condition)
                                                    <option value="{{$Condition->id}}">{{$Condition->Vehicle_Condition}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <input type="file" name="VehiclePhoto">
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder="Enter a price with EG pound" >
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-light w-100 py-2">Add Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Add your car now for sell</h1>
                                    <p>Treat yourself in Egypt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="First slide"/>
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">CONTINUE CAR RESERVATION</h4>
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Your Car type</option>
                                                    <option value="1">VW Golf VII</option>
                                                    <option value="2">Audi A1 S-Line</option>
                                                    <option value="3">Toyota Camry</option>
                                                    <option value="4">BMW 320 ModernLine</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Tank name</span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter a tank name" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a href="#" class="text-start text-white d-block mb-2">Need a different drop-off location?</a>
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="Enter a City or Airport" aria-label="Enter a City or Airport">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-light w-100 py-2">Book Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white"> </h1>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
