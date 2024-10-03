<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
            table
            {
                 border: solid 2px skyblue;
                 width: 100;
            }
            td
            {
                 border: solid 2px skyblue;
                 padding: 5px;
            }
            th
            {
                  border: 2px solid skyblue;
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
            
                 <div>
                       <table>
                              <tr>
                                  <th>ID</th>
                                  <th>User</th>
                                  <th>Admin</th>
                                   <th>Action</th>
                              </tr>
                              @foreach ($data as $dt )
                              <tr>
                              <td>{{ $dt->user_id }}</td>
                              <td>{{ $dt->user_chat }}</td>
                             <form action="{{ url('update_message',$dt->id) }}" method="post">
                               @csrf
                                <td>
                                    <textarea name="message">
                                      {{ $dt->admin_chat }}
                                    </textarea>
                                </td>
                                 <td>
                                  <input type="submit" value="reply" class="btn btn-primary">
                                 </td>
                             </form>

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