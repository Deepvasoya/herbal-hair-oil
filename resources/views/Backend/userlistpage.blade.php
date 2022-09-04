@if ($user->count() > 0 )
    @if(isset($user) && !empty($user))
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bolder text-muted">  
                        <th class="min-w-150px">NO</th>
                        <th class="min-w-150px">NAME</th>
                        <th class="min-w-150px">LEAD</th>
                        <th class="min-w-150px">ADDRESS & PINCODE</th>
                        <th class="min-w-150px">CONTACT NUMBER</th>
                        <th class="min-w-150px">DATE</th>
                        <th class="min-w-100px">ACTIONS</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    @php
                    $i = ($user->currentpage() - 1) * $user->perpage() + 1;
                    @endphp
                    @foreach ($user as $data)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <a class="text-dark fw-bolder text-hover-primary fs-6">{{ $i++ }}</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <a class="text-dark fw-bolder text-hover-primary fs-6">{{ $data->name }}</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <a class="text-dark fw-bolder text-hover-primary fs-6"><i class="fas fa-rupee-sign"></i> {{$data->amount }}</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $data->address }}({{ $data->pincode }})</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <a class="text-dark fw-bolder text-hover-primary fs-6">{{ $data->contact_number }}</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <a class="text-dark fw-bolder text-hover-primary fs-6">{{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start flex-shrink-0">
                                <a href="javascript:void(0)" data-url="{{ route('leads.delete', [$data->id]) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 mx-4 deletelead">
                                    <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                               
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
        {{-- Pagination --}}
        <div class="d-flex justify-content-end">
            {!! $user->links() !!}
        </div>
        @endif
@else
    <p class="text-center my-5">No lead found !</p>
@endif
