<header>
    <div class="d-flex justify-content-between flex-column flex-md-row p-3 px-md-4 mb-3 border-bottom">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
        <div class="dropdown justify-content-end">
            <button class="btn btn-secondary dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="" class="btn btn-secondary">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </a>
            </div>
        </div>
    </div>
</header>
