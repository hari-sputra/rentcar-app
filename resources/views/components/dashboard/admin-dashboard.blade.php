<div class="container pt-5">
    <h3 class="text-center pt-5">Cars Management</h3>
    <a href="{{ route('dashboard.create') }}" class="btn btn-primary mt-4">Add Car</a>
    <div class="card shadow mt-4">
        <div class="card-body">
            <form action="{{ route('dashboard.index') }}" method="get">
                <div class="row mb-3">
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label">Brand</label>
                            <input type="text" class="form-control" placeholder="Honda" name="brand"
                                value="{{ request()->brand }}">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label">Model</label>
                            <input type="text" class="form-control" placeholder="Civic Type R" name="model"
                                value="{{ request()->model }}">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label class="form-label">Plat Number</label>
                            <input type="text" class="form-control" placeholder="BH 5521 ST" name="plate_number"
                                value="{{ request()->plate_number }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end me-4 mb-3">
                    <button type="submit" class="btn btn-outline-primary me-3">Search</button>
                    <a href="/dashboard" class="btn btn-outline-secondary">Reset</a>
                </div>
            </form>
        </div>
    </div>
    <div class="pt-5">
        <div class="card shadow p-3">
            <div class="car-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Plate Number</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cars as $car)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->plate_number }}</td>
                                <td>{{ $car->quantity }}</td>
                                <td>Rp{{ $car->price }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Empty Data</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
