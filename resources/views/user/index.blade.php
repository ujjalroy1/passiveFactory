<!doctype html>
<html lang="en">

<head>
       @include('user.css')
       <style type="text/css">
/* Container Styles */
.container-uj {
  max-width: 100%;
  margin: 20px auto;
  background-color: #f2e5e5;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  font-family: Arial, sans-serif;
}

/* Section Headers */
.header-uj {
  background: linear-gradient(to right, #fbc2eb, #a6c1ee); /* Same gradient color */
  padding: 10px;
  border-radius: 5px;
  font-weight: bold;
  font-size: 18px;
  margin-bottom: 20px;
  text-align: center;
  color: #333;
}

/* Row Styling */
.row-uj {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 10px 0;
  border-bottom: 1px solid #ddd;
  padding-bottom: 5px;
}

/* Text Styling */
.text-uj {
  flex: 1;
  font-size: 14px;
  color: #333;
}

/* Button Styles */
.btn-add-uj,
.btn-transfer-uj,
.btn-balance-uj,
.btn-view-uj {
  background: linear-gradient(to right, #fbc2eb, #a6c1ee); /* Same gradient color */
  border: none;
  color: rgb(36, 32, 32);
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
}

.btn-add-uj:hover,
.btn-transfer-uj:hover,
.btn-balance-uj:hover,
.btn-view-uj:hover {
  background: linear-gradient(to right, #e0b5d9, #91b5dc); /* Slightly darker hover effect */
}



        </style>
</head>

<body>

    <!-- loader -->
        @include('user.loader')
    <!-- * loader -->

    <!-- App Header -->
         @include('user.app_header')
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

    <div class="container-uj">
      <!-- Wallet Information Section -->
      <div class="wallet-info-uj">
        <div class="header-uj">Wallet Information</div>
        <div class="row-uj">
          <span class="text-uj">Main Balance: $200</span>
          <button class="btn-add-uj">+</button>
        </div>
        <div class="row-uj">
          <span class="text-uj">Total Income: $600</span>
        </div>
        <div class="row-uj">
          <span class="text-uj">Total Bought: $300</span>
        </div>
        <div class="row-uj">
          <span class="text-uj">Withdraw Balance: $600</span>
          <button class="btn-transfer-uj">⇄</button>
        </div>
        <div class="row-uj">
          <span class="text-uj">Refer Income: $20</span>
        </div>
        <div class="row-uj">
          <span class="text-uj">Generation Royalty: $50</span>
          <button class="btn-balance-uj">⇄</button>
        </div>
      </div>
  
      <!-- Generation Section -->
      <div class="generation-info-uj">
        <div class="header-uj">Generation</div>
        <div class="row-uj">
          <span class="text-uj">Level 1:</span>
          <span class="text-uj">Total Members: 25</span>
          <button class="btn-view-uj">View All</button>
        </div>
        <div class="row-uj">
          <span class="text-uj">Level 2:</span>
          <span class="text-uj">Total Members: 235</span>
          <button class="btn-view-uj">View All</button>
        </div>
        <div class="row-uj">
          <span class="text-uj">Level 3:</span>
          <span class="text-uj">Total Members: 2235</span>
          <button class="btn-view-uj">View All</button>
        </div>
      </div>
  
      <!-- Orders Section -->
      <div class="orders-info-uj">
        <div class="header-uj">Orders</div>
        <div class="row-uj">
          <span class="text-uj">Total Bought: 25</span>
          <span class="text-uj">Value: $50</span>
          <button class="btn-view-uj">View All</button>
        </div>
        <div class="row-uj">
          <span class="text-uj">Total Sold: 19</span>
          <span class="text-uj">Value: $38</span>
          <button class="btn-view-uj">View All</button>
        </div>
        <div class="row-uj">
          <span class="text-uj">Stake: 2</span>
          <span class="text-uj">Duration: 6 D</span>
          <button class="btn-view-uj">View All</button>
        </div>
        <div class="row-uj">
          <span class="text-uj">Hold: 2</span>
          <span class="text-uj">Duration: 6 D</span>
          <button class="btn-view-uj">View All</button>
        </div>
      </div>
    </div>



    </div>
    <!-- * App Capsule -->

   
    <!-- App Bottom Menu -->
        @include('user.app_bottom_menu')
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    @include('user.app_sidebar')
   
    <!-- * App Sidebar -->



    <!-- iOS Add to Home Action Sheet -->
      @include('user.ios')
    <!-- * iOS Add to Home Action Sheet -->


    <!-- Android Add to Home Action Sheet -->
   @include('user.android')
    <!-- * Android Add to Home Action Sheet -->

    @include('user.cookie')

   
    @include('user.jsfile')


</body>

</html>