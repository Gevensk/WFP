@section('side-bar')
  <li class="nav-item">
    <a href="{{ route('foods.index') }}" class="nav-link {{ request()->routeIs('foods.*') ? 'active' : '' }}">
      <i class="nav-icon bi {{ request()->routeIs('foods.*') ? 'bi-circle-fill' : 'bi-circle' }}"></i>
      <p>Daftar Menu</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
      <i class="nav-icon bi {{ request()->routeIs('categories.*') ? 'bi-circle-fill' : 'bi-circle' }}"></i>
      <p>Category</p>
    </a>
  </li>
  {{-- <li class="nav-item">
    <a href="#" class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }}">
      <i class="nav-icon bi {{ request()->routeIs('customers.*') ? 'bi-circle-fill' : 'bi-circle' }}"></i>
      <p>Customer</p>
    </a>
  </li> --}}
  <li class="nav-item">
    <a href="{{ route('orders.index') }}" class="nav-link {{ request()->routeIs('orders.*') ? 'active' : '' }}">
      <i class="nav-icon bi {{ request()->routeIs('orders.*') ? 'bi-circle-fill' : 'bi-circle' }}"></i>
      <p>Order</p>
    </a>
  </li> 
@endsection

@section("side-bar-report")
<li class="nav-item">
  <a href="{{ route('totalfood') }}" class="nav-link">
    <i class="nav-icon bi"></i>
    <p>Total Foods</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ route('activecustomer') }}" class="nav-link">
    <i class="nav-icon bi"></i>
    <p>Active Customers</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ route('terlaris') }}" class="nav-link">
    <i class="nav-icon bi"></i>
    <p>Menu Terlaris</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ route('paymentreport') }}" class="nav-link">
    <i class="nav-icon bi"></i>
    <p>Payment Method Report</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ route('belumselesai') }}" class="nav-link">
    <i class="nav-icon bi"></i>
    <p>Orderan Belum Selesai</p>
  </a>
</li>
@endsection