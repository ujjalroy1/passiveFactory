<!doctype html>
<html lang="en">

<head>
       @include('user.css')
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
    <style type="text/css">

* {
    box-sizing: border-box;
}

/* body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
} */

.container {
    max-width: 1200px;
    margin: auto;
}

.cards {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    margin: 10px;
    flex: 1 1 23%; /* Responsive: 4 cards in a row */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}

.card h3 {
    margin: 0 0 10px;
}

.card p {
    color: #555;
}

.buy-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 7px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.buy-button:hover {
    background-color: #0056b3;
}

.info-area {
    margin-top: 20px;
}

textarea {
    width: 100%;
    height: 100px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    resize: none;
    background-color: #f9f9f9;
    color: #333;
}


    </style>
   <div class="container">
    <div class="info-area">
        <textarea id="infoTextArea" readonly placeholder="Click on a card to see its info here..."></textarea>
    </div>
    @foreach ($package as $pk)
                <div class="cards">
                    <div class="card" data-info="{{ $pk->benifit }}">
                         <h3>{{ $pk->name }}</h3>
                         <p>Price: {{$pk->price  }}$</p>
                    <button id="buyButton" class="buy-button">Buy Now</button>
               </div>

            </div>
      
    @endforeach
 

    </div>
 
  
</div>

<script>
    // Initially disable the button
    const buyButton = document.getElementById('buyButton');
    buyButton.disabled = true;

    // Add click event listeners to each card
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', function() {
            // Get the information from the data attribute
            const info = card.getAttribute('data-info');
            
            // Set the textarea's value to the card's info
            document.getElementById('infoTextArea').value = info;
            
            // Enable the Buy button
            buyButton.disabled = false;
            buyButton.classList.add('enabled');
        });
    });

    // Add click event listener to the Buy button
    buyButton.addEventListener('click', function() {
        alert("Product has been purchased: " + document.getElementById('infoTextArea').value);
    });
</script>
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