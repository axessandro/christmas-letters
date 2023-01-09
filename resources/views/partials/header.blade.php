<header>
    <nav class="pt-4 pb-4 navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">

            <a class="navbar-brand" href="/">Santa's Personal Database</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link {{ Route::currentRouteName() === 'letter.index' ? 'active' : '' }}"
                            href="{{ route('letter.index') }}">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('letter.create') }}">Create kid profile</a>
                    </li>
            </div>
        </div>
    </nav>
</header>
