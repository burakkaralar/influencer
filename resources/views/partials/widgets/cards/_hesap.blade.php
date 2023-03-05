<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Hesap Ayarları</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="hesap_formu" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Şifre Değiştir</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row mb-5">
                        <input type="password" name="current_password" placeholder = 'Şimdiki şifreniz.' class="form-control form-control-lg form-control-solid"  value="">
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row offset-lg-4 mb-5">
                        <input type="password" name="new_password" placeholder = 'Yeni şifreniz.' class="form-control form-control-lg form-control-solid"  value="">
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row offset-lg-4 mb-5">
                        <input type="password" name="new_password_confirmation" placeholder = 'Yeni şifreniz tekrar.' class="form-control form-control-lg form-control-solid"  value="">
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="button" class="btn btn-primary" id="hesap_guncelle">Ayarları Kaydet</button>
            </div>
            <!--end::Actions-->
        <input type="hidden"></form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>