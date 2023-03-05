 "use strict";
var KTCreateAccount = (function () {
    var e, t, i, o, a, r;
    return {
        init: function () {
            (e = document.querySelector("#cari_modal")) &&
                new bootstrap.Modal(e),
                (t = document.querySelector("#kt_create_account_stepper")) &&
                    ((i = t.querySelector("#cari_form")),
                    (o = t.querySelector('[data-kt-stepper-action="submit"]')),
                    (a = t.querySelector('[data-kt-stepper-action="next"]')),
                    (r = new KTStepper(t)).on(
                        "kt.stepper.changed",
                        function (e) {
                            4 === r.getCurrentStepIndex()
                                ? (o.classList.remove("d-none"),
                                  o.classList.add("d-inline-block"),
                                  a.classList.add("d-none"))
                                : 5 === r.getCurrentStepIndex()
                                ? (a.classList.add("d-none"))
                                : (o.classList.remove("d-inline-block"),
                                  o.classList.remove("d-none"),
                                  a.classList.remove("d-none"));
                        }
                    ),
                    r.on("kt.stepper.next", function (e) {
                        e.goNext(), KTUtil.scrollTop();
                    }),
                    r.on("kt.stepper.previous", function (e) {
                        console.log("stepper.previous"),
                            e.goPrevious(),
                            KTUtil.scrollTop();
                    }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTCreateAccount.init();
});
$(document).ready(function () {
    $("#saglayici_telefon").mask("+(00) (000) 000-00-00");
    $("#dogum_tarihi").flatpickr({
        dateFormat: "DD-MM-YYYY",
        allowInput: true,
        parseDate: (datestr, format) => {
            return moment(datestr, format, true).toDate();
        },
        formatDate: (date, format, locale) => {
            // locale can also be used
            return moment(date).format(format);
        },
    });
    $("#dogum_tarihi").mask("00-00-0000");
    var dil = document.querySelector("#dil");
    new Tagify(dil);
    var etiketler = document.querySelector("#etiketler");
    new Tagify(etiketler);
    $("#saglayici_tipi").on("select2:select", function () {
        var deger = $(this).val();
        if (deger == "SAHIS") {
            $("#saglayici_ajans_wrap").hide();
            $("#saglayici_sahis_wrap").show();
        } else if (deger == "AJANS") {
            $("#saglayici_sahis_wrap").hide();
            $("#saglayici_ajans_wrap").show();
        }
    });
    $("#telefon_numarasi").mask("+(00) (000) 000-00-00");
    $("#whatsapp_numarasi_farkli_mi").on("click", function () {
        var html = "";
        if ($(this).is(":checked")) {
            html += `
            <!--end::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="form-label mb-3">Kişiye Ait Whatsapp Numarası</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-lg form-control-solid" name="whatsapp_numarasi" placeholder="WHATSAPP NUMARASI" value="" id="whatsapp_numarasi"/>
                <!--end::Input-->
            </div>
        `;
        } else {
            html = "";
        }
        $(".whatsapp_numarasi_farkli_mi_wrap").html(html);
        $("#whatsapp_numarasi").mask("+(00) (000) 000-00-00");
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
    });
    $("#saglayici_form")
        .find('[data-kt-action="submit"]')
        .on("click", function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: saglayici_ekle_url,
                data: $("#saglayici_form").serialize(),
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/saglayici";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        });
    var slider = document.querySelector("#kt_slider_basic");
    var valueMin = document.querySelector("#takipci_min");
    var valueMax = document.querySelector("#takipci_max");
    noUiSlider.create(slider, {
        start: [0, 90000000],
        step: 1000,
        connect: true,
        format: wNumb({
            decimals: 0,
        }),
        range: {
            min: 0,
            max: 90000000,
        },
    });
    slider.noUiSlider.on("update", function (values, handle) {
        if (handle) {
            valueMax.value = values[handle];
        } else {
            valueMin.value = values[handle];
        }
    });
    $("#takipci_min").on("keydown", function (e) {
        var min = $(this).val();
        var max = $("#takipci_max").val();
        if (e.which == 13) {
            slider.noUiSlider.set([min, max]);
        }
    });
    $("#takipci_max").on("keydown", function (e) {
        var max = $(this).val();
        var min = $("#takipci_min").val();
        if (e.which == 13) {
            slider.noUiSlider.set([min, max]);
        }
    });
    $("#takipci_btn").on("click", function () {
        $("#takipci_araligi_wrap").fadeToggle();
    });
    $('[name="radio"]').on("change", function () {
        var val = $(this).val();
        var arr = val.split(",");
        slider.noUiSlider.set(arr);
    });
    var slider2 = document.querySelector("#kt_slider_basic2");
    var valueMin2 = document.querySelector("#yas_min");
    var valueMax2 = document.querySelector("#yas_max");
    noUiSlider.create(slider2, {
        start: [0, 100],
        step: 1,
        connect: true,
        format: wNumb({
            decimals: 0,
        }),
        range: {
            min: 0,
            max: 100,
        },
    });
    slider2.noUiSlider.on("update", function (values, handle) {
        if (handle) {
            valueMax2.value = values[handle];
        } else {
            valueMin2.value = values[handle];
        }
    });
    $("#yas_min").on("keydown", function (e) {
        var min = $(this).val();
        var max = $("#yas_max").val();
        if (e.which == 13) {
            slider2.noUiSlider.set([min, max]);
        }
    });
    $("#yas_max").on("keydown", function (e) {
        var max = $(this).val();
        var min = $("#yas_min").val();
        if (e.which == 13) {
            slider2.noUiSlider.set([min, max]);
        }
    });
    $("#yas_btn").on("click", function () {
        $("#yas_araligi_wrap").fadeToggle();
    });
    $('[name="radio2"]').on("change", function () {
        var val = $(this).val();
        var arr = val.split(",");
        slider2.noUiSlider.set(arr);
    });
    var slider3 = document.querySelector("#kt_slider_basic3");
    var valueMin3 = document.querySelector("#etkilesim_min");
    var valueMax3 = document.querySelector("#etkilesim_max");
    noUiSlider.create(slider3, {
        start: [0, 100],
        step: 1,
        connect: true,
        format: wNumb({
            decimals: 0,
        }),
        range: {
            min: 0,
            max: 100,
        },
    });
    slider3.noUiSlider.on("update", function (values, handle) {
        if (handle) {
            valueMax3.value = values[handle];
        } else {
            valueMin3.value = values[handle];
        }
    });
    $("#etkilesim_min").on("keydown", function (e) {
        var min = $(this).val();
        var max = $("#etkilesim_max").val();
        if (e.which == 13) {
            slider3.noUiSlider.set([min, max]);
        }
    });
    $("#etkilesim_max").on("keydown", function (e) {
        var max = $(this).val();
        var min = $("#etkilesim_min").val();
        if (e.which == 13) {
            slider3.noUiSlider.set([min, max]);
        }
    });
    $("#etkilesim_btn").on("click", function () {
        $("#etkilesim_araligi_wrap").fadeToggle();
    });
    $('[name="radio3"]').on("change", function () {
        var val = $(this).val();
        var arr = val.split(",");
        slider3.noUiSlider.set(arr);
    });
    $("#gelismis_filtre_btn").on("click", function () {
        $("#gelismis_filtreleme").fadeToggle();
    });

    $("#cari_form")
        .find('[data-kt-stepper-action="submit"]')
        .on("click", function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: cari_ekle_url,
                data: $("#cari_form").serialize(),
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/cari";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        });

    var saglayici_table = $("#saglayici_table").DataTable({
        processing: true,
        serverSide: true,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        order: [[5, "desc"]],
        autoWidth: true,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "JSON",
            method: "POST",
            url: saglayici_dataTableRoute,
        },
        pageLength: 10,
        lengthMenu: [
            [10, 20, 50, 100, 200, 500, 1000, -1],
            [
                "10 adet",
                "20 adet",
                "50 adet",
                "100 adet",
                "200 adet",
                "500 adet",
                "1000 adet",
                "Hepsini Göster",
            ],
        ],
        columns: [
            { data: "saglayici_tipi", name: "saglayici_tipi" },
            { data: "isim", name: "isim" },
            { data: "yetkili", name: "yetkili" },
            { data: "email", name: "email" },
            { data: "telefon", name: "telefon" },
            { data: "created_at", name: "created_at" },
            { data: "updated_at", name: "updated_at" },
            {
                data: "islem",
                name: "islem",
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return "a";
                },
            },
        ],
        dom: "rtilp",
    });

    $("#saglayici_search").keyup(function () {
        saglayici_table.search($(this).val()).draw();
    });

    var cari_table = $("#cari_table").DataTable({
        processing: true,
        serverSide: true,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        order: [[5, "desc"]],
        autoWidth: true,
        select: {
            style: 'multi'
        },
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "JSON",
            method: "POST",
            url: cari_dataTableRoute,
        },
        pageLength: 10,
        lengthMenu: [
            [10, 20, 50, 100, 200, 500, 1000, -1],
            [
                "10 adet",
                "20 adet",
                "50 adet",
                "100 adet",
                "200 adet",
                "500 adet",
                "1000 adet",
                "Hepsini Göster",
            ],
        ],
        columns: [
            { data: "ad", name: "ad" },
            { data: "soyad", name: "soyad" },
            { data: "cinsiyet", name: "cinsiyet" },
            { data: "dogum_tarihi", name: "dogum_tarihi" },
            { data: "ulke.baslik", name: "ulke.baslik" },
            { data: "sehir.baslik", name: "sehir.baslik" },
            { data: "ilce.baslik", name: "ilce.baslik" },
            { data: "language.name", name: "language.name" },
            {
                data: "iletisime_gecilecek_kisi",
                name: "iletisime_gecilecek_kisi",
            },
            {
                data: "kisiye_ait_telefon_numarasi",
                name: "kisiye_ait_telefon_numarasi",
            },
            {
                data: "whatsapp_numarasi_farkli_mi",
                name: "whatsapp_numarasi_farkli_mi",
            },
            { data: "whatsapp_numarasi", name: "whatsapp_numarasi" },
            { data: "email", name: "email" },
            { data: "saglayici", name: "saglayici" },
            {
                data: "dark_reklam_kabul_ediyor_mu",
                name: "dark_reklam_kabul_ediyor_mu",
            },
            {
                data: "evinde_evcil_hayvan_besliyor_mu",
                name: "evinde_evcil_hayvan_besliyor_mu",
            },
            {
                data: "organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu",
                name: "organizasyon_event_gibi_etkinliklere_katilim_kabul_ediyor_mu",
            },
            {
                data: "sehir_disi_etkinliklere_seyehay_engeli_var_mi",
                name: "sehir_disi_etkinliklere_seyehay_engeli_var_mi",
            },
            { data: "sirketi_var_mi", name: "sirketi_var_mi" },
            {
                data: "urun_karsiligi_tanitim_yapiyor_mu",
                name: "urun_karsiligi_tanitim_yapiyor_mu",
            },
            { data: "created_at", name: "created_at" },
            { data: "updated_at", name: "updated_at" },
            {
                data: "islem",
                name: "islem",
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return "a";
                },
            },
        ],
        dom: "rtilp",
    });

    $("#cari_search").keyup(function () {
        cari_table.search($(this).val()).draw();
    });

    $("#saglayici_search_select2").select2({
        minimumInputLength: 2,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: saglayici_search,
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

    $("#cari_search_select2").select2({
        minimumInputLength: 2,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: cari_search,
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

    // set the dropzone container id
    const id = "#kt_dropzonejs_example_3";
    const dropzone = document.querySelector(id);

    // set the preview element template
    var previewNode = dropzone.querySelector(".dropzone-item");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

    var myDropzone = new Dropzone(id, {
        // Make the whole body a dropzone
        url: dropzone_istatistik_url, // Set the url for your upload script location
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (file, response) {
            var html =
                `<input type="hidden" value="` +
                response +
                `" name="dropzone_files[]" id="` +
                file.upload.uuid +
                `"/>`;

            $("#influencer_form").append(html);
        },
        parallelUploads: 20,
        maxFilesize: 50, // Max filesize in MB
        previewTemplate: previewTemplate,
        previewsContainer: id + " .dropzone-items", // Define the container to display the previews
        clickable: id + " .dropzone-select", // Define the element that should be used as click trigger to select files.
    });

    myDropzone.on("addedfile", function (file) {
        // Hookup the start button
        const dropzoneItems = dropzone.querySelectorAll(".dropzone-item");
        dropzoneItems.forEach((dropzoneItem) => {
            dropzoneItem.style.display = "";
        });
    });

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
        const progressBars = dropzone.querySelectorAll(".progress-bar");
        progressBars.forEach((progressBar) => {
            progressBar.style.width = progress + "%";
        });
    });

    myDropzone.on("sending", function (file) {
        // Show the total progress bar when upload starts
        const progressBars = dropzone.querySelectorAll(".progress-bar");
        progressBars.forEach((progressBar) => {
            progressBar.style.opacity = "1";
        });
    });

    // Hide the total progress bar when nothing"s uploading anymore
    myDropzone.on("complete", function (progress) {
        const progressBars = dropzone.querySelectorAll(".dz-complete");

        setTimeout(function () {
            progressBars.forEach((progressBar) => {
                progressBar.querySelector(".progress-bar").style.opacity = "0";
                progressBar.querySelector(".progress").style.opacity = "0";
            });
        }, 300);
    });

    myDropzone.on("removedfile", function (file) {
        $("#" + file.upload.uuid).remove();
    });
    $('#influencer_hesap_modal button[data-kt-stepper-action="submit"]').on(
        "click",
        function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: "https://crm.influencerajansi.com/influencer-hesap/ekle",
                data: $("#influencer_form").serialize(),
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/influencer-hesap";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        }
    );

    function isValidURL(str) {
        var pattern = new RegExp(
            "^(https?:\\/\\/)?" + // protocol
                "((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|" + // domain name
                "((\\d{1,3}\\.){3}\\d{1,3}))" + // OR ip (v4) address
                "(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*" + // port and path
                "(\\?[;&a-z\\d%_.~+=-]*)?" + // query string
                "(\\#[-a-z\\d_]*)?$",
            "i"
        ); // fragment locator
        return !!pattern.test(str);
    }

    var influencer_hesap_table = $("#influencer_hesap").DataTable({
        processing: true,
        serverSide: true,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: true,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "JSON",
            method: "POST",
            url: influencer_dataTableRoute,
        },
        pageLength: 10,
        lengthMenu: [
            [10, 20, 50, 100, 200, 500, 1000, -1],
            [
                "10 adet",
                "20 adet",
                "50 adet",
                "100 adet",
                "200 adet",
                "500 adet",
                "1000 adet",
                "Hepsini Göster",
            ],
        ],
        columns: [
            { data: "cari.ad", name: "cari.ad" },
            { data: "cari.soyad", name: "cari.soyad" },
            { data: "platform", name: "platform" },
            { data: "cari.cinsiyet", name: "cari.cinsiyet" },
            {
                data: "profil_linkleri",
                name: "profil_linkleri",
                render: function (data, type, row) {
                    if (isValidURL(row.profil_linkleri)) {
                        return (
                            `<a target="_blank" href="` +
                            row.profil_linkleri +
                            `">` +
                            row.profil_linkleri +
                            `</a>`
                        );
                    } else {
                        switch (row.platform) {
                            case "TIKTOK":
                                return (
                                    `<a target="_blank" href="https://www.tiktok.com/@` +
                                    row.profil_linkleri +
                                    `">https://www.tiktok.com/@` +
                                    row.profil_linkleri +
                                    `</a>`
                                );
                                break;
                            case "FACEBOOK":
                                return (
                                    `<a target="_blank" href="https://www.facebook.com/profile.php?id=` +
                                    row.profil_linkleri +
                                    `">https://www.facebook.com/profile.php?id=` +
                                    row.profil_linkleri +
                                    `</a>`
                                );
                            case "INSTAGRAM":
                                return (
                                    `<a target="_blank" href="https://www.instagram.com/` +
                                    row.profil_linkleri +
                                    `">https://www.instagram.com/` +
                                    row.profil_linkleri +
                                    `</a>`
                                );
                                break;
                            case "TWITTER":
                                return (
                                    `<a target="_blank" href="https://twitter.com/` +
                                    row.profil_linkleri +
                                    `">https://twitter.com/` +
                                    row.profil_linkleri +
                                    `</a>`
                                );
                                break;
                            default:
                                break;
                        }
                    }
                },
            },
            { data: "dil", name: "dil" },
            { data: "dogrulanmis_hesap", name: "dogrulanmis_hesap" },
            { data: "saglayici", name: "saglayici" },
            { data: "etiketler", name: "etiketler" },
            { data: "created_at", name: "created_at" },
            { data: "updated_at", name: "updated_at" },
        ],
        dom: "rtilp",
    });

    $("#influencer_hesap_search").keyup(function () {
        influencer_hesap_table.search($(this).val()).draw();
    });

    $('#instagram_takipci_2_haftalik_cron').on(
        "click",
        function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: "https://crm.influencerajansi.com/ayarlar/instagram/cron/2-haftalik",
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/ayarlar";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        }
    );

    $('#instagram_takipci_otomatik_cron').on(
        "click",
        function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: "https://crm.influencerajansi.com/ayarlar/instagram/cron/otomatik",
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/ayarlar";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        }
    );

    $('#rol_ekle_btn').on(
        "click",
        function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: "https://crm.influencerajansi.com/ayarlar/rol/ekle",
                data: $("#rol_form").serialize(),
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/ayarlar";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        }
    );

    $('#izin_ekle_btn').on(
        "click",
        function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: "https://crm.influencerajansi.com/ayarlar/izin/ekle",
                data: $("#izin_form").serialize(),
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/ayarlar";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        }
    );
    $('#atama_yap_btn').on(
        "click",
        function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: "https://crm.influencerajansi.com/ayarlar/rol/atama-yap",
                data: $("#atama_form").serialize(),
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/ayarlar";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        }
    );
    $('#kategori_ekle_btn').on(
        "click",
        function () {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: "https://crm.influencerajansi.com/kategori/ekle",
                data: $("#kategori_form").serialize(),
            }).done(function (response) {
                window.location.href = "https://crm.influencerajansi.com/ayarlar";
            }).fail(function (){
                Swal.fire({
                    text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "tamam",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        }
    );

    $("#rol_search_select2").select2({
        minimumInputLength: 2,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "https://crm.influencerajansi.com/ayarlar/rol/search",
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

    $("#izin_search_select2").select2({
        minimumInputLength: 2,
        ajax: {
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "https://crm.influencerajansi.com/ayarlar/izin/search",
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

    $('#instagram-otomatik-check').on('click' , function(){
        var data = $(this).val();
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
            },
            method: "POST",
            url: "https://crm.influencerajansi.com/ayarlar/instagram/cron/otomatik",
            data: {status:data},
        }).done(function (response) {
            window.location.href = "https://crm.influencerajansi.com/ayarlar";
        }).fail(function (){
            Swal.fire({
                text: "Bir sorun oluştu. Lütfen tekrar deneyin.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "tamam",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        });
    });
});
