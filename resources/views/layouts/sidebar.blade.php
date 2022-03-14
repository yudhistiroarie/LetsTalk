<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard.index') }}" class="brand-link text-center">
        {{-- <img src="{{asset('assets/img/newest-01.png')}}" alt="{{ config('app.name') }} Logo" class="brand-image img-circle elevation-3"> --}}
        {{-- <span class="brand-text font-weight-light">{{ config('app.name') }}</span> --}}
        <span class="brand-text font-weight-light">
            <h4 style="font-size: 1.7rem;">Estika Yasakelola</h4>
            <h6 style="font-size: 1.1rem;">Car Management System</h6>
        </span>
    </a>
    
    <div class="sidebar" style="overflow-y: auto;">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
