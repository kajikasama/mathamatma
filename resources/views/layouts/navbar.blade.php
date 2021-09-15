<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Mathamatma</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'home') ? 'active fw-bold' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'post') ? 'active fw-bold' : '' }}" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'category') ? 'active fw-bold' : '' }}" href="/categories">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'author') ? 'active fw-bold' : '' }}" href="/authors">Authors List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'restoration') ? 'active fw-bold' : '' }}" href="/restorations">Restorations</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
