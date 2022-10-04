<x-layout title="Sasaran Kerja Individu" :breadcrumbs="['SKI & PA' => '#', 'Sasaran Kerja Individu' => '']">

    <div class="row">
        <div class="col">

            <div class="h-100">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">SKI Pribadi</h4>
                                <div class="flex-shrink-0">
                                    <a href="ski/ski-new" type="button" class="btn btn-soft-info"><i
                                            class="ri-add-circle-line align-middle me-1"></i> New SKI</a>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" class="w-50">Tahun dan Periode</th>
                                                    <th scope="col" class="w-25">Status SKI</th>
                                                    <th scope="col" class="">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="fs-13 fw-medium">Periode 1 (2021)</td>
                                                    <td>
                                                        <!-- <h5><span class="badge badge-soft-success">FINAL</span></h5> -->
                                                        <h5><span class="badge badge-soft-warning">DRAFT</span></h5>
                                                        <!-- <h5><span class="badge badge-soft-secondary">SUBMITTED</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-danger">REJECTED</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span></h5> -->
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-3 fs-18">
                                                            <a href="ski-new.html" target="_blank" type="button"
                                                                class="link-primary"><i class="ri-eye-line"></i></a>
                                                            <a data-bs-toggle="modal" data-bs-target=".history-ski"
                                                                type="button" class="link-primary"><i
                                                                    class="ri-history-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-13 fw-medium">Periode 1 (2020)</td>
                                                    <td>
                                                        <h5><span class="badge badge-soft-success">FINAL</span></h5>
                                                        <!-- <h5><span class="badge badge-soft-warning">DRAFT</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-secondary">SUBMITTED</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-danger">REJECTED</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span></h5> -->
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-3 fs-18">
                                                            <a href="ski-new.html" target="_blank" type="button"
                                                                class="link-primary"><i class="ri-eye-line"></i></a>
                                                            <a data-bs-toggle="modal" data-bs-target=".history-ski"
                                                                type="button" class="link-primary"><i
                                                                    class="ri-history-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                            </div><!-- end card-body -->

                        </div><!-- end card -->

                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Waiting To Be Approved</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" class="w-50">Nama</th>
                                                    <th scope="col" class="">Tahun dan Periode</th>
                                                    <th scope="col" class="">Status SKI</th>
                                                    <th scope="col" class="">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!-- <td class="fs-13 fw-medium">Gabino Arthur Rajendra Mahatma</td> -->
                                                    <td><img src="/assets/images/users/avatar-3.jpg" alt=""
                                                            class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);"
                                                            class="text-body fw-medium">Gabino Arthur Rajendra
                                                            Mahatma</a>
                                                    </td>
                                                    <td class="fs-13 fw-medium">Periode 1 (2020)</td>
                                                    <td>
                                                        <!-- <h5><span class="badge badge-soft-success">FINAL</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-warning">DRAFT</span></h5> -->
                                                        <h5><span class="badge badge-soft-secondary">SUBMITTED</span>
                                                        </h5>
                                                        <!-- <h5><span class="badge badge-soft-danger">REJECTED</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span></h5> -->
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-3 fs-18">
                                                            <a href="ski-new.html" target="_blank" type="button"
                                                                class="link-primary"><i class="ri-eye-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="/assets/images/users/avatar-8.jpg" alt=""
                                                            class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);"
                                                            class="text-body fw-medium">Adyatma Mahavir Bagaskara</a>
                                                    </td>
                                                    <td class="fs-13 fw-medium">Periode 1 (2020)</td>
                                                    <td>
                                                        <!-- <h5><span class="badge badge-soft-success">FINAL</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-warning">DRAFT</span></h5> -->
                                                        <h5><span class="badge badge-soft-secondary">SUBMITTED</span>
                                                        </h5>
                                                        <!-- <h5><span class="badge badge-soft-danger">REJECTED</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span></h5> -->
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-3 fs-18">
                                                            <a href="ski-new.html" target="_blank" type="button"
                                                                class="link-primary"><i class="ri-eye-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                            </div><!-- end card-body -->

                        </div><!-- end card -->

                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Waiting To Be Approved</h4>
                                <div class="flex-shrink-0">
                                    <!-- Default dropdown -->
                                    <div class="btn-group">
                                        <button class="btn btn-light dropdown-toggle" type="button"
                                            id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                            aria-expanded="false">
                                            Default dropdown
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                            <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 25px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                onclick="javascript:checkAll(this)">
                                                        </div>
                                                    </th>
                                                    <th scope="col" class="w-50">Nama</th>
                                                    <th scope="col" class="">Tahun dan Periode</th>
                                                    <th scope="col" class="">Status SKI</th>
                                                    <th scope="col" class="">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="inlineCheckbox2" value="option1">
                                                        </div>
                                                    </th>
                                                    <td><img src="/assets/images/users/avatar-3.jpg" alt=""
                                                            class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);"
                                                            class="text-body fw-medium">Gabino Arthur Rajendra
                                                            Mahatma</a>
                                                    </td>
                                                    <td class="fs-13 fw-medium">Periode 1 (2020)</td>
                                                    <td>
                                                        <!-- <h5><span class="badge badge-soft-success">FINAL</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-warning">DRAFT</span></h5> -->
                                                        <h5><span class="badge badge-soft-secondary">SUBMITTED</span>
                                                        </h5>
                                                        <!-- <h5><span class="badge badge-soft-danger">REJECTED</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span></h5> -->
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-3 fs-18">
                                                            <a href="ski-new.html" target="_blank" type="button"
                                                                class="btn btn-sm btn-soft-info"><i
                                                                    class="ri-eye-line align-middle me-1"></i> View</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="inlineCheckbox2" value="option1">
                                                        </div>
                                                    </th>
                                                    <td><img src="/assets/images/users/avatar-8.jpg" alt=""
                                                            class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);"
                                                            class="text-body fw-medium">Adyatma Mahavir Bagaskara</a>
                                                    </td>
                                                    <td class="fs-13 fw-medium">Periode 1 (2020)</td>
                                                    <td>
                                                        <!-- <h5><span class="badge badge-soft-success">FINAL</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-warning">DRAFT</span></h5> -->
                                                        <h5><span class="badge badge-soft-secondary">SUBMITTED</span>
                                                        </h5>
                                                        <!-- <h5><span class="badge badge-soft-danger">REJECTED</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span></h5> -->
                                                        <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span></h5> -->
                                                    </td>
                                                    <td>
                                                        <div class="hstack flex-wrap gap-2">
                                                            <a href="ski-new.html" target="_blank" type="button"
                                                                class="btn btn-sm btn-soft-info"><i
                                                                    class="ri-eye-line align-middle me-1"></i> View</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                            </div><!-- end card-body -->

                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!--end row-->


            </div> <!-- end .h-100-->

        </div> <!-- end col -->

    </div>

    <!--end row-->
</x-layout>
