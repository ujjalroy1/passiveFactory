<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
          .div_deg
          {
              display: flex;
              align-items: center;
              justify-content: center;
              margin-top:50px; 
          }
          .table_deg
          {
              border: 2px solid skyblue;
          }
          th
          {
               background-color: skyblue;
               color: white;
               font-size: 20px;
               font-weight: bold;
               padding: 25px;

          }
          td
          {
             border: 2px solid skyblue;
             text-align: center;
             color: white
          }
          input[type="search"]
          {
             width:300px;
             height: 40px;
             margin-left: 60px;
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
            <form action="{{ url('product_search') }}" method="GET">
              @csrf
                 <input type="search" name="search">
                 <input type="submit" name="submit" class="btn btn-secondary" value="search">
            </form>
             <div class="div_deg">
                   <table class="table_deg">
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        @foreach ($product as $pt)
                        
                         <tr>
                            <td>{{ $pt->title }}</td>
                            <td>{!!Str::limit( $pt->description,20)!!}</td>
                            <td>{{ $pt->category }}</td>
                            <td>{{ $pt->price }}</td>
                            <td>{{ $pt->quantity }}</td>
                            <td>
                                <img src="products/{{  $pt->image }}" height="50px" width="50px">
                            </td>
                            <td>
                              <a class="btn btn-success" href="{{ url('update_product',$pt->slug) }}">Edit</a>
                          </td>
                          <td>
                              <a class="btn btn-danger" href="{{ url('delete_product',$pt->id) }}">Delete</a>
                          </td>
                         </tr>

                        @endforeach
                   </table>
                   
             </div>
             <div class="div_deg">
                {{ $product->onEachSide(1)->links() }}
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