<style>
	.select2-container .select2-selection--single , .select2-container .select2-selection--multiple{
		display: flex !important;
	}
	
	.card-toolbar select{
		margin-left:10px; display:block !important; position:relative !important;
	}
	.card-toolbar{
		flex-wrap:unset !important;
	}
	#takipci_btn , #etkilesim_btn{
		position:relative;
		margin-right:10px;
	}
	#takipci_araligi_wrap , #yas_araligi_wrap , #etkilesim_araligi_wrap{
		display: none;
		width:300px;
	}
	.card-toolbar a{
		flex: none;
	}
	#takipci_araligi div , #yas_araligi div , #etkilesim_araligi div{
		display: flex;
		justify-content: space-between;
		align-items:center;
		margin-bottom:10px;
	}
	#takipci_araligi div span{
		display:inline-block;
		margin-right:20px;
	}
	#takipci_araligi div input{
		display:inline-block;
		width:50%;
	}
	#takipci_araligi_wrap .form-check , #yas_araligi_wrap .form-check , #etkilesim_araligi_wrap .form-check{
		margin-top:10px;
	}
	#kt_slider_basic , #kt_slider_basic2 , #kt_slider_basic3{
		margin-bottom:30px;
	}
	.card .card-header{
		justify-content:unset;
	}
	.card .card-header{
		display:block;
	}
	#gelismis_filtreleme{
		display:none;
		overflow-x:scroll;
	}
	#nouislider{
		display:flex
	}
	@media (max-width:991px){
		.card .card-header .card-toolbar{
			display:block;
		}

		#nouislider{
			display:block
		}

		#takipci_btn , #yas_btn , #etkilesim_btn {
			margin-bottom:20px;
		}

		#takipci_araligi_wrap , #yas_araligi_wrap , #etkilesim_araligi_wrap{
			width:90% !important;
			margin:0 auto !important;
		}

		select{
			margin-bottom:10px;
		}
	}
</style>
<!--begin::Table widget 14-->
<div class="card card-flush h-md-100">
	<!--begin::Header-->
	<div class="card-header pt-7">
		<div style="display:flex;  align-items:center; margin-bottom:30px;">
			<a href="javascript:void(0)" class="btn btn-sm btn-success" style="margin-right:20px;" id="gelismis_filtre_btn">Filtrele</a>
			<input type="text" placeholder="Arama" class="form-control form-control-sm form-control-solid" style="width:100%; display:block;" id="influencer_hesap_search">
		</div>
		<div id="gelismis_filtreleme">
		<div id="nouislider">
			<div style="margin-right:30px !important;" id="takipci_araligi_wrap">
				<label for="" class="d-block mb-5" id="takipci_araligi">
					<div>Takip??i Aral??????</div>
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
					<div>Etkile??im Oran?? Aral??????</div>
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
					<div>Ya?? Aral??????</div>
					<div><span>Min:</span> <input type="text" class="form-control form-control-sm form-control-solid" id="yas_min" value=""></div>
					<div><span>Max:</span> <input type="text" class="form-control form-control-sm form-control-solid" id="yas_max" value=""></div>
				</label>
				<div id="kt_slider_basic2" style="width:100%;"></div>
				
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="0,18" id="flexRadioLg6" name="radio2" readonly/>
					<label class="form-check-label" for="flexRadioLg6">
						YA?? [0 - 18]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="18,35" id="flexRadioLg7" name="radio2" readonly/>
					<label class="form-check-label" for="flexRadioLg7">
						YA?? [18 - 35]
					</label>
				</div>
				<div class="form-check form-check-custom form-check-solid form-check-sm">
					<input class="form-check-input" type="radio" value="35,100" id="flexRadioLg8" name="radio2" readonly/>
					<label class="form-check-label" for="flexRadioLg8">
						YA?? [35+]
					</label>
				</div>
			</div>
		</div>
		<div class="card-toolbar">
			<a href="javascript:void(0)" class="btn btn-sm btn-primary" id="takipci_btn">Takip??i Aral??????</a>
			<a href="javascript:void(0)" class="btn btn-sm btn-danger" id="etkilesim_btn">Etkile??im Aral??????</a>
			<a href="javascript:void(0)" class="btn btn-sm btn-info" id="yas_btn">Ya?? Aral??????</a>
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
			<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Do??rulanm???? Hesap" data-hide-search="true">
				<option value=""></option>
				<option value="EVET">EVET</option>
				<option value="HAYIR">HAYIR</option>
			</select>
			<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Sa??lay??c??">
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
	<!--begin::Body-->
	<div class="card-body pt-6">
		<!--begin::Table container-->
		<div class="table-responsive">
			<!--begin::Table-->
			<table class="table table-row-dashed align-middle gs-0 gy-3 my-0" id="influencer_hesap">
				<!--begin::Table head-->
				<thead>
					<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
						<th class="">Ad</th>
						<th class="">Soyad</th>
						<th class="">Platform</th>
						<th class="">Cinsiyet</th>
						<th class="">Profil Linki</th>
						<th class="">Dil</th>
						<th class="">Do??rulanm???? Hesap</th>
						<th class="">Sa??lay??c??</th>
						<th class="">Etiketler</th>
						<th class="">Olu??turulma Tarihi</th>
						<th class="">G??ncellenme Tarihi</th>
					</tr>
				</thead>
				<!--end::Table head-->
				<!--begin::Table body-->
				<tbody>
				</tbody>
				<!--end::Table body-->
			</table>
		</div>
		<!--end::Table-->
	</div>
	<!--end: Card Body-->
</div>
<!--end::Table widget 14-->
