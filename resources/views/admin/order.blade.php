<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
     
        table
        {
             border: 2px solid skyblue;
             text-align: center;
             width: 100%;

        }
        th
        {
             background-color:black;
             color: white;
             font-size: 15px;
             padding: 5px;
             text-align: center;
             font-weight: bold; 
        }
        .div_deg
        {
              display: flex;
              align-content: center;
              padding:5px;
              justify-content: center;
        }
       td
       {
           border: 2px solid skyblue;
           color: white;
           padding: 5px;
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
            
          <div class="div_deg">
            <table>
                <tr>
                     <th>Customer Name</th>
                     <th>Address</th>
                     <th>Phone</th>
                     <th>Product Title</th>
                     <th>Price</th>
                     <th>Image</th>
                     <th>status</th>
                     <th>Change status</th>
                     <th>Print PDF</th>
                </tr> 
                @foreach ( $data as $data )
                    
                
                <tr>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->rec_address }}</td>
                      <td>{{ $data->phone}}</td>
                      <td>{{ $data->product->title}}</td>
                      <td>{{ $data->product->price}}</td>
                      <td>
                         <img src="products/{{ $data->product->image }}" width="100px">


                      </td>
                      <td>
                          {{-- {{ $data->status }} --}}
                          @if ($data->status=='in progress')
                         
                             <span style="color: red">in progress</span>
                         
                          @elseif ($data->status=='on the way')
                        
                            <span style="color: rgb(255, 0, 195)">on the way</span>
                          
                           @else
                          
                            <span style="color: skyblue">Delivered</span>
                          
                          @endif
                      </td>
                      <td>
                          <a class="btn btn-primary" href="{{ url('on_the_way',$data->id) }}" style="margin: 5px">
                             on the way
                          </a>
                          <a class="btn btn-success" href="{{ url('delivered',$data->id) }}" style="margin: 5px">
                            delivered
                         </a>
                      </td>
                      <td>
                        <a class="btn btn-primary" href="{{ url('print_pdf',$data->id) }}">
                           print
                        </a>
                      </td>

               </tr> 
               @endforeach

           </table>

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