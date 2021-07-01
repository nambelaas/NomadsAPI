<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="{{ route('Home') }}" class="navbar-brand">
                <img src="{{ url('frontend/images/logo.png') }}" alt="" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item mx-md-2 dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-bs-toggle="dropdown">Service</a>
                        <div class="dropdown-menu" aria-labelledby="navbardrop">
                            <a href="" class="dropdown-item">link</a>
                            <a href="" class="dropdown-item">link</a>
                            <a href="" class="dropdown-item">link</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>
                </ul>

                @guest
                    <!-- Mobile Button-->
                    <form class="form-inline d-sm-block d-md-none">
                        @csrf
                        <button class="btn btn-login my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login')}}';">Masuk</button>
                    </form>

                    <!-- Dekstop Button-->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login')}}';">Masuk</button>
                    </form>
                @endguest

                @auth
                    <!-- Mobile Button-->
                    <form class="form-inline d-sm-block d-md-none" action="{{ url('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">Keluar</button>
                    </form>

                    <!-- Dekstop Button-->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">Keluar</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</div>