<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/dashboard">{{ \Carbon\Carbon::now()->format('l dS F Y g:i a') }}</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        @include('layouts/default/parts/sidenav')
        @include('layouts/default/parts/topnav')
    </div>
</nav>