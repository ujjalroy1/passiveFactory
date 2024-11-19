<!doctype html>
<html lang="en">

<head>
       @include('user.css')
       <style type="text/css">
        /* Container styling */
        .orders-container {
           /* background: linear-gradient(45deg, #f0f, #ff0, #0ff); */ */
          padding: 10px;
          border-radius: 10px;
          display: inline-block;
          width: 100%;
        }
        
        /* Order box styling */
        .orders-box {
          background-color: #d3d3d3;
          padding: 20px;
          border-radius: 8px;
          width: 100%;
        }
      
        /* Order title styling */
        .orders-title {
          font-weight: bold;
          margin-bottom: 15px;
          font-size: 18px;
        }
      
        /* Row styling */
        .order-row {
          display: flex;
          justify-content: space-between;
          margin-bottom: 20px;
          
        }
      
        /* Link styling */
        .order-row a {
          text-decoration: none;
          color: black;
          font-weight: bold;
        }
        
        /* Custom hover effect for links */
        .order-row a:hover {
          color: #007BFF;
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

    <div>

        <div class="orders-container">
            <div class="orders-box">
              <div class="orders-title">ORDERS</div>
          
              <div class="order-row">
                <span>TOTAL BOUGHT: 25</span>
                <span>VALUE: $50</span>
                <a href="#">VIEW ALL</a>
              </div>
          
              <div class="order-row">
                <span>TOTAL SOLD: 19</span>
                <span>VALUE: $38</span>
                <a href="#">VIEW ALL</a>
              </div>
          
              <div class="order-row">
                <span>STAKE: 2</span>
                <span>DURATION: 6 D</span>
                <a href="#">VIEW ALL</a>
              </div>
          
              <div class="order-row">
                <span>HOLD: 2</span>
                <span>DURATION: 6 D</span>
                <a href="#">VIEW ALL</a>
              </div>
          
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