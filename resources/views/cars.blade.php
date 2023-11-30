@extends('layouts.app')
@section('content')
    @include('components.navbar-home')
    <div class="container pt-5 pb-5">
        <div class="pt-5">
            <h3 class="text-center pt-5">List Cars</h3>
            <hr>
            <div class="row">
                @forelse ($cars as $car)
                    <div class="col-4">
                        <div class="card shadow">
                            <a href="javascript:void(0);">
                                <img src="{{ asset("/storage/{$car->image_url}") }}" class="card-img-top">
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
@endsection
