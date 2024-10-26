<!doctype html>
<html lang="en">

<head>
       @include('user.css')
       @include('user.nft_css')
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


        <div id="mainContainerujjal">
        <div class="containerujjal">
            <!-- Fixed Navigation Bar -->
              @include('user.nft_navebar')
    
            <!-- Scrollable Content Section -->
            <div class="contentujjal">
                <div class="suggestions-headerujjal">
                    <p class="textujjal">SUGGESTIONS</p>
                    <p class="idujjal">PD-{{ $nftinfo->nft_code }}</p>
                    <div class="priceujjal">
                        <p>Price : {{ $nftinfo->price }}</p>
                    </div>
                </div>
            
                <!-- NFT Image -->
                <div class="nft-imageujjal">
                    <img src="{{ asset('captcha_photo/dragon.jpg') }}" alt="NFT Image" height="350px" width="100px">
                </div>
            
                <!-- Information Section -->
                <form action="{{ url('buyNFT',$user->id) }}" method="POST"> 
                  @csrf

                  <div class="info-sectionujjal">
                    <p>E ROI - {{ $nftinfo->eroi }}</p>
                    <p>STAKE DURATION</p>
                    <p>{{ $nftinfo->duration }} DAYS</p>
                    {{-- <button class="buy-nowujjal">BUY NOW</button> --}}
                    <input type="submit" value="BUY NOW" class="buy-nowujjal">
                </div>


                </form>

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