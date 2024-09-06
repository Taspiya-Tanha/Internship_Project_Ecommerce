{{-- sidebar start --}}

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('frontend/assets/img/logo.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Nookx</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('delivery.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Deliveries</div>
            </a>
            <ul>
                <li> <a href="{{ route('delivery.index') }}"><i class="bx bx-right-arrow-alt"></i>All Deliveries </a>
                </li>
                {{-- <li> <a href="{{ route('create.subCategory') }}"><i class="bx bx-right-arrow-alt"></i>Add Sub Category</a> --}}
        </li>
    </ul>
    </li>


    </ul>
    <!--end navigation-->
</div>

{{-- sidebar end --}}
