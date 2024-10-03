<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
    
        .div_deg
         {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            
         }
         label
         {
              display: inline-block;
              width: 200px;
              font-size: 20px!important;
              color: white!important;
    
    
         }
         input[type="text"]
         {
            width: 300px;
            height: 20px;
         }
         textarea
         {
            width: 300px;
            height: 100px;
              
         }
         .input_deg
         {
             padding: 20px;
         }
    
        </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
            <h1>Update product</h1>
     <div class="div_deg">

        <form action="{{ url('edit_product',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="input_deg">
                <label>title</label>   
                <input type="text" name="title" value="{{ $data->title }}">
              </div>
                <div class="input_deg">
                    <label>Description</label>
                    <textarea name="description" required>{{ $data->description }}</textarea>
                  </div>
                  <div class="input_deg">
                    <label>Price</label>
                    <input type="text" name="price" value="{{ $data->price }}">
                  </div>
                  <div class="input_deg">
                    <label>Quantity</label>
                    <input type="text" name="qty" value="{{ $data->quantity }}">
                  </div>
                  <div class="input_deg">
                    <label>category</label>
                    <select name="category">
                        <option value="{{ $data->category }}">{{ $data->category }}</option>
                    </select>
                  </div>
                  <div class="input_deg">
                      <label>Current image</label>
                      <img height="150px" width="150px" src="/products/{{ $data->image }}">
                  </div>
                  <div class="input_deg">
                    <label>New image</label>
                   <input type="file" name="image">
                </div>
                  <div class="input_deg">
                       <input class="btn btn-success" type="submit" value="update product">
                  </div>
        </form>



     </div>

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