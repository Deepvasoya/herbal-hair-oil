@extends('layouts.Backend.dashboard')
@section('content')
    {{-- <div class="content d-flex flex-column flex-column-fluid my-2" id="kt_content"> --}}
    <div class="d-flex flex-column flex-column-fluid my-2" id="kt_content">

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{ Session::get('error') }}
                    </div>
                @endif
                <!--begin::Row-->
                <div class="g-5 gx-xxl-8">
                    <!--begin::Calendar Widget 1-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Leads</span>
                            </h3>
                        </div>
                        <!--begin::Card header-->
                        {{-- <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" id="search" name="search" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search by name or email." />
                                <input type="hidden" name="hidden_page" id="hidden_page" value="1" />     
                            </div>  
                            <!--end::Search-->
                        </div>
                    </div> --}}
                        <div class="card-header border-0 pt-6">
                            <form class="form" id="filter" autocomplete="off">
                        <div class="row g-9 mb-7">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2">Date</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                               
                                <input type="text" name="request_date" value="{{ isset($data['request_date'])?$data['request_date']:'' }}" class="form-control form-control-solid" id="request_date" placeholder="Select date" readonly/>
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <button type="submit" class="btn filterbtn btn-primary fw-bold my-8">Filter</button>
                            </div>
                            <div class="col-md-2 fv-row">
                                <a href="{{route('admin.leads')}}" class="resetbtn btn btn-light btn-active-light-primary my-8" data-kt-menu-dismiss="true" value="Reset" onClick="window.location.reload()" data-kt-customer-table-filter="reset">Reset</a>
                            </div>
                            <!--end::Col-->
                        </div>
                    </form>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            @csrf
                            <div class="table-responsive" id="table_data">
                                <!--begin::Table-->
                                @include('Backend.userlistpage')
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                    </div>
                    <!--end::Calendar Widget 1-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
    $('#request_date').datepicker({
        todayBtn: "linked",
        endDate:new Date(),
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: "dd-mm-yyyy"
   });
    </script>
@endpush
