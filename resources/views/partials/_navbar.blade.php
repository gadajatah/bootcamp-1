<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="{{ route('home.index') }}">BOOTCAMP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('books.index') }}">Books <span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
        </nav>
