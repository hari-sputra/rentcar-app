@extends('layouts.app')
@section('content')
    @include('components.navbar-home')
    <div class="container pt-5 pb-5">
        <div class="pt-5">
            <h3 class="text-center pt-5">List Cars</h3>
            <hr>
            <div class="card shadow my-5">
                <div class="card-body">
                    <form class="row">
                        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                            <label for="vehicle" class="label-style text-capitalize form-label">Vehicle type</label>
                            <div class="input-group date ">
                                <!-- <input type="text" class="form-control p-3 " id="vehicle" placeholder="Select Car Group" /> -->
                                <select class="form-select form-control p-3" id="vehicle"
                                    aria-label="Default select example" style="background-image: none;">
                                    <option selected>Select Vehicle Type</option>
                                    <option value="1">BMW x3</option>
                                    <option value="2">BMW M2</option>
                                    <option value="3">Ford explorer</option>
                                    <option value="4">Ferrari</option>
                                    <option value="5">Mercedes-Benz</option>
                                    <option value="6">Sports car</option>
                                    <option value="7">Tesla</option>
                                </select>
                                <span class="search-icon-position position-absolute p-3 ">
                                    <iconify-icon class="search-icons" icon="solar:bus-outline"></iconify-icon>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                            <label for="location" class="label-style text-capitalize form-label">Picking up location</label>
                            <div class="input-group date">
                                <input type="text" class="form-control p-3 position-relative" id="location"
                                    placeholder="Airport or anywhere" />
                                <span class="search-icon-position position-absolute p-3 ">
                                    <iconify-icon class="search-icons" icon="solar:map-arrow-square-outline"></iconify-icon>
                                </span>


                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                            <label for="pick-up-date" class="label-style text-capitalize form-label">Picking up date</label>
                            <div class="input-group date" id="datepicker1">
                                <input type="text" class="form-control p-3" id="pick-up-date" />

                                <span class="input-group-append">
                                    <span class="search-icon-position position-absolute p-3">
                                        <iconify-icon class="search-icons" icon="solar:calendar-broken"></iconify-icon>
                                    </span>
                                </span>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                            <label for="return-date" class="label-style text-capitalize form-label">Returning date</label>
                            <div class="input-group date" id="datepicker2">
                                <input type="text" class="form-control p-3" id="return-date" />

                                <span class="input-group-append">
                                    <span class="search-icon-position position-absolute p-3">
                                        <iconify-icon class="search-icons" icon="solar:calendar-broken"></iconify-icon>
                                    </span>
                                </span>

                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button class="btn btn-primary " type="submit">Find your car</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @forelse ($cars as $car)
                    <div class="col-4">
                        <div class="card shadow">
                            <a href="javascript:void(0);">
                                <img src="{{ asset("/storage/{$car->image_url}") }}" class="image">
                            </a>
                            <div class="card-body p-4">
                                <a href="javascript:void(0);">
                                    <h4 class="card-title">{{ $car->brand . ' ' . $car->model }}</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled" style="font-size: 12px">
                                        <li class="rental-list">
                                            Sports
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('images/dot.png') }}" class="px-3"
                                                alt="image">
                                        </li>
                                        <li class="rental-list"> Auto</li>
                                        <li class="rental-list"> <img src="{{ asset('images/dot.png') }}" class="px-3"
                                                alt="image">
                                        </li>
                                        <li class="rental-list"> 4 Passengers </li>
                                        <li class="rental-list"> <img src="{{ asset('images/dot.png') }}" class="px-3"
                                                alt="image">
                                        </li>
                                        <li class="rental-list display-small"> Diesel </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h4 class="pt-2">Rp{{ $car->price }} <span class="rental-price"
                                            style="font-size: 13px">/day</span>
                                    </h4>
                                    <a href="javascript:void(0);" class="btn btn-primary" style="font-size: 12px">rent
                                        now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <style>
        .image {
            max-height: 250px;
            width: 100%;
            object-fit: cover;
            padding: 4px 4px 0 4px;
            border-radius: 12px 12px 0 0;
        }
    </style>
@endsection
