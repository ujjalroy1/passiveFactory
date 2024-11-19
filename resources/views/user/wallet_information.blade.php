<!doctype html>
<html lang="en">

<head>
       @include('user.css')
       <style type="text/css">
        /* body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        } */
        .wallet-container {
            width: 100%;
            padding: 20px;
            background: linear-gradient(45deg, #e3f2fd, #fce4ec);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .wallet-header {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .wallet-content {
            background-color: #d3d3d3;
            padding: 15px;
            border-radius: 8px;
            position: relative;
        }
        .wallet-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
            border-bottom: 1px solid #ccc;
        }
        .wallet-item:last-child {
            border-bottom: none;
        }
        .wallet-item strong {
            font-size: 14px;
            color: #333;
        }
        .button-container {
            position: absolute;
            right: 10px;
            top: 10px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .button-container input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }
        .button-container input[type="submit"]:hover {
            background-color: #555;
        }
        .wallet-item span {
            font-size: 14px;
            color: #333;
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


        <div class="wallet-container">
            <div class="wallet-header">WALLET INFORMATION</div>
            <div class="wallet-content">
                <div class="wallet-item">
                    <span>Main Balance: $200</span>
                </div>
                <div class="wallet-item">
                    <span>Total Income: $600</span>
                </div>
                <div class="wallet-item">
                    <span>Total Bought: $300</span>
                </div>
                <div class="wallet-item">
                    <span>Withdraw Balance: $600</span>
                </div>
                <div class="wallet-item">
                    <span>Refer Income: $20</span>
                </div>
                <div class="wallet-item">
                    <span>Generation Royalty: $50</span>
                </div>
                <div class="button-container">
                    <input type="submit" value="+" title="Add Fund Button">
                    <input type="submit" value="⇆" title="Transfer Funds Button">
                    <input type="submit" value="→" title="Send Balance">
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