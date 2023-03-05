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
	<!--begin::Body-->
	<div class="card-body pt-6">
		<!--begin::Table container-->
		<div class="table-responsive">
			<!--begin::Table-->
			<table class="table table-row-dashed align-middle gs-0 gy-3 my-0" id="kategori_table">
				<!--begin::Table head-->
				<thead>
					<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
						<th style="min-width:150px;">Kategori ismi</th>
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
