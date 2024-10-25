<div class="appBottomMenu">
    <a href="{{url('home') }}" class="item {{ request()->is('home') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>Home</strong>
        </div>
    </a>
    <a href="{{ url('captcha1') }}" class="item {{ request()->is('captcha1') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="people-outline"></ion-icon>
            <strong>Task</strong>
        </div>
    </a>
    <a href="{{ url('package') }}" class="item {{ request()->is('package') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="cart-outline"></ion-icon>
            <strong>Buy Package</strong>
        </div>
    </a>
    <a href="{{ url('myTeam') }}" class="item {{ request()->is('myTeam') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="apps-outline"></ion-icon>
            <strong>Team</strong>
        </div>
    </a>
    <a href="{{ url('collectable') }}" class="item">
        <div class="col">
            <ion-icon name="card-outline"></ion-icon>
            <strong>Collectable</strong>
        </div>
    </a>
    <a href="{{ asset('show/boughtPackage') }}" class="item {{ request()->is('boughtPackage') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon>
            <strong>profile</strong>
        </div>
    </a>
</div>