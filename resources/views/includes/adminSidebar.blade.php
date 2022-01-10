<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="col-xl-2 col-lg-3 col-sm-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark pt-3 position-fixed vh-100">
    <a href="/adminHome" class="d-flex mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <span class="fs-4">Admin Control</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/adminHome" class="nav-link {{ request()->is('adminHome') ? 'active aria-current="page"' : 'text-white' }}">
            Home
            </a> 
        </li>
        <li>
            <a href="/manageCaretakers" class="nav-link {{ request()->is('manageCaretakers') ? 'active aria-current="page"' : 'text-white' }}">
            Manage Caretakers
            </a>
        </li>
        <li>
            <a href="/manageSeniors" class="nav-link {{ request()->is('manageSeniors') ? 'active aria-current="page"' : 'text-white' }}">
            Manage Seniors
            </a>
        </li>
        <li>
            <a href="/manageDevices" class="nav-link {{ request()->is('manageDevices') ? 'active aria-current="page"' : 'text-white' }}">
            Manage Devices
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ auth()->guard('admin')->user()->username }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            {{-- <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li> --}}
            <li>
                <form method="get" action="/adminLogout">
                @csrf
                <button class="btn me-2 text-white mx-1" type="submit">Log out</a>
                </form>
            </li>
        </ul>
    </div>
</div>