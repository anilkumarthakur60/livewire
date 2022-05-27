<body>

    <header class="navbar-light navbar-sticky header-static">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="navbar-brand-item light-mode-item" src="{{ asset('frontend/assets/images/logo.svg') }}"
                        alt="logo" />
                    <img class="navbar-brand-item dark-mode-item"
                        src="{{ asset('frontend/assets/images/logo-light.svg') }}" alt="logo" />
                </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll mx-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="homeMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu" aria-labelledby="homeMenu">
                                <li>
                                    <a class="dropdown-item active" href="index.html">Home default</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="homeMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu" aria-labelledby="homeMenu">
                                <li>
                                    <a class="dropdown-item active" href="index.html">Home default</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="nav flex-nowrap align-items-center">
                    <div class="nav-item d-none d-md-block">
                        <a href="#" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
                    </div>
                    <div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
                        <a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-search fs-4"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
                            <form class="input-group">
                                <input class="form-control border-success" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <button class="btn btn-success m-0" type="submit">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="py-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 bg-primary-soft p-2 rounded">
                        <div class="d-sm-flex align-items-center text-center text-sm-start">
                            <div class="me-3">
                                <span class="badge bg-primary p-2 px-3">Trending:</span>
                            </div>
                            <div class="tiny-slider arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
                                <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true"
                                    data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
                                    <div>
                                        <a href="" class="text-reset btn-link">alksj</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>