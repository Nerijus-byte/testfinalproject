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

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
<header class="py-3 mb-4 border-bottom shadow">
    <div class="container-fluid align-items-center d-flex">
        <div class="flex-grow-1 d-flex align-items-center">
            <nav class="nav">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </nav>
        </div>
    </div>
</header>
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
            <div class="bg-light border rounded-3 p-3">
                <h2>Hello,  {{ Auth::user()->name }}</h2>
                <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
            </div>
        </main>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <small class="d-block mb-1 text-muted">{{ 'LaTasker' }}</small>
                    <small class="d-block mb-1 text-muted">&copy; {{ date('Y') }}</small>
                </div>
            </div>
        </footer>
    </div>

</div>
</body>
</html>
