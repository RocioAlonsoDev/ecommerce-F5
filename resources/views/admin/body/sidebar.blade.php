<nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{route('admin.orders')}}" class="sidebar-brand">
          Food<span>House</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Inicio</li>
          <li class="nav-item">
            <a href="{{route('admin.orders')}}" class="nav-link">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Pedidos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.menu')}}" aria-controls="charts">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Carta</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.stats')}}" aria-controls="charts">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Estadísticas</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{route('admin.index')}}" aria-controls="charts">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Permisos</span>
            </a>
          </li> -->
        </ul>
      </div>
    </nav>

