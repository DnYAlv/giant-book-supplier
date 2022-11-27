<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page" href="/index">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @forelse ($categories as $category)
                            <li><a class="dropdown-item" href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
                        @empty
                            <h5>Empty Data...</h5>
                        @endforelse
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page" href="/publishers">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
