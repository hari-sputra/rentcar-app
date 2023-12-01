@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h4 class="text-center">Edit Car Data</h4>
        <div class="d-flex justify-content-center">
            <div class="card shadow mt-3" style="width: 75%">
                <div class="card-body">
                    <form action="{{ route('dashboard.update', $car->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Brand</label>
                                    <input type="text" class="form-control" name="brand"
                                        value="{{ isset($car->brand) ? $car->brand : '' }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Model</label>
                                    <input type="text" class="form-control" name="model"
                                        value="{{ isset($car->model) ? $car->model : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Plat Number</label>
                                    <input type="text" class="form-control" name="plate_number"
                                        value="{{ isset($car->plate_number) ? $car->plate_number : '' }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" class="form-control" name="quantity"
                                        value="{{ isset($car->quantity) ? $car->quantity : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price"
                                        value="{{ isset($car->price) ? $car->price : '' }}">
                                </div>
                            </div>

                        </div>
                        <div class="mb-4">
                            <label class="form-label">Image Upload</label>
                            @if ($car->image_url)
                                <div class="mb-2">
                                    <img class="image" src="{{ asset("storage/{$car->image_url}") }}" alt="Current Image">
                                </div>
                                <input type="hidden" name="current_image" value="{{ $car->image_url }}">
                            @endif
                            <input class="form-control" type="file" name="image_url">
                        </div>
                        <div class="d-flex justify-content-end me-4 mb-3">
                            <a href="{{ route('dashboard.index') }}" class="btn btn-danger me-3">Back</a>
                            <button type="submit" class="btn text-light"
                                style="background-color: rgb(0, 128, 255)">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .image {
            max-height: 250px;
            width: auto;
            object-fit: cover;
            padding: 4px 4px 0 4px;
            border-radius: 12px 12px 0 0;
        }
    </style>
@endsection
