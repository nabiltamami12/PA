        @if(Auth::user()->username=='nabil')
 
 <div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('/material-dashboard-master/assets/img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
           <center><img src="{{ asset('/material-dashboard-master/assets/img/Logo-PLN-Terbaru.jpg') }}" style="max-height: 5rem;"></center>
          </div>
      
       <p class="text-dark " style="text-transform: uppercase;text-align: center; font-weight: bold;font-style: italic;" >{{ Auth::user()->name }} | {{ Auth::user()->username }}</p>
              <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ request()->is('padam') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('padam') }}">
              <i class="material-icons">date_range</i>
              <p>Jadwal Padam </p>
            </a>
          </li> 
           <li class="nav-item {{ request()->is('laporan') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ url('laporan') }}">
              <i class="material-icons">library_books</i>
              <p>Laporan</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('akun') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('akun') }}">
              <i class="material-icons">person</i>
              <p>Petugas</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('trafo') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('trafo') }}">
              <i class="material-icons">settings_input_composite</i>
              <p>Trafo</p>
            </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{ url('logout') }}">  
              <i class="material-icons">login</i>
              <p>Logout</p>
            </a>
          </li>
        <!--   <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
        </ul>
      </div>
    
  </div>
          @else
            
            <div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('/material-dashboard-master/assets/img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
           <center><img src="{{ asset('/material-dashboard-master/assets/img/Logo-PLN-Terbaru.jpg') }}" style="max-height: 5rem;"></center>
          </div>
      
           <p class="text-dark " style="text-transform: uppercase;text-align: center; font-weight: bold;font-style: italic;" >{{ Auth::user()->name }} | {{ Auth::user()->username }}</p>
              <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ request()->is('ceklis') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('ceklis') }}">
              <i class="material-icons">date_range</i>
              <p>Ceklis</p>
            </a>
          </li>
           <li class="nav-item {{ request()->is('padam') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('padam') }}">
              <i class="material-icons">date_range</i>
              <p>Padam</p>
            </a>
          </li>
            <!-- 
          <li class="nav-item {{ request()->is('material') ? 'active' : '' }}  ">
            <a class="nav-link" href="{{ url('material') }}">
              <i class="material-icons">dashboard</i>
              <p>Material</p>
            </a>
            
          </li>
        <li role="separator" class="divider"></li>
      <li class="nav-item {{ request()->is('komponen') ? 'active' : '' }}  ">
            <a class="nav-link" href="{{ url('komponen') }}">
              <i class="material-icons">memory</i>
              <p>Komponen</p>
            </a> 
          </li>   
          <li class="nav-item {{ request()->is('petugas') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('petugas') }}">
              <i class="material-icons">person</i>
              <p>Petugas</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('trafo') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('trafo') }}">
              <i class="material-icons">settings_input_composite</i>
              <p>Trafo</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('laporan') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ url('laporan') }}">
              <i class="material-icons">library_books</i>
              <p>Laporan</p>
            </a>
          </li> -->
          <li class="nav-item">
             <a class="nav-link" href="{{ url('logout') }}">  
              <i class="material-icons">login</i>
              <p>Logout</p>
            </a>
          </li>
        <!--   <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
        </ul>
      </div>
    
  </div>
  @endif

    <script type="application/javascript">
      
$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(250);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(250);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#toggle-sidebar").click(function() {
  $(".page-wrapper").toggleClass("toggled");
});

    </script>