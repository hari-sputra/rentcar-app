<nav class="navbar navbar-expand-lg  navbar-light container-fluid py-3 position-fixed shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <h3>Rent<span class="text-primary">Car</span></h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active px-3" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{ route('car.index') }}">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="javascript:void(0);">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="javascript:void(0);">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="javascript:void(0);">Contact</a>
                    </li>

                </ul>

                @auth
                    <div class="dropdown">
                        <div class="dropdown-toggle rounded-circle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="width: 42px; height:42px; background-color: black">
                            <p class="text-center pt-2 text-light">RC</p>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item"> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="d-flex mt-5 mt-lg-0 ps-xl-5 align-items-center justify-content-center ">
                        <ul class="navbar-nav justify-content-end align-items-center">
                            <li class="nav-item">
                                <a class="nav-link px-3" href="#" data-bs-toggle="modal" data-bs-target="#login">
                                    Login </a>
                            </li>
                        </ul>
                        <!-- Modal -->
                        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="text-center">Login your account</h5>
                                        <div>
                                            <form id="form4" class="form-group flex-wrap p-3" method="POST"
                                                action="/login">
                                                @csrf
                                                <div class="form-input col-lg-12 my-4">
                                                    <label for="exampleInputEmail4"
                                                        class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                        Address</label>
                                                    <input type="text" id="exampleInputEmail4" name="email"
                                                        placeholder="Email" class="form-control ps-3">
                                                </div>
                                                <div class="form-input col-lg-12 my-4">
                                                    <label for="inputPassword4"
                                                        class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                    <input type="password" id="inputPassword4" placeholder="Password"
                                                        class="form-control ps-3" aria-describedby="passwordHelpBlock"
                                                        name="password">
                                                </div>
                                                <div class="d-grid my-3">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-primary nav-button mx-3" data-bs-toggle="modal"
                            data-bs-target="#signUp"> Sign Up </button>
                        <!-- Modal -->
                        <div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="text-center">Registration your account</h5>
                                        <div>
                                            <form id="form4" class="form-group flex-wrap p-3" method="POST"
                                                action="/register">
                                                @csrf
                                                <div class="form-input col-lg-12 my-4">
                                                    <label for="exampleInputEmail3"
                                                        class="form-label fs-6 text-uppercase fw-bold text-black">Name</label>
                                                    <input type="text" id="exampleInputEmail3" name="name"
                                                        placeholder="Name" class="form-control ps-3">
                                                </div>
                                                <div class="form-input col-lg-12 my-4">
                                                    <label for="exampleInputEmail4"
                                                        class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                        Address</label>
                                                    <input type="text" id="exampleInputEmail4" name="email"
                                                        placeholder="Email" class="form-control ps-3">
                                                </div>
                                                <div class="form-input col-lg-12 my-4">
                                                    <label for="inputPassword4"
                                                        class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                    <input type="password" id="inputPassword4" placeholder="Password"
                                                        class="form-control ps-3" aria-describedby="passwordHelpBlock"
                                                        name="password">
                                                </div>
                                                <div class="form-input col-lg-12 my-4">
                                                    <label
                                                        class="form-label  fs-6 text-uppercase fw-bold text-black">Address</label>
                                                    <input type="text" placeholder="address" class="form-control ps-3"
                                                        aria-describedby="passwordHelpBlock" name="address">
                                                </div>
                                                <div class="form-input col-lg-12 my-4">
                                                    <label for="inputPassword4"
                                                        class="form-label  fs-6 text-uppercase fw-bold text-black">Phone
                                                        Number</label>
                                                    <input type="number" id="inputPassword4" placeholder="phone number"
                                                        class="form-control ps-3" aria-describedby="passwordHelpBlock"
                                                        name="phone">
                                                </div>
                                                <div class="form-input col-lg-12 my-4">
                                                    <label for="inputPassword4"
                                                        class="form-label  fs-6 text-uppercase fw-bold text-black">SIM
                                                        Number</label>
                                                    <input type="number" id="inputPassword4" placeholder="sim number"
                                                        class="form-control ps-3" aria-describedby="passwordHelpBlock"
                                                        name="sim_number">
                                                </div>
                                                <label class="py-3">
                                                    <input type="checkbox" required class="d-inline">
                                                    <span class="label-body text-black">I agree to the <a href="#"
                                                            class="text-black password border-bottom">Privacy
                                                            Policy</a>
                                                    </span>
                                                </label>
                                                <div class="d-grid my-3">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                                                        Up</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
