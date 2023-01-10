<header>
    <nav class="pt-4 pb-4 navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container d-flex justify-content-between">
            <a class="h2 text-decoration-none text-light" href="/">Santa's Personal Database</a>
            <div class="links-wrapper">
                <a class="btn btn-light text-decoration-none{{ Route::currentRouteName() === 'letter.index' ? 'active' : '' }}"
                    href="{{ route('letter.index') }}">List</a>
                <a class="btn btn-light" href="{{ route('letter.create') }}">Create kid profile</a>
            </div>
        </div>
    </nav>
</header>
