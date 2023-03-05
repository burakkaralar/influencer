<x-default-layout>
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-md-5 mb-xl-10">
            @include('partials/widgets/tables/_cari')
        </div>
    <!--end::Row-->
    @section('javascript')
        <script src="{{ asset('assets/js/custom/pages/index/index.js') }}"></script>
    @endsection
</x-default-layout>
