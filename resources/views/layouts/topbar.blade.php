<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

    <ul class="navbar-nav ml-auto">

        <!-- Logout -->
        <li class="nav-item">
            <a class="nav-link text-danger"
               href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               <i class="fas fa-sign-out-alt"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>

    </ul>

</nav>
