<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<!--begin::Menu wrapper-->
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
		data-kt-scroll-activate="true" data-kt-scroll-height="auto"
		data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
		data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
		<!--begin::Menu-->
		<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
			data-kt-menu-expand="false">
			<!--begin:Menu item-->
			<div class="menu-item">
				<a class="menu-link" href="{{route('anasayfa')}}">
					<span class="menu-icon"><i class="fas fa-home"></i></span>
					<span class="menu-title">Anasayfa</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="{{route('saglayici')}}">
					<span class="menu-icon"><i class="fas fa-people-arrows"></i></span>
					<span class="menu-title">Sağlayıcı</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="{{route('cari')}}">
					<span class="menu-icon"><i class="fas fa-wallet"></i></span>
					<span class="menu-title">Cari</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="{{route('influencer-hesap')}}">
					<span class="menu-icon"><i class="far fa-user-circle"></i></span>
					<span class="menu-title">Influencer Hesap</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="{{route('kategori')}}">
					<span class="menu-icon"><i class="far fa-user-circle"></i></span>
					<span class="menu-title">Kategoriler</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="{{route('kullanicilar')}}">
					<span class="menu-icon"><i class="fas fa-user"></i></span>
					<span class="menu-title">Kullanıcılar</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="{{route('ayarlar')}}">
					<span class="menu-icon"><i class="fas fa-cog"></i></span>
					<span class="menu-title">Ayarlar</span>
				</a>
			</div>
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
