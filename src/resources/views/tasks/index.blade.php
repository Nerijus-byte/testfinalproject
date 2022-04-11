<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaTasker</title>

     <!-- Bootstrap core CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->

    <link  rel="stylesheet" type="text/css" href="{{ asset('css/tasker.css') }}" >

    <!-- Custom scripts for this template -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    @include('partials.header')
    <div class="container-fluid pb-3 flex-grow-1 d-flex flex-column flex-sm-row overflow-auto">
        <div class="row flex-grow-sm-1 flex-grow-0">
            <aside class="col-sm-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
                <div class="bg-light border rounded-3 p-1 h-100 sticky-top">
                    <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
                        <li class="nav-item">
                            <a href="#" class="nav-link px-2 text-truncate">
                                <i class="bi bi-house fs-5"></i>
                                <span class="d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-2 text-truncate">
                                <i class="bi bi-speedometer fs-5"></i>
                                <span class="d-none d-sm-inline">My Tasks</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-2 text-truncate">
                                <i class="bi bi-speedometer fs-5"></i>
                                <span class="d-none d-sm-inline">Note</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-2 text-truncate">
                                <i class="bi bi-card-text fs-5"></i>
                                <span class="d-none d-sm-inline">Projects</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-2 text-truncate">
                                <i class="bi bi-bricks fs-5"></i>
                                <span class="d-none d-sm-inline">About</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-2 text-truncate">
                                <i class="bi bi-people fs-5"></i>
                                <span class="d-none d-sm-inline">Help</span> </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main class="col overflow-auto">
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
                    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
                </div>
                <div class="container">
                    <div class="card-deck mb-3 text-center">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Free</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>10 users included</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                            </div>
                        </div>
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Pro</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>20 users included</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('partials.footer')
        </div>
    </div>
</body>
</html>
