<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg justify-content-between">
            <a class="navbar-brand text-dark fw-bold" href="{{ route('home') }}">
                <img src="{{ asset('front_assets/Images/logo.jfif') }}" alt="logo">
                Reino Kids
            </a>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link text-dark active"
                        aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Boys</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Girls</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Babies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark"
                        href="#">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark"
                        href="Contact-us.html">Contact
                        us</a>
                </li>
            </ul>
            <div class="d-flex justify-content-between">
                <a href="#" class="text-decoration-none text-dark"
                    aria-label="Search">
                    <span class="material-symbols-outlined d-block">
                        search
                    </span>
                </a>
                <a href="{{ route('login') }}"
                    class="text-decoration-none text-dark"
                    data-text="login">
                    <span class="material-symbols-outlined d-block">
                        person
                    </span>
                </a>
                <a href="#" class="text-decoration-none text-dark"
                    data-text="cart">
                    <span class="material-symbols-outlined d-block">
                        shopping_cart
                    </span>
                </a>
            </div>
        </nav>

    </div>
</header>
