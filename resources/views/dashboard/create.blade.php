@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h4 class="text-center">Create Car Data</h4>
        <div class="d-flex justify-content-center">
            <div class="card shadow mt-3" style="width: 75%">
                <div class="card-body">
                    <form action="{{ route('dashboard.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Brand</label>
                                    <input type="text" class="form-control" placeholder="Honda" name="brand">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Model</label>
                                    <input type="text" class="form-control" placeholder="Civic Type R" name="model">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Plat Number</label>
                                    <input type="text" class="form-control" placeholder="BH 5521 ST" name="plate_number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" class="form-control" placeholder="2" name="quantity">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="number" class="form-control" placeholder="150000" name="price">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Image Upload</label>
                                    <input class="form-control" type="file" name="image_url">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end me-4 mb-3">
                            <a href="{{ route('dashboard.index') }}" class="btn btn-danger me-3">Back</a>
                            <button type="submit" class="btn text-light"
                                style="background-color: rgb(0, 128, 255)">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
