
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">POS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            @if ( Auth::user()->role_id == 1 )
              <li class="menu-header">Main Menu</li>
              <li><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="{{ route('request.index') }}"><i class="fa fa-cart-plus"></i> <span>Request</span></a></li>
              <li><a class="nav-link" href="{{ route('transaction.index') }}"><i class="fas fa-dollar-sign"></i> <span>Transaction</span></a></li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('employee.index') }}">Employee</a></li>
                  <li><a class="nav-link" href="{{ route('inventory.index') }}">Inventory</a></li>
                </ul>
              </li>
            @else
              <li><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="{{ route('request.index') }}"><i class="fa fa-cart-plus"></i> <span>Request</span></a></li>
            @endif
            
          </ul>
        </aside>
      </div>
