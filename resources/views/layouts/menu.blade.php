<li class="nav-item">
    <a href="{{ route('dashboard.index') }}"
        class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>

@can('tipe kendaraan-list','merek kendaraan-list','model kendaraan-list','dealer-list','pembelian kendaraan-list','parameter maintenance-list','perusahaan service-list','parameter asuransi-list')
<li class="nav-item has-treeview {{ Request::is('vehiclebrands*','vehicletypes*','vehiclemodels*','maintenanceparams*','serviceparams*','assuranceparams*','dealers*','pOS*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('vehiclebrands*','vehicletypes*','vehiclemodels*','maintenanceparams*','serviceparams*','assuranceparams*','dealers*','pOS*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-car-side"></i>
            <p> Master Data <i class="right fas fa-angle-right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        @can('tipe kendaraan-list')
        <li class="nav-item">
            <a href="{{ route('vehicletypes.index') }}"
                class="nav-link {{ Request::is('vehicletypes*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Tipe Kendaraan</p>
            </a>
        </li>
        @endcan
        @can('merek kendaraan-list')
        <li class="nav-item">
            <a href="{{ route('vehiclebrands.index') }}"
                class="nav-link {{ Request::is('vehiclebrands*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Merek kendaraan</p>
            </a>
        </li>
        @endcan
        @can('model kendaraan-list')
        <li class="nav-item">
            <a href="{{ route('vehiclemodels.index') }}"
                class="nav-link {{ Request::is('vehiclemodels*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Model Kendaraan</p>
            </a>
        </li>
        @endcan
        @can('dealer-list')
        <li class="nav-item">
            <a href="{{ route('dealers.index') }}"
            class="nav-link {{ Request::is('dealers*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Dealer</p>
            </a>
        </li>
        @endcan
        @can('pembelian kendaraan-list')
        <li class="nav-item">
            <a href="{{ route('pOS.index') }}"
            class="nav-link {{ Request::is('pOS*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Pembelian Kendaraan</p>
            </a>
        </li>
        @endcan
        @can('parameter maintenance-list')
        <li class="nav-item">
            <a href="{{ route('maintenanceparams.index') }}"
             class="nav-link {{ Request::is('maintenanceparams*') ? 'active' : '' }}">
             <i class="far fa-circle nav-icon"></i>
                <p>Parameter Servis</p>
            </a>
        </li>
        @endcan
        @can('perusahaan service-list')
        <li class="nav-item">
            <a href="{{ route('serviceparams.index') }}"
                class="nav-link {{ Request::is('serviceparams*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Perusahaan Servis</p>
            </a>
        </li>
        @endcan
        @can('parameter asuransi-list')
        <li class="nav-item">
            <a href="{{ route('assuranceparams.index') }}"
            class="nav-link {{ Request::is('assuranceparams*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Perusahaan Asuransi</p>
            </a>
        </li>
        @endcan
    </ul>
</li>
@endcan

@can('data kendaraan-list','data detail kendaraan-list','data perawatan kendaraan-list','data asuransi kendaraan-list','data pelanggan-list')
<li class="nav-item has-treeview {{ Request::is('vehiclemasters*','vehicle_details*','vehiclemaintenances*','vehicleassurances*','customers*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('vehiclemasters*','vehicle_details*','vehiclemaintenances*','vehicleassurances*','customers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-car-crash"></i>
            <p> Data <i class="right fas fa-angle-right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        @can('data kendaraan-list')
        <li class="nav-item">
            <a href="{{ route('vehiclemasters.index') }}"
                class="nav-link {{ Request::is('vehiclemasters*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Kendaraan</p>
            </a>
        </li>
        @endcan
        @can('data detail kendaraan-list')
        <li class="nav-item" hidden>
            <a href="{{ route('vehicle_details.index') }}"
                class="nav-link {{ Request::is('vehicle_details*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Detail Kendaraan</p>
            </a>
        </li>
        @endcan
        @can('data perawatan kendaraan-list')
        <li class="nav-item">
            <a href="{{ route('vehiclemaintenances.index') }}"
            class="nav-link {{ Request::is('vehiclemaintenances*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Perawatan Kendaraan</p>
            </a>
        </li>
        @endcan
        @can('data asuransi kendaraan-list')
        <li class="nav-item">
            <a href="{{ route('vehicleassurances.index') }}"
            class="nav-link {{ Request::is('vehicleassurances*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Asuransi Kendaraan</p>
            </a>
        </li>
        @endcan
        @can('data pelanggan-list')
        <li class="nav-item">
            <a href="{{ route('customers.index') }}"
            class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">
            <i class="fas fa-user-friends nav-icon"></i>
                <p>Pelanggan</p>
            </a>
        </li>
        @endcan
    </ul>
</li>
@endcan
@can('penyewaan-list','penggantian-list','pembelian-list','perpanjangan-list')
<li class="nav-item has-treeview {{ Request::is('vehicletrxrentextendeds*','vehicletrxrents*','vehicletrxsubstitutes*','vehicletrxpurchaseds*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('vehicletrxrentextendeds*','vehicletrxrents*','vehicletrxsubstitutes*','vehicletrxpurchaseds*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase"></i>
            <p> Data Transaksi <i class="right fas fa-angle-right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        @can('penyewaan-list')
        <li class="nav-item">
            <a href="{{ route('vehicletrxrents.index') }}"
            class="nav-link {{ Request::is('vehicletrxrents*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Penyewaan</p>
            </a>
        </li>
        @endcan
        @can('penggantian-list')
        <li class="nav-item">
            <a href="{{ route('vehicletrxsubstitutes.index') }}"
            class="nav-link {{ Request::is('vehicletrxsubstitutes*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Penggantian</p>
            </a>
        </li>
        @endcan
        @can('perpanjangan-list')
        <li class="nav-item">
            <a href="{{ route('vehicletrxrentextendeds.index') }}"
            class="nav-link {{ Request::is('vehicletrxrentextendeds*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Perpanjangan</p>
            </a>
        </li>
        @endcan
        @can('pembelian-list')
        <li class="nav-item">
            <a href="{{ route('vehicletrxpurchaseds.index') }}"
            class="nav-link {{ Request::is('vehicletrxpurchaseds*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Pembelian</p>
            </a>
        </li>
        @endcan
    </ul>
</li>
@endcan

{{-- TAGIHAN --}}
@canany(['tagihan penyewaan-list','tagihan asuransi-list','tagihan admin-list','tagihan perpanjangan-list', "approve-list"])
<li class="nav-item has-treeview {{ Request::is('vehiclerentbillingexts*','vehicletrxrentbillings*','vehicleassurancebillings*','vehicleadminbillings*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('vehiclerentbillingexts*','vehicletrxrentbillings*','vehicleassurancebillings*','vehicleadminbillings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-car-battery"></i>
            <p>Tagihan <i class="right fas fa-angle-right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        @canany(['tagihan admin-list', "approve-list"])
        <li class="nav-item">
            <a href="{{ route('vehicleadminbillings.index') }}"
            class="nav-link {{ Request::is('vehicleadminbillings*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Admin</p>
            </a>
        </li>
        @endcanany
        @canany(['tagihan asuransi-list', "approve-list"])
        <li class="nav-item">
            <a href="{{ route('vehicleassurancebillings.index') }}"
            class="nav-link {{ Request::is('vehicleassurancebillings*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Asuransi</p>
            </a>
        </li>
        @endcanany
        @canany(['tagihan penyewaan-list', "approve-list"])
        <li class="nav-item">
            <a href="{{ route('vehicletrxrentbillings.index') }}"
            class="nav-link {{ Request::is('vehicletrxrentbillings*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Penyewaan</p>
            </a>
        </li>
        @endcanany
        @canany(['tagihan perpanjangan-list', "approve-list"])
        <li class="nav-item">
            <a href="{{ route('vehiclerentbillingexts.index') }}"
            class="nav-link {{ Request::is('vehiclerentbillingexts*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Perpanjangan</p>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany

{{-- LAPORAN --}}
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-car-battery"></i>
            <p> Laporan <i class="right fas fa-angle-right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#"
            class="nav-link">
            <i class="far fa-circle nav-icon"></i>
                <p>Data Kendaraan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#"
            class="nav-link">
            <i class="far fa-circle nav-icon"></i>
                <p>Asuransi Billing</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#"
            class="nav-link">
            <i class="far fa-circle nav-icon"></i>
                <p>Admin Billing</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#"
            class="nav-link">
            <i class="far fa-circle nav-icon"></i>
                <p>Perawatan Kendaraan</p>
            </a>
        </li>
    </ul>
</li>

{{-- PERSETUJUAN --}}
@php
$string = request()->url();
// $isClose = (str_replace($finds, "", $string) == $string);
@endphp
@can("approve-list")
<li class="nav-item has-treeview  {{ Request::is('apvrtrxrent*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('apvrtrxrent*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-car-battery"></i>
            <p> Persetujuan <i class="right fas fa-angle-right"></i><span class="badge badge-info right">{{ $needApproval }}</span></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            @php $isUrl = preg_match('/apvrtrxrent\b/', $string) @endphp
            <a href="{{ route('apvrtrxrent.index') }}" 
            class="nav-link {{ $isUrl ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Penyewaan</p>
            </a>
        </li>
        {{-- <li class="nav-item">
            @php $isUrl = preg_match('/apvrtrxrentbill\b/', $string) @endphp
            <a href="{{route('apvrtrxrentbill')}}"
            class="nav-link {{ $isUrl ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
                <p>Billing Penyewaan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#"
            class="nav-link">
            <i class="far fa-circle nav-icon"></i>
                <p>Admin Billing</p>
            </a>
        </li> --}}
    </ul>
</li>
@endcan

@can('user-list','role-list','audit-list')
<li class="nav-item has-treeview {{ Request::is('users*','roles*','permissions*','audits*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('users*','roles*','permissions*','audits*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-car-battery"></i>
        <p>Utilitas <i class="right fas fa-angle-right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        @can('user-list')
        <li class="nav-item">
            <a href="{{ route('users.index') }}"
                class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>Pengguna</p>
            </a>
        </li>
        @endcan
        @can('role-list')
        <li class="nav-item">
            <a href="{{ route('roles.index') }}"
                class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>Peran Pengguna</p>
            </a>
        </li>
        @endcan
        {{-- @can('permissions-list') --}}
        <li class="nav-item">
            <a href="{{ route('permissions.index') }}"
                class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>Hak Akses</p>
            </a>
        </li>
        {{-- @endcan --}}
        @can('audit-list')
        <li class="nav-item">
            <a href="{{ route('audits.index') }}"
                class="nav-link {{ Request::is('audits*') ? 'active' : '' }}">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>Audit Trail</p>
            </a>
        </li>
        @endcan
    </ul>
</li>
@endcan
