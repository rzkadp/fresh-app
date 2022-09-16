
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">POS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            {{-- <li><a class="nav-link" href="{{ route('request.index') }}"><i class="fa fa-cart-plus"></i> <span>Request</span></a></li> --}}
            <?php
              $menu = DB::table('menu')->whereIn('id', array(Auth::user()->menu_access))->get();
            ?>
            @foreach ($menu as $m)
              <li><a class="nav-link" href="{{ $m->link }}"><i class="{{ $m->menu_icon }}"></i> <span>{{ $m->name }}</span></a></li>
            @endforeach
            
            {{-- @if ( Auth::user()->level_user == 1 )
            <li class="menu-header">Admin Menu</li>
              <li><a class="nav-link" href="{{ route('transaction.index') }}"><i class="fas fa-dollar-sign"></i> <span>Transaction</span></a></li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('employee.index') }}">Employee</a></li>
                  <li><a class="nav-link" href="{{ route('inventory.index') }}">Inventory</a></li>
                  <li><a class="nav-link" href="{{ route('menu.index') }}">Menu</a></li>
                </ul>
              </li>
            @endif --}}
            
          </ul>
        </aside>
        {{ Auth::user() }}
      </div>
