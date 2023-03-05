<!--begin::Header-->
	<div class="card-header pt-7" style="display:none;">
		<div style="display:flex;  align-items:center; margin-bottom:30px;">
			<a href="javascript:void(0)" class="btn btn-sm btn-success" style="margin-right:20px;" id="gelismis_filtre_btn">Filtrele</a>
			<input type="text" placeholder="Arama" class="form-control form-control-sm form-control-solid" style="width:100%; display:block;" id="influencer_hesap_search">
		</div>
		<div id="gelismis_filtreleme">
		<div id="nouislider">
			<div style="margin-right:30px !important;" id="takipci_araligi_wrap">
				<label for="" class="d-block mb-5" id="takipci_araligi">
					<div>Takipçi Aralığı</div>
					<div><span>Min:</span> <input type="text" class="form-control form-control-sm form-control-solid" id="takipci_min" value=""></div>
					<div><span>Max:</span> <input type="text" class="form-control form-control-sm form-control-solid" id="takipci_max" value=""></div>
				</label>
				<div id="kt_slider_basic" style="width:100%;"></div>
				
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="1000,10000" id="flexRadioLg" name="radio" readonly/>
					<label class="form-check-label" for="flexRadioLg">
						NANO [1K - 10K]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="10000,50000" id="flexRadioLg2" name="radio" readonly/>
					<label class="form-check-label" for="flexRadioLg2">
						MICRO [10K - 50K]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="50000,500000" id="flexRadioLg3" name="radio" readonly/>
					<label class="form-check-label" for="flexRadioLg3">
						MID-TIER [50K - 500K]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="500000,1000000" id="flexRadioLg4" name="radio" readonly/>
					<label class="form-check-label" for="flexRadioLg4">
						MACRO [500K - 1M]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="1000000,90000000" id="flexRadioLg5" name="radio" readonly/>
					<label class="form-check-label" for="flexRadioLg5">
						MEGA [1M+]
					</label>
				</div>
			</div>
			<div style="margin-right:30px !important;" id="etkilesim_araligi_wrap">
				<label for="" class="d-block mb-5" id="etkilesim_araligi">
					<div>Etkileşim Oranı Aralığı</div>
					<div><span>Min:</span> <input type="text" class="form-control form-control-sm form-control-solid" id="etkilesim_min" value=""></div>
					<div><span>Max:</span> <input type="text" class="form-control form-control-sm form-control-solid" id="etkilesim_max" value=""></div>
				</label>
				<div id="kt_slider_basic3" style="width:100%;"></div>
				
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="0,5" id="flexRadioLg9" name="radio3" readonly/>
					<label class="form-check-label" for="flexRadioLg9">
						ORAN [0 - 5%]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="5,10" id="flexRadioLg10" name="radio3" readonly/>
					<label class="form-check-label" for="flexRadioLg10">
						ORAN [5% - 10%]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="10,100" id="flexRadioLg11" name="radio3" readonly/>
					<label class="form-check-label" for="flexRadioLg11">
						ORAN [10%+]
					</label>
				</div>
			</div>
			
			<div style="margin-right:30px !important;" id="yas_araligi_wrap">
				<label for="" class="d-block mb-5" id="yas_araligi">
					<div>Yaş Aralığı</div>
					<div><span>Min:</span> <input type="text" class="form-control form-control-sm form-control-solid" id="yas_min" value=""></div>
					<div><span>Max:</span> <input type="text" class="form-control form-control-sm form-control-solid" id="yas_max" value=""></div>
				</label>
				<div id="kt_slider_basic2" style="width:100%;"></div>
				
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="0,18" id="flexRadioLg6" name="radio2" readonly/>
					<label class="form-check-label" for="flexRadioLg6">
						YAŞ [0 - 18]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="18,35" id="flexRadioLg7" name="radio2" readonly/>
					<label class="form-check-label" for="flexRadioLg7">
						YAŞ [18 - 35]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="35,100" id="flexRadioLg8" name="radio2" readonly/>
					<label class="form-check-label" for="flexRadioLg8">
						YAŞ [35+]
					</label>
				</div>
			</div>
		</div>
		<div class="card-toolbar">
			<a href="javascript:void(0)" class="btn btn-sm btn-primary" id="takipci_btn">Takipçi Aralığı</a>
			<a href="javascript:void(0)" class="btn btn-sm btn-danger" id="etkilesim_btn">Etkileşim Aralığı</a>
			<a href="javascript:void(0)" class="btn btn-sm btn-info" id="yas_btn">Yaş Aralığı</a>
			<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Cinsiyet" data-hide-search="true">
				<option value=""></option>
				<option value="ERKEK">ERKEK</option>
				<option value="KADIN">KADIN</option>
				<option value="LGBT">LGBT+</option>
			</select>
			<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Dil">
				<option></option>
			</select>
			<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Platform" data-hide-search="true">
				<option value=""></option>
				<option value="TIKTOK">TIKTOK</option>
				<option value="INSTAGRAM">INSTAGRAM</option>
				<option value="FACEBOOK">FACEBOOK</option>
				<option value="TWITTER">TWITTER</option>
			</select>
			<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Doğrulanmış Hesap" data-hide-search="true">
				<option value=""></option>
				<option value="EVET">EVET</option>
				<option value="HAYIR">HAYIR</option>
			</select>
			<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Sağlayıcı">
				<option></option>
			</select>
			<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Etiketler" multiple="multiple">
				<option></option>
			</select>
		</div>
		<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Header-->
<div class="card">

    <!--begin::Form-->
    <form id="kt_project_settings_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
        <!--begin::Card body-->
        <div class="card-body p-9">
            <h1>Ayarlar</h1>
            <div class="separator my-10"></div>
            <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Instagram Takipçi Cronu</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <button type="button" class="btn btn-sm btn-primary" id="instagram_takipci_2_haftalik_cron">2 Haftalık Cronu Çalıştır</button>
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
            </div>
            <!--end::Row-->
            <div class="separator my-10"></div>
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Otomatik Instagram Cronu</div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-9">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" id="instagram-otomatik-check" name="instagram-otomatik-check" @if($ayar->instagram_otomatik  == "ACIK") checked="checked" @endif>
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <div class="separator my-10"></div>
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Rol</div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-9">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                        <button type="button" class="btn btn-sm btn-primary"style="margin-right:10px;" data-bs-toggle="modal" data-bs-target="#rol_ekle">Rol Ekle</button>
                        <button type="button" class="btn btn-sm btn-primary ml-5"style="margin-right:10px;" data-bs-toggle="modal" data-bs-target="#izin_ekle">İzin Ekle</button>
                        <button type="button" class="btn btn-sm btn-primary ml-5" data-bs-toggle="modal" data-bs-target="#atama_yap">Atama yap</button>
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <div class="separator my-10"></div>
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Kategori</div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-9">
                    <div class="form-check form-switch form-check-custom form-check-solid">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kategori_ekle">Kategori Ekle</button>
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <div class="separator my-10"></div>
        </div>
        
        <!--end::Card body--></form>
    <!--end:Form-->
</div>

<div class="modal fade" id="rol_ekle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
	<div class="modal-dialog mw-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Title-->
				<h2>Rol Ekle</h2>
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
				<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="rol_form">
					<div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label mb-3">Rol İsmi</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="rol_ismi" placeholder="Rol İsmi" value="" />
                        <!--end::Input-->
                    </div>
					<!--begin::Wrapper-->
						<div class="text-center">
							<button type="button" class="btn btn-lg btn-primary me-3" data-kt-action="submit" id="rol_ekle_btn">
								<span class="indicator-label">Rol Ekle
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-3 ms-2 me-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon--></span>
								<span class="indicator-progress">Lütfen Bekleyin...
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

<div class="modal fade" id="izin_ekle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
	<div class="modal-dialog mw-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Title-->
				<h2>İzin Ekle</h2>
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
				<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="izin_form">
					<div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label mb-3">İzin İsmi</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="izin_ismi" placeholder="İzin İsmi" value="" />
                        <!--end::Input-->
                    </div>
					<!--begin::Wrapper-->
						<div class="text-center">
							<button type="button" class="btn btn-lg btn-primary me-3" data-kt-action="submit" id="izin_ekle_btn">
								<span class="indicator-label">İzin Ekle
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-3 ms-2 me-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon--></span>
								<span class="indicator-progress">Lütfen Bekleyin ...
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

<div class="modal fade" id="atama_yap" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
	<div class="modal-dialog mw-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Title-->
				<h2>Atama Yap</h2>
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
				<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="atama_form">
					<div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label mb-3">Rol</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-lg form-select-solid" data-dropdown-parent="#atama_yap" data-placeholder="Rol Seçiniz" id="rol_search_select2" name="rol">
                            <option></option>
                        </select>
                        <!--end::Input-->
                    </div>
					<!--begin::Wrapper-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label mb-3">İzinler</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-lg form-select-solid" name="izinler[]" data-dropdown-parent="#atama_yap" id="izin_search_select2" data-placeholder="İzin Seçiniz" data-allow-clear="true" multiple="multiple">
                            <option></option>
                        </select>
                        <!--end::Input-->
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-lg btn-primary me-3" data-kt-action="submit" id="atama_yap_btn">
                            <span class="indicator-label">Atama Yap
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-3 ms-2 me-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon--></span>
                            <span class="indicator-progress">Lütfen Bekleyiniz...
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

<div class="modal fade" id="kategori_ekle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
	<div class="modal-dialog mw-1000px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Title-->
				<h2>Kategori Ekle</h2>
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
				<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="kategori_form">
					<div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label mb-3">Kategori İsmi</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="kategori_ismi" placeholder="Kategori İsmi" value="" />
                        <!--end::Input-->
                    </div>
					<!--begin::Wrapper-->
						<div class="text-center">
							<button type="button" class="btn btn-lg btn-primary me-3" data-kt-action="submit" id="kategori_ekle_btn">
								<span class="indicator-label">Kategori Ekle
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
								<span class="svg-icon svg-icon-3 ms-2 me-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
										<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon--></span>
								<span class="indicator-progress">Lütfen Bekleyiniz...
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