<div class="appBottomMenu">
    <a href="{{ url('wallet-info') }}" class="item {{ request()->is('wallet-info') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="wallet-outline"></ion-icon> <!-- Updated to better match "WALLET" -->
            <strong>WALLET</strong>
        </div>
    </a>
    
    <a href="{{ url('nft-collection') }}" class="item {{ request()->is('nft_collection') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="grid-outline"></ion-icon> <!-- Updated to better represent a "COLLECTION" -->
            <strong>COLLECTION</strong>
        </div>
    </a>
    
    <a href="{{ url('marketnft') }}" class="item {{ request()->is('package') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="cart-outline"></ion-icon> <!-- "BROWSE" for shopping or browsing products -->
            <strong>BROWSE</strong>
        </div>
    </a>
    
    <a href="{{ url('stake') }}" class="item {{ request()->is('boughtPackage') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="cube-outline"></ion-icon> <!-- Updated to represent "STAKE" or assets -->
            <strong>STAKE</strong>
        </div>
    </a>
    
    <a href="{{ url('myTeam') }}" class="item {{ request()->is('myTeam') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="people-outline"></ion-icon> <!-- "Team" matches with people outline -->
            <strong>TEAM</strong>
        </div>
    </a>
    
    <a href="{{ url('home') }}" class="item {{ request()->is('profile') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon> <!-- "Profile" matches with person outline -->
            <strong>PROFILE</strong>
        </div>
    </a>
    
</div>