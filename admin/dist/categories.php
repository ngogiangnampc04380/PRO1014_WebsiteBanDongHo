<?php include('./view/header.php') ?>


<div id="kt_content_container" class="container-xxl">
    <div class="row gy-5 g-xl-8">
        <div class="col-xl-12">
            <!--begin::Tables Widget 9-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Danh Mục</span>

                    </h3>
                    <div class="card-toolbar" data-bs-placement="top" data-bs-trigger="hover">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary">

                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            Thêm Danh Mục</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted">
                                    <th class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
                                        </div>
                                    </th>
                                    <th class="min-w-150px">Id</th>
                                    <th class="min-w-140px">Tên Danh Mục</th>

                                    <th class="min-w-100px text-end">Hành Động</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <h6> #1</h6>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h6> Rolex</h6>
                                        </div>
                                    </td>

                                    <td>

                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                                <span class="svg-icon svg-icon-3">
                                                    <i class="bi bi-screwdriver"></i>
                                                </span>
                                                 </a>
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">

                                                        <span class="svg-icon svg-icon-3">
                                                            <i class="bi bi-trash2-fill"></i>
                                                        </span>

                                                    </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 9-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->

    <!--end::Row-->
    <!--begin::Row-->

    <!--end::Row-->
</div>


<?php include('./view/footer.php') ?>