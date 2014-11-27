<ul class="nav navbar-nav navbar-right navbar-user">

    @include('layouts/default/parts/topnav-elements/user-specific')
    @include('layouts/default/parts/topnav-elements/leagues-and-cups')
    @include('layouts/default/parts/topnav-elements/nations-and-clubs')
    @include('layouts/default/parts/topnav-elements/screen-history')
    @include('layouts/default/parts/topnav-elements/game-options')

    <li class="dropdown continue-game-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Continue Game</a>
    </li>
</ul>