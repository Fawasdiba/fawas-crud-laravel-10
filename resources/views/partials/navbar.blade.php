<style>
    .navbar {
        background-color: #f8f9fa;
    }

    .navbar-brand {
        color: #343a40;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: #343a40;
    }

    .navbar-nav .nav-link.active {
        color: #007bff;
    }

    .navbar-toggler {
        border-color: #343a40;
    }

    .navbar-toggler-icon {
        background-color: #343a40;
    }

    .navbar-nav .nav-link:hover {
        color: #007bff;
    }

    @media (max-width: 991.98px) {
        .navbar-nav {
            margin-top: 10px;
        }

        .navbar-toggler {
            background-color: #343a40;
        }

        .navbar-toggler-icon {
            background-color: #f8f9fa;
        }
    }

    body {
        background-color: #f2f2f2;
    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('posts.index') }}">Data Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
