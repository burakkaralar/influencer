<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
	<!--begin::Toolbar container-->
	<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

		@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_page-title')

		<!--begin::Actions-->
		<div class="d-flex align-items-center gap-2 gap-lg-3">
			<!--begin::Action-->
				<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#saglayici_modal">Sağlayıcı Ekle</a>
				<a href="#" class="btn btn-sm fw-bold btn-success" data-bs-toggle="modal" data-bs-target="#cari_modal">Cari Ekle</a>
				<a href="#" class="btn btn-sm fw-bold btn-danger"  data-bs-toggle="modal" data-bs-target="#influencer_hesap_modal">Influencer Hesap Ekle</a>
			<!--end::Action-->
		</div>
		<!--end::Actions-->
	</div>
	<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->

<div class="modal fade" id="saglayici_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
	<div class="modal-dialog mw-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Title-->
				<h2>Sağlayıcı Ekle</h2>
				<!--end::Title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y m-5">
				<!--begin::Form-->
				<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="saglayici_form">
					<div class="mb-10 fv-row">
						<!--begin::Label-->
						<label class="form-label mb-3">Sağlayıcı</label>
						<!--end::Label-->
						<!--begin::Input-->
						<select class="form-select form-select-lg form-select-solid" data-hide-search="true" data-dropdown-parent="#saglayici_modal" data-control="select2" data-placeholder="Sağlayıcı Tipi Seçiniz" id="saglayici_tipi" name="saglayici_tipi">
							<option></option>
							<option value="SAHIS" selected>Şahıs</option>
							<option value="AJANS">Ajans</option>
						</select>
						<!--end::Input-->
					</div>
					<div id="saglayici_sahis_wrap" >
						<div class="mb-10 fv-row">
							<!--begin::Label-->
							<label class="form-label mb-3">Ad</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid" name="ad" placeholder="Ad" value="" />
							<!--end::Input-->
						</div>

						<div class="mb-10 fv-row">
							<!--begin::Label-->
							<label class="form-label mb-3">Soyad</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid" name="soyad" placeholder="Soyad" value="" />
							<!--end::Input-->
						</div>
					</div>
					<div id="saglayici_ajans_wrap" style="display:none">
						<div class="mb-10 fv-row">
							<!--begin::Label-->
							<label class="form-label mb-3">Ajans Adı</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid" name="ajans_adi" placeholder="Ajans Adı" value="" />
							<!--end::Input-->
						</div>

						<div class="mb-10 fv-row">
							<!--begin::Label-->
							<label class="form-label mb-3">Yetkili</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid " name="yetkili" placeholder="Yetkili Ad Soyad" value="" />
							<!--end::Input-->
						</div>
					</div>
					<div class="mb-10 fv-row">
							<!--begin::Label-->
							<label class="form-label mb-3">Telefon</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid" name="telefon" placeholder="Telefon" value="" id="saglayici_telefon"/>
							<!--end::Input-->
						</div>
					<div class="mb-10 fv-row">
						<!--begin::Label-->
						<label class="form-label mb-3">E-Posta</label>
						<!--end::Label-->
						<!--begin::Input-->
						<input type="text" class="form-control form-control-lg form-control-solid email" name="email" placeholder="E-Posta" value="" />
						<!--end::Input-->
					</div>
					<!--begin::Wrapper-->
						<div class="text-center">
							<button type="button" class="btn btn-lg btn-primary me-3" data-kt-action="submit">
								<span class="indicator-label">Sağlayıcı Ekle
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-3 ms-2 me-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon--></span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
						<!--end::Wrapper-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--begin::Modal - Create account-->
<div class="modal fade" id="cari_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Title-->
				<h2>Cari Ekle</h2>
				<!--end::Title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y m-5">
				<!--begin::Stepper-->
				<div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
					<!--begin::Nav-->
					<div class="stepper-nav py-5">
						<!--begin::Step 1-->
						<div class="stepper-item current" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Kişisel Bilgileri</h3>
						</div>
						<!--end::Step 1-->
						<!--begin::Step 2-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<h3 class="stepper-title">İletişim ve sağlayıcı</h3>
						</div>
						<!--end::Step 2-->
						<!--begin::Step 3-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<h3 class="stepper-title">Diğer</h3>
						</div>
						<!--end::Step 3-->
					</div>
					<!--end::Nav-->
					<!--begin::Form-->
					<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="cari_form">
						<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_key_header" data-kt-scroll-wrappers="#kt_modal_add_key_scroll" data-kt-scroll-offset="300px">
							
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<div class="mb-5 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Ad</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="ad" placeholder="AD" value="" />
										<!--end::Input-->
									</div>

									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Soyad</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="soyad" placeholder="SOYAD" value="" />
										<!--end::Input-->
									</div>

									<!--begin::Input group-->
									<div class="mb-5 fv-row">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-4">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="cinsiyet" value="ERKEK" checked="checked" id="cari_erkek" />
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="cari_erkek">
													<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
													<span class="svg-icon svg-icon-3x me-5">
														<img class="w-20px h-20px" src="{{ image('icons/influencer/young-man.png') }}" alt="" />
													</span>
													<!--end::Svg Icon-->
													<!--begin::Info-->
													<span class="d-block fw-semibold text-start">
														<span class="text-dark fw-bold d-block fs-4 mb-2">Erkek</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-4">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="cinsiyet" value="KADIN" id="cari_kadin" />
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="cari_kadin">
													<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
													<span class="svg-icon svg-icon-3x me-5">
														<img class="w-20px h-20px" src="{{ image('icons/influencer/woman.png') }}" alt="" />
													</span>
													<!--end::Svg Icon-->
													<!--begin::Info-->
													<span class="d-block fw-semibold text-start">
														<span class="text-dark fw-bold d-block fs-4 mb-2">Kadın</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-4">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="cinsiyet" value="LGBT+" id="cari_lgbt" />
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="cari_lgbt">
													<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
													<span class="svg-icon svg-icon-3x me-5">
														<img class="w-20px h-20px" src="{{ image('icons/influencer/gender.png') }}" alt="" />
													</span>
													<!--end::Svg Icon-->
													<!--begin::Info-->
													<span class="d-block fw-semibold text-start">
														<span class="text-dark fw-bold d-block fs-4 mb-2">LGBT+</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Input group-->

									<div class="mb-5 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Doğum Tarihi</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid" placeholder="DOĞUM TARİHİ" id="dogum_tarihi" name="dogum_tarihi"/>
										<!--end::Input-->
									</div>

									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Ülkeler</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select class="form-select form-select-lg form-select-solid" data-dropdown-parent="#cari_modal" data-placeholder="Ülke Seçiniz" id="ulke_search_select2" name="ulke"  tabindex="-1">
											<option></option>
										</select>
										<!--end::Input-->
									</div>
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Şehirler</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select class="form-select form-select-lg form-select-solid" data-dropdown-parent="#cari_modal" data-placeholder="Şehir Seçiniz" id="sehir_search_select2" name="sehir"  tabindex="-1">
											<option></option>
										</select>
										<!--end::Input-->
									</div>

									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">İlçeler</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select class="form-select form-select-lg form-select-solid" data-dropdown-parent="#cari_modal" data-placeholder="İlçe Seçiniz" id="ilce_search_select2" name="ilce"  tabindex="-1">
											<option></option>
										</select>
										<!--end::Input-->
									</div>
										
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Dil</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select class="form-select form-select-lg form-select-solid" data-dropdown-parent="#cari_modal" data-placeholder="Dil Seçiniz" id="dil_search_select2" name="dil"  tabindex="-1">
											<option></option>
										</select>
										<!--end::Input-->
									</div>
									
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div data-kt-stepper-element="content">
								
								<div class="w-100">
									<!--begin::Input group-->
									<div class="mb-5 fv-row">
										<label class="form-label mb-3">İletişime Geçilecek Kişi</label>
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-4">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="iletisime_gecilecek_kisi" value="KENDI" checked="checked" id="iletisime_gecilecek_kisi_kendi" />
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="iletisime_gecilecek_kisi_kendi">
													<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
													<span class="svg-icon svg-icon-3x me-5">
														<img class="w-20px h-20px" src="{{ image('icons/influencer/contact.png') }}" alt="" />
													</span>
													<!--end::Svg Icon-->
													<!--begin::Info-->
													<span class="d-block fw-semibold text-start">
														<span class="text-dark fw-bold d-block fs-4 mb-2">Kendisi</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="iletisime_gecilecek_kisi" value="AJANS" id="iletisime_gecilecek_kisi_ajans" />
												<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="iletisime_gecilecek_kisi_ajans">
													<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
													<span class="svg-icon svg-icon-3x me-5">
														<img class="w-20px h-20px" src="{{ image('icons/influencer/goal.png') }}" alt="" />
													</span>
													<!--end::Svg Icon-->
													<!--begin::Info-->
													<span class="d-block fw-semibold text-start">
														<span class="text-dark fw-bold d-block fs-4 mb-2">Sağlayıcı - Ajans/Menajer/Aracı</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Kişiye Ait Telefon Numarası</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="telefon_numarasi" placeholder="TELEFON NUMARASI" value="" id="telefon_numarasi"/>
										<!--end::Input-->
									</div>

									<!--end::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Whatsapp numarası farklı mı?</label>
										<!--end::Label-->
										<!--begin::Input-->
										<div class="form-check form-check-custom form-check-solid form-check-sm">
											<input class="form-check-input" type="checkbox" value="" id="whatsapp_numarasi_farkli_mi" style="cursor:pointer"/>
											<label class="form-check-label" for="whatsapp_numarasi_farkli_mi">
												Evet
											</label>
										</div>
										<!--end::Input-->
									</div>

									<div class="whatsapp_numarasi_farkli_mi_wrap">

									</div>

									<!--end::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">E-Posta</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid email" name="email" placeholder="E-POSTA" value="" />
										<!--end::Input-->
									</div>

									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="form-label mb-3">Sağlayıcı</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select class="form-select form-select-lg form-select-solid" data-dropdown-parent="#cari_modal" data-placeholder="Sağlayıcı Seçiniz" id="saglayici_search_select2" name="saglayici">
											<option></option>
										</select>
										<!--end::Input-->
									</div>

									
								</div>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<div class="mb-5 fv-row">
										<label class="form-label mb-3">Şirketi var mı?</label>
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="SAHIS_SIRKETI" checked name="sirketi_var_mi"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/sahis.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="LIMITED" name="sirketi_var_mi"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/limited.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="SERBEST_MESLEK" name="sirketi_var_mi"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/serbest_meslek.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="ISTISNA_BELGESI" name="sirketi_var_mi"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/istisna_belgesi.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="BILINMIYOR" name="sirketi_var_mi"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/bilinmiyor.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<div class="mb-5 fv-row">
										<label class="form-label mb-3">Ürün Karşılığı Tanıtım yapıyor mu? </label>
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="EVET" checked name="urun_karsiligi_tanitim_yapiyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/evet_mor.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="URUNE_GORE" name="urun_karsiligi_tanitim_yapiyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/urune_gore_mor.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="HAYIR" name="urun_karsiligi_tanitim_yapiyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/hayir_mor.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="BILINMIYOR" name="urun_karsiligi_tanitim_yapiyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/bilinmiyor_mor.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<div class="mb-5 fv-row">
										<label class="form-label mb-3">Evinde Evcil Hayvan Besliyor mu?</label>
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="EVET" checked name="evinde_evcil_hayvan_besliyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/evet_mavi.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="HAYIR" name="evinde_evcil_hayvan_besliyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/hayir_mavi.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="BILINMIYOR" name="evinde_evcil_hayvan_besliyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/bilinmiyor_mavi.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<div class="mb-5 fv-row">
										<label class="form-label mb-3">Dark Reklam kabul ediyor mu? (bahis,kripto,iddaa,panel gibi)</label>
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="EVET" checked name="dark_reklam_kabul_ediyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/evet_turuncu.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="HAYIR" name="dark_reklam_kabul_ediyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/hayir_turuncu.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="BILINMIYOR" name="dark_reklam_kabul_ediyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/bilinmiyor_turuncu.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<div class="mb-5 fv-row">
										<label class="form-label mb-3">Şehir Dışı Etkinliklere Seyahat engeli var mı?</label>
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="EVET" checked name="sehir_disi_etkinliklere_seyehay_engeli_var_mi"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/evet_pembe.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="HAYIR" name="sehir_disi_etkinliklere_seyehay_engeli_var_mi"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/hayir_pembe.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="BILINMIYOR" name="sehir_disi_etkinliklere_seyehay_engeli_var_mi"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/bilinmiyor_pembe.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<div class="mb-5 fv-row">
										<label class="form-label mb-3">Organizsyon, Event gibi etkinliklere katılım kabul ediyor mu?</label>
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="EVET" checked name="organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/evet_yesil.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="HAYIR" name="organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/hayir_yesil.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="PROJEYE_GORE" name="organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/projeye_gore_yesil.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-2">
												<label class="form-check-clip">
													<input class="btn-check" type="radio" value="BILINMIYOR" name="organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu"/>
													<div class="form-check-wrapper">
														<div class="form-check-indicator"></div>
														<img class="form-check-content" src="assets/media/cari_form/bilinmiyor_yesil.png"/>
													</div>
												</label>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 3-->
						</div>
						
						
						<!--begin::Actions-->
						<div class="d-flex flex-stack pt-15">
							<!--begin::Wrapper-->
							<div class="mr-2">
								<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
								<span class="svg-icon svg-icon-4 me-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
										<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->Geri</button>
							</div>
							<!--end::Wrapper-->
							<!--begin::Wrapper-->
							<div>
								<!--begin::Add user-->
								<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit" style="display:inline-block !important;">
									<span class="indicator-label">Cari Ekle
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
									<span class="svg-icon svg-icon-3 ms-2 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon--></span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">İlerle
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-4 ms-1 me-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon--></button>
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Create project-->
<!--begin::Modal - Create account-->
<div class="modal fade" id="influencer_hesap_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Title-->
				<h2>Influencer Ekle</h2>
				<!--end::Title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y m-5">
				<!--begin::Form-->
				<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="influencer_form">
					<div class="mb-10 fv-row">
						<!--begin::Label-->
						<label class="form-label mb-3">Influencer Cari</label>
						<!--end::Label-->
						<select class="form-select form-select-lg form-select-solid"  data-dropdown-parent="#influencer_hesap_modal" data-control="select2" data-close-on-select="false" data-placeholder="Influencer Cari Tanımlama" name="influencer_cari" id ="cari_search_select2">
						</select>
					</div>

					<div class="mb-10 fv-row">
						<!--begin::Label-->
						<label class="form-label mb-3">Platform</label>
						<!--end::Label-->
						<!--begin::Input-->
						<select class="form-select form-select-lg form-select-solid" data-hide-search="true" data-dropdown-parent="#influencer_hesap_modal" data-control="select2" data-placeholder="Platform Seçiniz" id="platform" name="platform">
							<option></option>
							<option value="TIKTOK" selected>Tiktok</option>
							<option value="INSTAGRAM">İnstagram</option>
							<option value="FACEBOOK">Facebook</option>
							<option value="TWITTER">Twitter</option>
						</select>
						<!--end::Input-->
					</div>

					<div class="mb-10 fv-row">
						<!--begin::Label-->
						<label class="form-label mb-3">Profil Linkleri</label>
						<!--end::Label-->
						<!--begin::Input-->
						<input class="form-control form-control-lg form-control-solid" value="https://www.instagram.com/ibrahim_yakutt/" id="profil_linkleri" name="profil_linkleri"/>
						<!--end::Input-->
					</div>

					<div class="mb-10 fv-row">
						<!--begin::Label-->
						<label class="form-label mb-3">Etiketler</label>
						<!--end::Label-->
						<!--begin::Input-->
						<input class="form-control form-control-lg form-control-solid"  id="etiketler" name="etiketler"/>
						<!--end::Input-->
					</div>

					<div class="mb-10 fv-row row">
						<!--begin::Label-->
						<label class="col-lg-3 col-form-label text-lg-right">İstatistik Yükleme:</label>
						<!--end::Label-->

						<!--begin::Col-->
						<div class="col-lg-9">
							<!--begin::Dropzone-->
							<div class="dropzone dropzone-queue mb-2" id="kt_dropzonejs_example_3">
								<!--begin::Controls-->
								<div class="dropzone-panel mb-lg-0 mb-2">
									<a class="dropzone-select btn btn-sm btn-primary me-2">Dosya Seç</a>
									<a class="dropzone-remove-all btn btn-sm btn-light-primary">Hepsini Sil</a>
								</div>
								<!--end::Controls-->

								<!--begin::Items-->
								<div class="dropzone-items wm-200px">
									<div class="dropzone-item" style="display:none">
										<!--begin::File-->
										<div class="dropzone-file">
											<div class="dropzone-filename" title="some_image_file_name.jpg">
												<span data-dz-name>some_image_file_name.jpg</span>
												<strong>(<span data-dz-size>340kb</span>)</strong>
											</div>

											<div class="dropzone-error" data-dz-errormessage></div>
										</div>
										<!--end::File-->

										<!--begin::Progress-->
										<div class="dropzone-progress">
											<div class="progress">
												<div
													class="progress-bar bg-primary"
													role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
												</div>
											</div>
										</div>
										<!--end::Progress-->

										<!--begin::Toolbar-->
										<div class="dropzone-toolbar">
											<span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
										</div>
										<!--end::Toolbar-->
									</div>
								</div>
								<!--end::Items-->
							</div>
							<!--end::Dropzone-->

							<!--begin::Hint-->
							<span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
							<!--end::Hint-->
						</div>
						<!--end::Col-->
					</div>
					<!--begin::Wrapper-->
						<div class="text-center">
							<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
								<span class="indicator-label">Influencer Ekle
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-3 ms-2 me-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon--></span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
						<!--end::Wrapper-->
				</form>
				<!--end::Form-->
				
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>

<!--end::Modal - Create project-->
<style>
	.select2-selection{
		height:50px !important;
	}
	.select2-selection__choice__remove{
		padding:10px;
		display:block;
		position:relative;
	}
	.select2-selection__choice__remove span{
		display:block !important;
		position:absolute;
		left:0;
		right:0;
		transform: translateY(-50%);
		opacity: 1 !important;
		font-weight:900;
	}
</style>


<script src="https://crm.influencerajansi.com/assets/plugins/global/plugins.bundle.js"></script>

<script>
	var dropzone_istatistik_url = '{{route("influencer-hesap.dropzone.istatistik")}}';
	var saglayici_ekle_url = '{{route("saglayici.ekle")}}';
	var saglayici_dataTableRoute = '{{route("saglayici.list")}}';
	var saglayici_search = '{{route("saglayici.search")}}';
	var cari_ekle_url = '{{route("cari.ekle")}}';
	var cari_dataTableRoute = '{{route("cari.list")}}';
	var cari_search = '{{route("cari.search")}}';
	var influencer_dataTableRoute = '{{route("influencer-hesap.list")}}';
	
	Inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            "*": {
                validator: '[0-9A-Za-z!#$%&"*+/=?^_`{|}~-]',
                cardinality: 1,
                casing: "lower",
            },
        },
    }).mask(".email");

	

</script>