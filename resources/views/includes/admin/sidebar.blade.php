 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="{{ asset('backend/dist/img/logo-white.svg') }}" alt="SanGroup Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Skinny Cook</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
      <!--  <div class="image">-->
      <!--    <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">-->
      <!--  </div>-->
      <!--  <div class="info">-->
      <!--    <a href="#" class="d-block">Alexander Pierce</a>-->
      <!--  </div>-->
      <!--</div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-header">Menu</li>
              
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-list-alt"></i>
              <p>
                Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/order-input') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/show-order') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Orders</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shipping-fast"></i>
              <p>
                Courier
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/courier-job') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jobs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/courier') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Courier</p>
                </a>
              </li>
            </ul>
          </li>
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Billing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/billing-daily') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Single Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/billing-subscribe') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subscription</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ url('/admin/member') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Member
              </p>
            </a>
          </li>      
          <li class="nav-item">
            <a href="{{ url('/admin/reward') }}" class="nav-link">
                <i class="nav-icon fas fa-gift"></i>
              <p>
                Reward
              </p>
            </a>
          </li>      
          <li class="nav-item">
            <a href="{{ url('/admin/menu') }}" class="nav-link">
                <i class="nav-icon fas fa-concierge-bell"></i>
              <p>
                Menu
              </p>
            </a>
          </li>      
          <li class="nav-item">
            <a href="{{ url('/filemanager') }}" target="_blank" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                File Manager
              </p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
