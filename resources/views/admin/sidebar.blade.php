<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset('admincss/img/ujjal roy.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Ujjal Roy</h1>
          <p>Web Designer</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li class="active"><a href="{{ url('admin/home') }}"> <i class="icon-home"></i>Home </a></li>
              <li><a href="{{ url('admin/addCaptcha') }}"> <i class="icon-grid"></i>Add Captcha </a></li>

              <li class="active">
                <a href="{{ url('admin/manageCaptcha') }}"> 
                <i class="icon-home"> </i>Manage Captcha
              </a>
               </li>

              <li><a href="{{ url('admin/addPackage') }}"> <i class="icon-grid"></i>Add Package </a></li>

              <li class="active">
                <a href="{{ url('admin/managePackage') }}"> <i class="icon-list"></i>Manage Package
               </a>
              </li>

            <li class="active">
              <a href="{{ url('message') }}"> <i class="icon-list"></i>Message
            </a>
          </li>
   
      </ul>
    </nav>