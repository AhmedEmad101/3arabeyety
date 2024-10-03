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
                                    <h4 class="text-white mb-4">Search for a vehicle</h4>

                                    <form method="Post" name="AddVehicleForm" action="MultipleSearch" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="ownerID" id="hiddenField">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example" name="Model_ID">
                                                    <option disabled selected hidden>Select Your vehicle model name</option>
                                                    @foreach ($VModels as $model)


                                                    <option value="{{$model->id}}">{{$model->Name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">

                                                    <select class="form-select" name="Type_ID" id="" style="text-align: center;fontsize:" required>
                                                        <option disabled selected hidden>Select Your vehicle Type</option>
                                                        @foreach ($VType as $VehicleType)
                                                        <option value="{{$VehicleType->id}}" >{{$VehicleType->Type_Name}}</option>
                                                    @endforeach
                                                </select>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span> <span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <select name="Motor" id="">
                                                        <option disabled selected hidden>Select Your vehicle motor</option>
                                                        @foreach ($VMotor as $Motor)
                                                        <option value="{{$Motor->id}}">{{$Motor->Name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Drop off</span>
                                                    </div>

                                                        <select class="form-select" aria-label="Default select example" name="Tank_ID">
                                                            <option disabled selected hidden>Select vehicle tank type</option>
                                                            @foreach ($VTank as $Tank)

                                                            <option value="{{$Tank->id}}">{{$Tank->Fuel_Type}}</option>

                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example" name="Transimision_ID">
                                                    <option disabled selected hidden>Select vehicle Transimission</option>
                                                    @foreach ($VTransimission as $Transimission)
                                                    <option value="{{$Transimission->id}}">{{$Transimission->Transmission_Name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example" name="Color_ID">
                                                    @foreach ($VColor as $color)

                                                    <option disabled selected hidden>Select Your vehicle color</option>
                                                    <option value="{{$color->id}}">{{$color->Name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example" name="Condition_ID">
                                                    <option disabled selected hidden>Select vehicle condition</option>
                                                    @foreach ($VConditions as $Condition)
                                                    <option value="{{$Condition->id}}">{{$Condition->Vehicle_Condition}}</option>
                                                    @endforeach

                                                </select>
                                            </div>


                                            <div class="col-12">
                                                <button class="btn btn-light w-100 py-2">Search</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Add your car now for sell</h1>
                                    <p>Treat yourself in Egypt</p>
                                    <div id="Preview" style="width: 10px;height:30px"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

</div>
<!-- Carousel End -->
