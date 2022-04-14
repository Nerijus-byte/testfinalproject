<aside class="col-2 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
    <div class="border rounded-3 p-1 h-100 sticky-top">
        <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
            <li class="nav-item">
                <a href="{{route('home.index')}}" class="nav-link px-2 text-truncate">
                    <i class="bi bi-house fs-5"></i>
                    <span class="d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li>
                <a href="{{route('tasks.index')}}" class="nav-link px-2 text-truncate">
                    <i class="bi bi-speedometer fs-5"></i>
                    <span class="d-none d-sm-inline">My Tasks</span>
                </a>
            </li>
            <li>
                <a href="{{route('notes.index')}}" class="nav-link px-2 text-truncate">
                    <i class="bi bi-speedometer fs-5"></i>
                    <span class="d-none d-sm-inline">Note</span>
                </a>
            </li>
            <li>
                <a href="{{route('projects.index')}}" class="nav-link px-2 text-truncate">
                    <i class="bi bi-card-text fs-5"></i>
                    <span class="d-none d-sm-inline">Projects</span> </a>
            </li>
            <li>
                <a href="{{route('about.index')}}" class="nav-link px-2 text-truncate">
                    <i class="bi bi-bricks fs-5"></i>
                    <span class="d-none d-sm-inline">About</span> </a>
            </li>
            <li>
                <a href="{{route('help.index')}}" class="nav-link px-2 text-truncate">
                    <i class="bi bi-people fs-5"></i>
                    <span class="d-none d-sm-inline">Help</span> </a>
            </li>
        </ul>
    </div>
</aside>
