<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px text-center" data-kt-menu="true">
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<div class="menu-content  px-3">
			<!--begin::Username-->
			<div class="text-center">
				<div class="fw-bold  fs-5 text-center">{{auth()->user()->name}}</div>
				<div class="fw-semibold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</div>
			</div>
			<!--end::Username-->
		</div>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->
	<!--begin::Menu item-->
	<div class="menu-item px-5 my-1">
		<a href="{{route('hesap')}}" class="menu-link px-5">Hesap Ayarları</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
		<a href="{{ route('logout') }}" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Çıkış</a>
	</div>
	<!--end::Menu item-->
</div>
<!--end::User account menu-->
