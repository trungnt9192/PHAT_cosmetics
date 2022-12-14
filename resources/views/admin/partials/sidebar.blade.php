  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ URL::to('admin/home') }}" class="brand-link">
          <img src="{{ asset('user\image\logo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">PHAT Cosmetics</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('user\image\z3667987259059_d6da9871758649a800826b2d8c790203.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Trung</a>
                  
              </div>
              
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Menu Manager-->

                  <li class="nav-item">
                      <a href="{{ route('categories.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Categories
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('brands.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Brands
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('products.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>Product</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('menus.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>Menu</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('sliders.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>Sliders</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('settings.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>Settings</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('users.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>Users List</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('roles.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>Roles List</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('permissions.create') }}" class="nav-link">
                          <p>Create permissions</p>
                      </a>
                  </li>








              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
