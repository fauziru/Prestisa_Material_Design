<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      Prestisa.com
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>Home</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'piutang' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('piutang') }}">
          <i class="fa fa-balance-scale"></i>
            <p>Piutang</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'riwayat' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('riwayat') }}">
          <i class="material-icons">update</i>
            <p>Riwayat Order</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'order' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('order') }}">
          <i class="material-icons">shopping_cart</i>
            <p>Order Sekarang</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">account_circle</i>
          <p>Profile</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'pengaturan' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('pengaturan') }}">
          <i class="material-icons">settings_applications</i>
          <p>Pengaturan</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="material-icons">assignment_return</i>
            <p>Logout</p>
        </a>
      </li>
      
      <li class="nav-item{{ $activePage == 'testabel' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('testabel') }}">
          <i class="material-icons">error</i>
            <p>{{ __('Tes Tabel') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'tespay' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('tespay') }}">
          <i class="material-icons">error</i>
            <p>{{ __('Tes Pembayaran') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>

