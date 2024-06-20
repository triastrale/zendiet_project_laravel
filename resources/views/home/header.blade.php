<header>
    <input type="checkbox" name="" id="toggler" />
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo"><img src="images/mainlogo.png" alt="logo" /></a>

    <nav class="navbar">
        <a href="{{ route('home.homepage') }}">Home</a>
        <a href="#about">About</a>
        <a href="{{ route('articles.posts') }}">Article</a>
        <a href="{{ route('calculator.bmi') }}">Calculator</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-search"></a>

        @if (Route::has('login'))
        @auth
        @if(auth()->user()->isAdmin())
        <a href="{{ route('admin.dashboard') }}" class="fas fa-user"></a>
        @else
        <a href="{{ route('logout') }}" class="fas fa-sign-out-alt" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    </div>
    @endif
    @else
    <a href="{{ route('register') }}" class="fas fa-sign-in"></a>
    @endauth
    @endif
    </div>

</header>

<!-- Tambahkan di bagian bawah template atau di dalam tag <head> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGaV9zzTtmI3e2MBvYj5N4Y93p" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>