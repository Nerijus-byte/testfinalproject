<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
        <div class="dropdown justify-content-end">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                            {{ __('Log Out') }}
                        </x-button>
                    </form>
                </a>
            </div>
        </div>
    </div>
</header>
