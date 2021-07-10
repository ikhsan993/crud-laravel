<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="{{ request()->is('/') ?'active' :'' }} nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Home </p>
            </li>
          <li class="nav-header">HALAMAN </li>
          <li class="nav-item active">
            <a href="/guru" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Guru
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/siswa" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Siswa
              </p>
            </a>
          </li>  <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                User

              </p>
            </a>
          </li>
               <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
      </nav>
