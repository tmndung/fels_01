
  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>LEARNING</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>@lang('message.lte.admin_elearing')</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">@lang('message.lte.tog_nav')</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="" class="user-image" alt="User Image">
              <span class="hidden-xs">@lang('message.lte.hello')</span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="" class="img-circle" alt="User Image">
              </li>

              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">@lang('message.lte.account_information')</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">@lang('message.lte.chang_password')</a>
                </div>
              </li>
            </ul>
          </li>
           <li class="dropdown tasks-menu">
            <a href="{{route('logout')}}" class="" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
             @lang('message.lte.logout')
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
        <form id="logout-form" action="" method="POST" style="display: none;">

        </form>
      </div>
    </nav>
  </header>
