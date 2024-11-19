{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
@csrf

<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full"
        type="password"
        name="password"
        required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full"
        type="password"
        name="password_confirmation" required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ms-4">
        {{ __('Register') }}
    </x-primary-button>
</div>
</form>
</x-guest-layout> --}}



<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Passive Factory | Registration</title>
    <meta name="description" content="Passive Factory | Registration">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="{{ asset('fine-app/assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fine-app/assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('fine-app/assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset('fine-app/__manifest.json') }}">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="{{ asset('fine-app/assets/img/loading-icon.png') }}" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="{{ url('/login') }}" class="headerButton">
                Login
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

         <style type="text/css">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 320px;
    border-radius: 8px;
}

.input-field {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.input-field:focus {
    outline: none;
    border-color: #4CAF50;
}

.row {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

.small-field {
    width: 48%;
}

.submit-btn {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background-color: #4CAF50;
    border: none;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
}

.submit-btn:hover {
    background-color: #45a049;
}

.small-btn {
    width: 48%;
}

.login-link {
    text-align: center;
    margin-top: 15px;
}

.login-link a {
    color: #4CAF50;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}


        </style>


        <div class="section mt-2 text-center">
            <h1>Register now</h1>
            <h4>Create an account</h4>
        </div>
        <div class="form-container">

            
            <form method="POST" action="{{ route('register') }}">
                {{-- <input type="text" name="username" placeholder="Set user name" class="input-field">
                <span id="username-message"></span> --}}
                   @csrf
                
                    <input type="text" id="username" name="username" placeholder="Enter username" class="input-field" required>
                    <span id="username-message"></span>
               


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                      $(document).ready(function() {
                        $('#username').on('input', function() {
                          var username = $(this).val();
                    
                          // Only check if there's input
                          if (username.length > 0) {
                            $.ajax({
                              url: '{{ route("checkUsername") }}',
                              type: 'GET',
                              data: { username: username },
                              success: function(response) {
                                if (response.available) {
                                  $('#username-message').text('Username is available').css('color', 'green');
                                } else {
                                  $('#username-message').text('Username is not available').css('color', 'red');
                                  
                                  // Generate suggested username
                                  generateSuggestedUsername(username);
                                }
                              }
                            });
                          } else {
                            $('#username-message').text('');
                          }
                        });
                    
                        // Function to generate a suggested username
                        function generateSuggestedUsername(username) {
                          // Start with an even number, e.g., 1
                          let suffix = 1;
                          
                          function checkSuggestion(suggestedUsername) {
                            $.ajax({
                              url: '{{ route("checkUsername") }}',
                              type: 'GET',
                              data: { username: suggestedUsername },
                              success: function(response) {
                                if (response.available) {
                                  $('#username-message').append('<br>Suggested username: ' + suggestedUsername)
                                    .css('color', 'blue');
                                } else {
                                  // Increment suffix by 2 to get the next even number and try again
                                  suffix += 1;
                                  checkSuggestion(username + suffix);
                                }
                              }
                            });
                          }
                          
                          // Start checking with the initial suffix
                          checkSuggestion(username + suffix);
                        }
                      });
                    </script>
                    




                <input type="password" name="password" placeholder="Password" class="input-field" required>
                <input type="password" name="confirm_password" placeholder="Confirm password" class="input-field" required>
        
                <div class="row">
                    <select name="country_code" class="input-field small-field" required>
                        <option disabled>Select one code</option>
                        <option value="+1">+1 (United States)</option>
                        <option value="+7">+7 (Russia)</option>
                        <option value="+20">+20 (Egypt)</option>
                        <option value="+27">+27 (South Africa)</option>
                        <option value="+30">+30 (Greece)</option>
                        <option value="+31">+31 (Netherlands)</option>
                        <option value="+32">+32 (Belgium)</option>
                        <option value="+33">+33 (France)</option>
                        <option value="+34">+34 (Spain)</option>
                        <option value="+36">+36 (Hungary)</option>
                        <option value="+39">+39 (Italy)</option>
                        <option value="+40">+40 (Romania)</option>
                        <option value="+41">+41 (Switzerland)</option>
                        <option value="+43">+43 (Austria)</option>
                        <option value="+44">+44 (United Kingdom)</option>
                        <option value="+45">+45 (Denmark)</option>
                        <option value="+46">+46 (Sweden)</option>
                        <option value="+47">+47 (Norway)</option>
                        <option value="+48">+48 (Poland)</option>
                        <option value="+49">+49 (Germany)</option>
                        <option value="+51">+51 (Peru)</option>
                        <option value="+52">+52 (Mexico)</option>
                        <option value="+53">+53 (Cuba)</option>
                        <option value="+54">+54 (Argentina)</option>
                        <option value="+55">+55 (Brazil)</option>
                        <option value="+56">+56 (Chile)</option>
                        <option value="+57">+57 (Colombia)</option>
                        <option value="+58">+58 (Venezuela)</option>
                        <option value="+60">+60 (Malaysia)</option>
                        <option value="+61">+61 (Australia)</option>
                        <option value="+62">+62 (Indonesia)</option>
                        <option value="+63">+63 (Philippines)</option>
                        <option value="+64">+64 (New Zealand)</option>
                        <option value="+65">+65 (Singapore)</option>
                        <option value="+66">+66 (Thailand)</option>
                        <option value="+81">+81 (Japan)</option>
                        <option value="+82">+82 (South Korea)</option>
                        <option value="+84">+84 (Vietnam)</option>
                        <option value="+86">+86 (China)</option>
                        <option value="+90">+90 (Turkey)</option>
                        <option value="+91">+91 (India)</option>
                        <option value="+92">+92 (Pakistan)</option>
                        <option value="+93">+93 (Afghanistan)</option>
                        <option value="+94">+94 (Sri Lanka)</option>
                        <option value="+95">+95 (Myanmar)</option>
                        <option value="+98">+98 (Iran)</option>
                        <option value="+211">+211 (South Sudan)</option>
                        <option value="+212">+212 (Morocco)</option>
                        <option value="+213">+213 (Algeria)</option>
                        <option value="+216">+216 (Tunisia)</option>
                        <option value="+218">+218 (Libya)</option>
                        <option value="+220">+220 (Gambia)</option>
                        <option value="+221">+221 (Senegal)</option>
                        <option value="+222">+222 (Mauritania)</option>
                        <option value="+223">+223 (Mali)</option>
                        <option value="+224">+224 (Guinea)</option>
                        <option value="+225">+225 (Ivory Coast)</option>
                        <option value="+226">+226 (Burkina Faso)</option>
                        <option value="+227">+227 (Niger)</option>
                        <option value="+228">+228 (Togo)</option>
                        <option value="+229">+229 (Benin)</option>
                        <option value="+230">+230 (Mauritius)</option>
                        <option value="+231">+231 (Liberia)</option>
                        <option value="+232">+232 (Sierra Leone)</option>
                        <option value="+233">+233 (Ghana)</option>
                        <option value="+234">+234 (Nigeria)</option>
                        <option value="+235">+235 (Chad)</option>
                        <option value="+236">+236 (Central African Republic)</option>
                        <option value="+237">+237 (Cameroon)</option>
                        <option value="+238">+238 (Cape Verde)</option>
                        <option value="+239">+239 (São Tomé and Príncipe)</option>
                        <option value="+240">+240 (Equatorial Guinea)</option>
                        <option value="+241">+241 (Gabon)</option>
                        <option value="+242">+242 (Congo - Brazzaville)</option>
                        <option value="+243">+243 (Congo - Kinshasa)</option>
                        <option value="+244">+244 (Angola)</option>
                        <option value="+245">+245 (Guinea-Bissau)</option>
                        <option value="+246">+246 (British Indian Ocean Territory)</option>
                        <option value="+248">+248 (Seychelles)</option>
                        <option value="+249">+249 (Sudan)</option>
                        <option value="+250">+250 (Rwanda)</option>
                        <option value="+251">+251 (Ethiopia)</option>
                        <option value="+252">+252 (Somalia)</option>
                        <option value="+253">+253 (Djibouti)</option>
                        <option value="+254">+254 (Kenya)</option>
                        <option value="+255">+255 (Tanzania)</option>
                        <option value="+256">+256 (Uganda)</option>
                        <option value="+257">+257 (Burundi)</option>
                        <option value="+258">+258 (Mozambique)</option>
                        <option value="+260">+260 (Zambia)</option>
                        <option value="+261">+261 (Madagascar)</option>
                        <option value="+262">+262 (Réunion)</option>
                        <option value="+263">+263 (Zimbabwe)</option>
                        <option value="+264">+264 (Namibia)</option>
                        <option value="+265">+265 (Malawi)</option>
                        <option value="+266">+266 (Lesotho)</option>
                        <option value="+267">+267 (Botswana)</option>
                        <option value="+268">+268 (Eswatini)</option>
                        <option value="+269">+269 (Comoros)</option>
                        <option value="+291">+291 (Eritrea)</option>
                        <option value="+297">+297 (Aruba)</option>
                        <option value="+298">+298 (Faroe Islands)</option>
                        <option value="+299">+299 (Greenland)</option>
                        <option value="+350">+350 (Gibraltar)</option>
                        <option value="+351">+351 (Portugal)</option>
                        <option value="+352">+352 (Luxembourg)</option>
                        <option value="+353">+353 (Ireland)</option>
                        <option value="+354">+354 (Iceland)</option>
                        <option value="+355">+355 (Albania)</option>
                        <option value="+356">+356 (Malta)</option>
                        <option value="+357">+357 (Cyprus)</option>
                        <option value="+358">+358 (Finland)</option>
                        <option value="+359">+359 (Bulgaria)</option>
                        <option value="+370">+370 (Lithuania)</option>
                        <option value="+371">+371 (Latvia)</option>
                        <option value="+372">+372 (Estonia)</option>
                        <option value="+373">+373 (Moldova)</option>
                        <option value="+374">+374 (Armenia)</option>
                        <option value="+375">+375 (Belarus)</option>
                        <option value="+376">+376 (Andorra)</option>
                        <option value="+377">+377 (Monaco)</option>
                        <option value="+378">+378 (San Marino)</option>
                        <option value="+379">+379 (Vatican City)</option>
                        <option value="+380">+380 (Ukraine)</option>
                        <option value="+381">+381 (Serbia)</option>
                        <option value="+382">+382 (Montenegro)</option>
                        <option value="+383">+383 (Kosovo)</option>
                        <option value="+385">+385 (Croatia)</option>
                        <option value="+386">+386 (Slovenia)</option>
                        <option value="+387">+387 (Bosnia and Herzegovina)</option>
                        <option value="+389">+389 (North Macedonia)</option>
                        <option value="+420">+420 (Czech Republic)</option>
                        <option value="+421">+421 (Slovakia)</option>
                        <option value="+423">+423 (Liechtenstein)</option>
                        <option value="+500">+500 (Falkland Islands)</option>
                        <option value="+501">+501 (Belize)</option>
                        <option value="+502">+502 (Guatemala)</option>
                        <option value="+503">+503 (El Salvador)</option>
                        <option value="+504">+504 (Honduras)</option>
                        <option value="+505">+505 (Nicaragua)</option>
                        <option value="+506">+506 (Costa Rica)</option>
                        <option value="+507">+507 (Panama)</option>
                        <option value="+508">+508 (Saint Pierre and Miquelon)</option>
                        <option value="+509">+509 (Haiti)</option>
                        <option value="+590">+590 (Guadeloupe)</option>
                        <option value="+591">+591 (Bolivia)</option>
                        <option value="+592">+592 (Guyana)</option>
                        <option value="+593">+593 (Ecuador)</option>
                        <option value="+594">+594 (French Guiana)</option>
                        <option value="+595">+595 (Paraguay)</option>
                        <option value="+596">+596 (Martinique)</option>
                        <option value="+597">+597 (Suriname)</option>
                        <option value="+598">+598 (Uruguay)</option>
                        <option value="+599">+599 (Netherlands Antilles)</option>
                        <option value="+670">+670 (Timor-Leste)</option>
                        <option value="+672">+672 (Norfolk Island)</option>
                        <option value="+673">+673 (Brunei)</option>
                        <option value="+674">+674 (Nauru)</option>
                        <option value="+675">+675 (Papua New Guinea)</option>
                        <option value="+676">+676 (Tonga)</option>
                        <option value="+677">+677 (Solomon Islands)</option>
                        <option value="+678">+678 (Vanuatu)</option>
                        <option value="+679">+679 (Fiji)</option>
                        <option value="+680">+680 (Palau)</option>
                        <option value="+681">+681 (Wallis and Futuna)</option>
                        <option value="+682">+682 (Cook Islands)</option>
                        <option value="+683">+683 (Niue)</option>
                        <option value="+685">+685 (Samoa)</option>
                        <option value="+686">+686 (Kiribati)</option>
                        <option value="+687">+687 (New Caledonia)</option>
                        <option value="+688">+688 (Tuvalu)</option>
                        <option value="+689">+689 (French Polynesia)</option>
                        <option value="+690">+690 (Tokelau)</option>
                        <option value="+691">+691 (Micronesia)</option>
                        <option value="+692">+692 (Marshall Islands)</option>
                        <option value="+850">+850 (North Korea)</option>
                        <option value="+852">+852 (Hong Kong)</option>
                        <option value="+853">+853 (Macau)</option>
                        <option value="+855">+855 (Cambodia)</option>
                        <option value="+856">+856 (Laos)</option>
                        <option value="+880">+880 (Bangladesh)</option>
                        <option value="+886">+886 (Taiwan)</option>
                        <option value="+960">+960 (Maldives)</option>
                        <option value="+961">+961 (Lebanon)</option>
                        <option value="+962">+962 (Jordan)</option>
                        <option value="+963">+963 (Syria)</option>
                        <option value="+964">+964 (Iraq)</option>
                        <option value="+965">+965 (Kuwait)</option>
                        <option value="+966">+966 (Saudi Arabia)</option>
                        <option value="+967">+967 (Yemen)</option>
                        <option value="+968">+968 (Oman)</option>
                        <option value="+970">+970 (Palestine)</option>
                        <option value="+971">+971 (United Arab Emirates)</option>
                        <option value="+972">+972 (Israel)</option>
                        <option value="+973">+973 (Bahrain)</option>
                        <option value="+974">+974 (Qatar)</option>
                        <option value="+975">+975 (Bhutan)</option>
                        <option value="+976">+976 (Mongolia)</option>
                        <option value="+977">+977 (Nepal)</option>
                        <option value="+992">+992 (Tajikistan)</option>
                        <option value="+993">+993 (Turkmenistan)</option>
                        <option value="+994">+994 (Azerbaijan)</option>
                        <option value="+995">+995 (Georgia)</option>
                        <option value="+996">+996 (Kyrgyzstan)</option>
                        <option value="+998">+998 (Uzbekistan)</option>
                        
                    </select>
                    <input type="text" name="mobile_number" placeholder="Enter mobile" class="input-field small-field" required>
                </div>
        
                <div>
                    <input type="email" name="email" placeholder="Enter email" class="input-field" required>
                    {{-- <input type="submit" value="Send code" class="submit-btn small-btn"> --}}
                </div>
        
                {{-- <div class="row">
                    <input type="text" name="verify_code" placeholder="Verify code" class="input-field small-field">
                    <input type="submit" name="verify_code" value="Verify code" class="submit-btn small-btn">
                </div> --}}
                <input type="text" id="refer" name="refer" placeholder="Enter refer code" class="input-field" required>

                <input type="submit" value="Sign up" class="submit-btn">
            </form>
            <div class="login-link">
                <label>Have an account? </label><a href="{{ url('login') }}">Log in</a>
            </div>
        </div>
        
        


    </div>
    <!-- * App Capsule -->


    <!-- Terms Modal -->

    <!-- * Terms Modal -->

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="{{ asset('fine-app/assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="{{ asset('finr-app/assets/js/plugins/splide/splide.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset('fine-app/assets/js/base.js') }}"></script>
    <!-- Add a button to trigger password generation -->


</body>

</html>