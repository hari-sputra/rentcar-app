<nav class="navbar navbar-expand-lg  navbar-light container-fluid py-3 position-fixed shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">
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
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-outline-primary"> Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
