<header class="main-header">
  <!-- Logo -->
  <a href="../../index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>K</b>P</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Kubuś Puchatek</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li><!-- start message -->
                  <a href="#">
                    <div class="pull-left">
                      <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      Support Team
                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li>
                <!-- end message -->
              </ul>
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li>

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span>Loged in as: {{ auth()->user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="/admin/users/{{ Auth::user()->id }}/edit" class="btn btn-default btn-flat"><span class="fa fa-user"></span> Profile </a>
              <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                <span class="fa fa-sign-out"></span> Sign out 
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>

            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
