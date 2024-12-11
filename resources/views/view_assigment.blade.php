<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/css/orange-helvetica.min.css" rel="stylesheet"
        integrity="sha384-A0Qk1uKfS1i83/YuU13i2nx5pk79PkIfNFOVzTcjCMPGKIDj9Lqx9lJmV7cdBVQZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/css/boosted.min.css" rel="stylesheet"
        integrity="sha384-fyenpx19UpfUhZ+SD9o9IdxeIJKE6upKx0B54OcXy1TqnO660Qw9xw6rOASP+eir" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/css/boosted.min.css" rel="stylesheet"
        integrity="sha384-fyenpx19UpfUhZ+SD9o9IdxeIJKE6upKx0B54OcXy1TqnO660Qw9xw6rOASP+eir" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .task:hover {
            box-shadow: 8px 1px 8px 1px rgb(197, 197, 197);
            border: 2px rgb(255, 244, 244);
            border-radius: 3px;

        }
    </style>
</head>

<body>
    <h1>test test</h1>
    <h1>test </h1> 
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg" aria-label="Global navigation - Standard example">
            <div class="container-xxl">

                <!-- Orange brand logo -->
                <div class="navbar-brand me-auto me-lg-4">
                    <a class="stretched-link" href="#">
                        <img src="/docs/5.3/assets/brand/orange-logo.svg" width="50" height="50"
                            alt="Boosted - Back to Home" loading="lazy">
                    </a>
                </div>

                <!-- Burger menu (visible on small screens) -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target=".global-header-1" aria-controls="global-header-1.1 global-header-1.2"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar with links -->
                <div id="global-header-1.1" class="navbar-collapse collapse me-lg-auto global-header-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="#" aria-current="page">Discover</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    </ul>
                </div>

                <!-- Navbar with action icons -->
                <div id="global-header-1.2" class="navbar-collapse collapse d-sm-flex global-header-1">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-icon">
                                <svg width="1.5rem" height="1.5rem" fill="currentColor" aria-hidden="true"
                                    focusable="false" class="overflow-visible">
                                    <use xlink:href="/docs/5.3/assets/img/boosted-sprite.svg#search" />
                                </svg>
                                <span class="visually-hidden">Search</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-icon">
                                <svg width="1.5rem" height="1.5rem" fill="currentColor" aria-hidden="true"
                                    focusable="false" class="overflow-visible">
                                    <use xlink:href="/docs/5.3/assets/img/boosted-sprite.svg#buy" />
                                </svg>
                                <span class="visually-hidden">Basket</span>
                                <span class="position-relative align-self-start">
                                    <span
                                        class="badge bg-info rounded-pill position-absolute top-0 fs-6 text-white translate-middle">
                                        1
                                        <span class="visually-hidden">shopping basket items</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link nav-icon">
                                <img src="/docs/5.3/assets/img/navbar-contact.png" width="25" height="25"
                                    role="img" alt="User" loading="lazy">
                                <span class="visually-hidden">My account</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <nav class="navbar  navbar-expand-lg  supra"
        aria-label="Supra navigation - With an additional languages navbar example">
        <div class="container-xxl">
            <ul class="navbar-nav me-auto mx-5 px-3">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Stream</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Classwork</a></li>
                <li class="nav-item"><a href="#" class="nav-link">People</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Marks</a></li>

            </ul>
        </div>
    </nav>
    <div class="main d-flex">
        <div class=" border-end" style="width: 20%"></div>
        <div class="m-auto" style="width: 80%">
            <div class="m-auto" style="width: 50%">
                <div class="my-5">
                    <button class="rounded-pill m-auto" style="width: 90px; height:50px">+ Create</button>
                </div>
                <div class="d-flex justify-content-between border-bottom border-light border-1  task" style="height: 50px;">
                    <div class=" d-flex">
                        <div class="icon  m-2">
                            <span class="material-symbols-outlined ">task</span>
                        </div>
                        <div class="text m-2 pt-1">test</div>
                    </div>
                    <div>
                        <span class="material-symbols-outlined mt-2 me-2">
                            more_vert
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/js/boosted.min.js"
        integrity="sha384-6J08e5gwwiEMMruI+Z89EkKdRl6eLwjPfkZpMBRPOfni+wOIfzpORWg1SzksH+j0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/focus-visible@5.2.0/dist/focus-visible.min.js"
        integrity="sha384-xRa5B8rCDfdg0npZcxAh+RXswrbFk3g6dlHVeABeluN8EIwdyljz/LqJgc2R3KNA" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/js/boosted.bundle.min.js"
        integrity="sha384-+lAXqnipqQpjxMdd/9Hp2GOzB4aIouKEYRZ7AE66h68BDob7UlMLpZY7w7SqrC+M" crossorigin="anonymous">
    </script>
</body>

</html>
