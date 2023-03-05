<x-custom-layout>
    <div style="background:#181C32; opacity:0.65; width:100%; height:200vh; position:absolute; left:0; right:0; top:0; bottom:0; z-index:-1;"></div>
    <div class="container">
        <!--begin::Form-->
        <form class="form" novalidate="novalidate" id="" data-kt-redirect-url="/" action="login" style="
        color: #fff !important;">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-11">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder mb-3" style="color:#fff !important;">
                    Influencer Başvuru Formu
                </h1>
                <!--end::Title-->
            </div>

            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <label class="form-label mb-3">Adınız</label>
                        <input type="text" placeholder="Adınız" name="ad" autocomplete="off" class="form-control form-control-solid" value=""/>
                        <!--end::Email-->
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <label class="form-label mb-3">Soyadınız</label>
                        <input type="text" placeholder="Soyad" name="soyad" autocomplete="off" class="form-control form-control-solid" value=""/>
                        <!--end::Email-->
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <label class="form-label mb-3">E-Posta Adresiniz</label>
                        <input type="text" placeholder="E-Posta Adresiniz" name="email" autocomplete="off" class="form-control form-control-solid" value=""/>
                        <!--end::Email-->
                    </div>
                </div>
                
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <label class="form-label mb-3">Ülkeler</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-lg form-select-solid" data-placeholder="Ülke Seçiniz" id="ulke_search_select2" name="ulke"  tabindex="-1">
                            <option></option>
                        </select>
                        <!--end::Email-->
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="form-label mb-3">Şehirler</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-lg form-select-solid" data-placeholder="Şehir Seçiniz" id="sehir_search_select2" name="sehir"  tabindex="-1">
                            <option></option>
                        </select>
                        <!--end::Input-->
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="form-label mb-3">İlçeler</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-lg form-select-solid" data-placeholder="İlçe Seçiniz" id="ilce_search_select2" name="ilce"  tabindex="-1">
                            <option></option>
                        </select>
                        <!--end::Input-->
                    </div>
                </div>
            </div>
            <!--begin::Heading-->

            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label mb-3">Dil</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-lg form-select-solid" data-placeholder="Dil Seçiniz" id="dil_search_select2" name="dil"  tabindex="-1">
                            <option></option>
                        </select>
                        <!--end::Input-->
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <label class="form-label mb-3">Doğum Tarihiniz</label>
                        <input type="text" placeholder="Doğum Tarihiniz" name="name_surname" autocomplete="off" class="form-control form-control-solid" value=""/>
                        <!--end::Email-->
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <label class="form-label mb-3">Telefon Numaranız</label>
                        <input type="text" placeholder="Telefon numaranız" name="email" autocomplete="off" class="form-control form-control-solid" value=""/>
                        <!--end::Email-->
                    </div>
                </div>
            </div>
            <!--begin::Heading-->

            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <label class="form-label mb-3">Cinsiyet</label>
                        <select class="form-select form-select-solid form-control-solid" aria-required="true" aria-invalid="false" name="ulke">
                            <option value="">--Cinsiyet Seçiniz--</option>
                            <option value="KADIN">KADIN</option>
                            <option value="ERKEK">ERKEK</option>
                            <option value="LGBT+">LGBT+</option>
                        </select>
                        <!--end::Email-->
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <!--begin::Input group--->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <label class="form-label mb-3">Çocuğunuz Var Mı ? </label>
                        <select class="form-select form-select-solid form-control-solid"aria-required="true" aria-invalid="false" name="ulke">
                            <option value="">--Çocuğunuz var mı ?--</option>
                            <option value="HAYIR">HAYIR</option>
                            <option value="EVET">EVET</option>
                        </select>
                        <!--end::Email-->
                    </div>
                </div>
            </div>
            <!--begin::Heading-->

            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label class="form-label mb-3">10.000 ve üstü sosyal medya platformlarınızı seçiniz.</label>
                    <div class="fv-row mb-8">
                        <div class="form-check form-check-custom form-check-solid checkbox_mobil" style="flex-wrap: wrap;">
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_sosyal_medya_checkbox" type="checkbox" value="INSTAGRAM" id="basvuru_instagram"/>
                                <label class="form-check-label" for="basvuru_instagram" style="margin-right:15px;">
                                    İnstagram
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_sosyal_medya_checkbox" type="checkbox" value="TIKTOK" id="basvuru_tiktok"/>
                                <label class="form-check-label" for="basvuru_tiktok" style="margin-right:15px;">
                                    Tiktok
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_sosyal_medya_checkbox" type="checkbox" value="YOUTUBE" id="basvuru_youtube"/>
                                <label class="form-check-label" for="basvuru_youtube" style="margin-right:15px;">
                                    Youtube
                                </label>
                            </div> 
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_sosyal_medya_checkbox" type="checkbox" value="TWITCH" id="basvuru_twitch"/>
                                <label class="form-check-label" for="basvuru_twitch" style="margin-right:15px;">
                                    Twitch
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input form-check-solid basvuru_sosyal_medya_checkbox" type="checkbox" value="TWITTER" id="basvuru_twitter"/>
                                <label class="form-check-label" for="basvuru_twitter" style="margin-right:15px;">
                                    Twitter
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input form-check-solid basvuru_sosyal_medya_checkbox" type="checkbox" value="CANLI_YAYIN_PLATFORMLARI" id="basvuru_canli_yayin"/>
                                <label class="form-check-label" for="basvuru_canli_yayin" style="margin-right:15px;">
                                    Canlı Yayın Platformları
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input form-check-solid basvuru_sosyal_medya_checkbox" type="checkbox" value="DIGER" id="basvuru_diger"/>
                                <label class="form-check-label" for="basvuru_diger" style="margin-right:15px;">
                                    Diğer
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label class="form-label mb-3">Profilinizi nasıl tanımlarsınız ?</label>
                    <div class="fv-row mb-8">
                        <div class="form-check form-check-custom form-check-solid checkbox_mobil" style="flex-wrap: wrap;">
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="ANNE" id="basvuru_kategori_anne"/>
                                <label class="form-check-label" for="basvuru_kategori_anne" style="margin-right:15px;">
                                    Anne
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="COCUK" id="basvuru_kategori_cocuk"/>
                                <label class="form-check-label" for="basvuru_kategori_cocuk" style="margin-right:15px;">
                                    Çocuk
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Moda
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    LifeStyle
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Bakım
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Yemek
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Mekan
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Süpermarket
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Ev
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Oyun
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Hobi
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Seyahat
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Kozmetik
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Spor
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Sağlık
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Eğitim
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <label class="form-label mb-3">Profilinizi nasıl tanımlarsınız ?</label>
                    <div class="fv-row mb-8">
                        <div class="form-check form-check-custom form-check-solid checkbox_mobil" style="flex-wrap: wrap;">
                            <div>
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="radio" value="ISTISNA_BELGESI" name="sirketi_var_mi"/>
</div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="COCUK" id="basvuru_kategori_cocuk"/>
                                <label class="form-check-label" for="basvuru_kategori_cocuk" style="margin-right:15px;">
                                    Çocuk
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Moda
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    LifeStyle
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Bakım
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Yemek
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Mekan
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Süpermarket
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Ev
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Oyun
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Hobi
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Seyahat
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Kozmetik
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Spor
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Sağlık
                                </label>
                            </div>
                            <div> 
                                <input class="form-check-input form-check-solid basvuru_kategori_checkbox" type="checkbox" value="MODA" id="basvuru_kategori_moda"/>
                                <label class="form-check-label" for="basvuru_kategori_moda" style="margin-right:15px;">
                                    Eğitim
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--begin::Heading-->

            <!--begin::Submit button-->
            <div class="d-grid mb-10" style="">
                <button type="button" id="kt_sign_in_submit" class="btn btn-primary mt-5" style="width:150px; margin-left:auto; background:#1b1b29">
                    @include('partials/general/_button-indicator', ['label' => 'Başvuru yap'])
                </button>
            </div>
            <!--end::Submit button-->
        </form>
        <!--end::Form-->
    </div>
</x-custom-layout>

    <script>
        $(document).ready(function(){
            $('.basvuru_sosyal_medya_checkbox').on('change', function() {
                if (this.checked) {
                    var selectedValue = $(this).val();
                    var lower = selectedValue.toLowerCase().replaceAll("_", " ");
                    var strIlkHarfBuyuk = lower.replace(/^\w/, c => c.toUpperCase());
                    var name = 'basvuru_'+selectedValue.toLowerCase()+'_input';
                    var id = 'basvuru_'+selectedValue.toLowerCase()+'_input';
                    var inputHTML = '';
                    if(selectedValue == 'CANLI_YAYIN_PLATFORMLARI'){
                        inputHTML += `
                            <input type="text" class="form-control form-control-solid mt-5" id="canli_yayin_platform_adi" name="canli_yayin_platform_adi" placeholder="Canlı Yayın Platform Adı:">
                             <input type="text" class="form-control form-control-solid mt-5" id="` + name + `" name="` + name + `" placeholder="`+strIlkHarfBuyuk+` hesap adınız.">
                        `;
                    }else if(selectedValue == 'DIGER'){
                        inputHTML += `
                            <input type="text" class="form-control form-control-solid mt-5" id="sosyal_medya_platform_adi" name="sosyal_medya_platform_adi" placeholder="Sosyal Medya Platform Adı">
                             <input type="text" class="form-control form-control-solid mt-5" id="` + name + `" name="` + name + `" placeholder="`+strIlkHarfBuyuk+` hesap adınız.">
                        `;
                    }else{
                        inputHTML = '<input type="text" class="form-control form-control-solid mt-5" id="' + name + '" name="' + name + '" placeholder="'+strIlkHarfBuyuk+' hesap adınız.">';
                    }
                    
                    $('#wrap_social_text').append(inputHTML);
                } else {
                    var selectedValue = $(this).val();
                     if(selectedValue == 'CANLI_YAYIN_PLATFORMLARI'){
                        var id = 'basvuru_'+selectedValue.toLowerCase()+'_input';
                        $('#' + id).remove();
                        $('#canli_yayin_platform_adi').remove();
                    }else if(selectedValue == 'DIGER'){
                        var id = 'basvuru_'+selectedValue.toLowerCase()+'_input';
                        $('#' + id).remove();
                        $('#sosyal_medya_platform_adi').remove();
                    }else{
                        var id = 'basvuru_'+selectedValue.toLowerCase()+'_input';
                        $('#' + id).remove();
                    }
                }
            });
        })
    </script>

<style>
    body{
        background-image:url('assets/media/bg/nTH32S7kXUmGcFDX5XrE6A.webp'); background-size:cover;
    }
    select {
        border:none !important;
    }
    .form-select.form-select-solid, .form-control.form-control-solid , .form-check-custom.form-check-solid .form-check-input{
        background:#1b1b29;
        border:none;
        color:#5E6278;
    }
    .form-check-label{
        color:#fff;
    }
   .row{
    margin-bottom:20px;
   }
   
	.select2-selection{
		height:40px !important;
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
    
    .checkbox_mobil div{
        margin-bottom : 10px;
    }
    @media(max-width:991px){
        .checkbox_mobil{
            display:block;   
        }
    }
</style>

<script> 
    $("#ulke_search_select2").select2({
        minimumInputLength: 2,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "https://crm.influencerajansi.com/cari/search/ulke",
            dataType: "json",
            type: "POST",
            quietMillis: 50,
            processResults: function (response) {
                return {
                    results: response,
                };
            },
        },
    });

    $("#sehir_search_select2").select2({
        minimumInputLength: 2,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "https://crm.influencerajansi.com/cari/search/sehir",
            dataType: "json",
            type: "POST",
            quietMillis: 50,
            processResults: function (response) {
                return {
                    results: response,
                };
            },
        },
    });

    $("#ilce_search_select2").select2({
        minimumInputLength: 2,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "https://crm.influencerajansi.com/cari/search/ilce",
            dataType: "json",
            type: "POST",
            quietMillis: 50,
            processResults: function (response) {
                return {
                    results: response,
                };
            },
        },
    });
    $("#dil_search_select2").select2({
        minimumInputLength: 2,
        language: "tr",
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "https://crm.influencerajansi.com/cari/search/dil",
            dataType: "json",
            type: "POST",
            quietMillis: 50,
            processResults: function (response) {
                return {
                    results: response,
                };
            },
        },
    });

    
</script>