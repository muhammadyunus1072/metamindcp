<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" class="logo img-fluid" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li>
                            <a class="dropdown-item {{ Request::is('service') ? 'active' : '' }}"
                                href="{{ route('service') }}">
                                Main Service
                            </a>
                        </li>
                        @foreach (App\Models\Service::all() as $service)
                            <li>
                                <a class="dropdown-item"
                                    href="{{ $service->url_service_content ? $service->url_service_content : route('service.detail', $service->id) }}">
                                    {{ $service->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('event') ? 'active' : '' }}"
                        href="{{ route('event') }}">Schedule</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Library</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li> --}}

                <li class="nav-item">
                    <a class="btn btn-success bg-green mt-3 ms-3" href="{{ env('APP_LMS_URL') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
