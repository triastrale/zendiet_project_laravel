<nav class="navbar navbar-expand-sm navbar-dark background-dark p-0">
    <div class="container">
        <a href="{{ url('admin/dashboard') }}" class="navbar-brand">Admin Panel</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link active">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{ url('admin/posts') }}" class="nav-link">Posts</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{ url('admin/categories') }}" class="nav-link">Categories</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{ url('admin/users') }}" class="nav-link">Users</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user"></i> Welcome Admin
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ url('admin/profile') }}" class="dropdown-item">
                            <i class="fas fa-user-circle"></i> Profile
                        </a>
                        <a href="http://127.0.0.1:8000/" class="dropdown-item">
                            <i class="fas fa-arrow-left"></i> Homepage
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="#" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-user-times"></i> Logout
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>