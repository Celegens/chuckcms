    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="{{ URL::to('chuckbe/chuckcms/chuckcms-logo.png') }}" alt="logo" class="brand" data-src="{{ URL::to('chuckbe/chuckcms/chuckcms-logo.png') }}" data-src-retina="{{ URL::to('chuckbe/chuckcms/chuckcms-logo.png') }}" height="22">
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="{{ route('dashboard') }}">
              <span class="title">Dashboard</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="shield"></i></span>
          </li>

          <li class="">
            <a href="{{ route('dashboard.pages') }}"><span class="title">Paginas</span></a>
            <span class="icon-thumbnail"><i data-feather="layout"></i></span>
          </li>

          <li class="">
            <a href="javascript:;"><span class="title">Navigatie</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="list"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('dashboard.menus') }}">Menu's</a>
                <span class="icon-thumbnail">me</span>
              </li>
              <li class="">
                <a href="{{ route('dashboard.redirects') }}">Redirects</a>
                <span class="icon-thumbnail">re</span>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="{{ route('dashboard.users') }}"><span class="title">Gebruikers</span></a>
            <span class="icon-thumbnail"><i data-feather="users"></i></span>
          </li>

          <li class="">
            <a href="{{ route('dashboard.templates') }}"><span class="title">Templates</span></a>
            <span class="icon-thumbnail"><i data-feather="grid"></i></span>
          </li>

          <li class="">
            <a href="{{ route('dashboard.forms') }}"><span class="title">Formulieren</span></a>
            <span class="icon-thumbnail"><i data-feather="clipboard"></i></span>
          </li>

          <li class="">
            <a href="javascript:;"><span class="title">Content</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="box"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('unisharp.lfm.show') }}">Media</a>
                <span class="icon-thumbnail"><i data-feather="airplay"></i></span>
              </li>
              <li class="">
                <a href="{{ route('dashboard.content.resources') }}">Resources</a>
                <span class="icon-thumbnail">re</span>
              </li>
              <li class="">
                <a href="{{ route('dashboard.content.repeaters') }}">Repeaters</a>
                <span class="icon-thumbnail">rp</span>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="{{ route('dashboard.settings') }}">
              <span class="title">Instellingen</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="cpu"></i></span>
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->