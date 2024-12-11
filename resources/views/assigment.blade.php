<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boosted demo</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-A0Qk1uKfS1i83/YuU13i2nx5pk79PkIfNFOVzTcjCMPGKIDj9Lqx9lJmV7cdBVQZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-fyenpx19UpfUhZ+SD9o9IdxeIJKE6upKx0B54OcXy1TqnO660Qw9xw6rOASP+eir" crossorigin="anonymous">
</head>

<body>
    <!-- sidebar offcanvas -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <!-- Off-canvas sidebar -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Sidebar content here -->
            <ul class="list-group list-group-flush">
                <!-- Home -->
                <li class="list-group-item">
                    <span class="material-icons">home</span> Home
                </li>
                <!-- Calendar -->
                <li class="list-group-item">
                    <span class="material-icons">event</span> Calendar
                </li>
                <!-- Teaching toggle -->
                <li class="list-group-item" data-bs-toggle="collapse" data-bs-target="#teachingSubMenu" aria-expanded="false" aria-controls="teachingSubMenu">
                    <span class="material-icons">school</span> Teaching
                    <span class="material-icons">expand_more</span>
                </li>
                <div class="collapse" id="teachingSubMenu">
                    <li class="list-group-item">
                        Submenu Item 1
                    </li>
                    <li class="list-group-item">
                        Submenu Item 2
                    </li>
                </div>
                <!-- To review -->
                <li class="list-group-item">
                    <span class="material-icons">check_circle</span> To review
                </li>
                <!-- Enrolled toggle -->
                <li class="list-group-item" data-bs-toggle="collapse" data-bs-target="#enrolledSubMenu" aria-expanded="false" aria-controls="enrolledSubMenu">
                    <span class="material-icons">class</span> Enrolled
                    <span class="material-icons">expand_more</span>
                </li>
                <div class="collapse" id="enrolledSubMenu">
                    <li class="list-group-item">
                        Submenu Item 1
                    </li>
                    <li class="list-group-item">
                        Submenu Item 2
                    </li>
                </div>
                <!-- To-do -->
                <li class="list-group-item">
                    <span class="material-icons">done_all</span> To-do
                </li>

                <!-- Archived classes -->
                <li class="list-group-item">
                    <span class="material-icons">archive</span> Archived classes
                </li>
                <!-- Settings -->
                <li class="list-group-item">
                    <span class="material-icons">settings</span> Settings
                </li>
            </ul>
        </div>
    </div>
    <!-- end sidebar offcanvas -->
    <!-- modal start -->
    <!-- The Modal -->
    <div class="modal fade" id="createClassModal" tabindex="-1" aria-labelledby="createClassModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createClassModalLabel">Create class</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Class name (required)" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Section">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Room">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-brand me-auto">
                    <a class="stretched-link" href="#">
                        <img src="orange-logo.svg" width="50" height="50" alt="Boosted - Back to Home" loading="lazy">
                    </a>
                    <h3 class="me-auto m-2 navbar-item">class name</h1>
                </div>
                <div class="d-flex navbar-item">
                    <button class="btn-primary navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="material-icons add-icon" data-bs-toggle="modal"
                data-bs-target="#createClassModal">add</span>
            </button>
                </div>
                <div class="d-flex navbar-item">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling"></span>
            </button>
                </div>

            </div>
        </nav>
    </header>
    <div class="container-xxl bd-gutter mt-3 my-md-4 bd-layout d-flex">

        <main class="bd-main order-1">
            <div class="d-flex flex-row flex-wrap gap-2  justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.gstatic.com/classroom/themes/img_bookclub.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.gstatic.com/classroom/themes/img_bookclub.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.gstatic.com/classroom/themes/img_bookclub.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.gstatic.com/classroom/themes/img_bookclub.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.gstatic.com/classroom/themes/img_bookclub.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.gstatic.com/classroom/themes/img_bookclub.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/js/boosted.bundle.min.js" integrity="sha384-+lAXqnipqQpjxMdd/9Hp2GOzB4aIouKEYRZ7AE66h68BDob7UlMLpZY7w7SqrC+M" crossorigin="anonymous"></script>
</body>

</html>