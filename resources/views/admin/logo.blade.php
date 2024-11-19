<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            {{-- @include('admin.body') --}}

            <form action="{{ url('hello') }}" method="POST" enctype="multipart/form-data" style="max-width: 400px; margin: 20px auto; padding: 25px; background-color: #ffffff; border: 1px solid #e0e0e0; border-radius: 10px;">
                @csrf
                <div class="mb-3" style="margin-bottom: 20px; text-align: center;">
                    <label for="image" class="form-label" style="display: block; font-weight: bold; color: #555;">Current Image</label>
                    <img src="{{ asset('captcha_photo/1728838684.jfif') }}" height="70px" width="70px" style="border-radius: 50%; border: 2px solid #ddd; margin-top: 10px;">
                </div>
            
                <div class="mb-3" style="margin-bottom: 20px;">
                    <label for="image" class="form-label" style="display: block; font-weight: bold; color: #555; margin-bottom: 8px;">New Image</label>
                    <input type="file" class="form-control" id="image" name="image" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 15px; color: #333;">
                </div>
            
                <input type="submit" value="Change" style="display: block; width: 100%; padding: 12px; background-color: #1a73e8; color: #ffffff; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer; transition: background-color 0.3s;">
            </form>
            



          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>