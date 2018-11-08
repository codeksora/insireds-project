<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Escritorio</span></a></li>
        <li><a href="<?php echo site_url('salidas'); ?>"><i class="fa fa-link"></i> <span>Ingresar salidas</span></a></li>
        <li class="treeview">
          <a href="<?php echo site_url('#'); ?>"><i class="fa fa-book"></i> <span>Alumnos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('alumnos'); ?>"><i class="fa fa-circle-o"></i> Todas las alumnos</a></li>
            <li><a href="<?php echo site_url('alumnos/agregar'); ?>"><i class="fa fa-circle-o"></i> Agregar alumno</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('#'); ?>"><i class="fa fa-graduation-cap"></i> <span>Docentes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('docentes'); ?>"><i class="fa fa-circle-o"></i> Todas las docentes</a></li>
            <li><a href="<?php echo site_url('docentes/agregar'); ?>"><i class="fa fa-circle-o"></i> Agregar docente</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('#'); ?>"><i class="fa fa-user"></i> <span>Padres</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('padres'); ?>"><i class="fa fa-circle-o"></i> Todas las padres</a></li>
            <li><a href="<?php echo site_url('padres/agregar'); ?>"><i class="fa fa-circle-o"></i> Agregar padre</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Reportes</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>