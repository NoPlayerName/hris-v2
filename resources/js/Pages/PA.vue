<script>
import AppLayout from "@/Layouts/MainLayout.vue";

const breadcrumbs = {
    "SKI & PA": "#",
    "Performance Appraisal": "",
};

export default {
    layout: (h, page) =>
        h(
            AppLayout,
            { title: "Performance Appraisal", breadcrumbs: breadcrumbs },
            [page]
        ),
};
</script>

<script setup></script>

<template>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">PA Karyawan</h4>
                </div>
                <!-- end card header -->

                <div class="card-body">
                    <div class="col-auto mb-3">
                        <a
                            href="pa-new.html"
                            type="button"
                            class="btn btn-soft-info"
                            ><i
                                class="ri-add-circle-line align-middle me-1"
                            ></i>
                            New PA</a
                        >
                    </div>
                    <div class="live-preview">
                        <div class="table-responsive">
                            <table class="table align-top mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="w-25">Nama</th>
                                        <th scope="col" class="w-25">
                                            Tahun dan Periode
                                        </th>
                                        <th scope="col" class="w-25">
                                            Status PA
                                        </th>
                                        <!-- <th scope="col" class="w-25">History</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Anna Adame</td>
                                        <td>
                                            <a
                                                href="ski-new.html"
                                                class="fw-medium text-info"
                                                >Periode 1 (2020)</a
                                            >
                                        </td>
                                        <td>
                                            <h5>
                                                <span
                                                    class="badge badge-soft-success"
                                                    >FINAL</span
                                                >
                                            </h5>
                                            <!-- <h5><span class="badge badge-soft-success">FINAL</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-warning">DRAFT</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-secondary">SUBMITTED</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-danger">REJECTED</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span></h5> -->
                                        </td>
                                        <!-- <td><a href="ski-history.html" class="fw-medium fs-20"><i class=" las la-history"></i></a></td> -->
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">
                        Waiting To Be Approved
                    </h4>
                </div>
                <!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div class="table-responsive">
                            <table class="table align-top mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="w-25">Nama</th>
                                        <th scope="col" class="w-25">
                                            Tahun dan Periode
                                        </th>
                                        <th scope="col" class="w-25">
                                            Status PA
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="text-center text-muted fw-medium"
                                    >
                                        <td colspan="3">
                                            No data available in table
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">History PA</h4>
                </div>
                <!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div class="table-responsive">
                            <table class="table align-top mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="w-25">Nama</th>
                                        <th scope="col" class="w-25">
                                            Tahun dan Periode
                                        </th>
                                        <th scope="col" class="w-25">
                                            Status PA
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Anna Adame</td>
                                        <td>
                                            <a
                                                href="ski-new.html"
                                                class="fw-medium text-info"
                                                >Periode 1 (2020)</a
                                            >
                                        </td>
                                        <td>
                                            <h5>
                                                <span
                                                    class="badge badge-soft-secondary"
                                                    >SUBMITTED</span
                                                ><span class="fs-13 fw-medium">
                                                    on 19 Feb 2021 (20:00) By
                                                    Erica Kernan</span
                                                >
                                            </h5>
                                            <!-- <h5><span class="badge badge-soft-success">FINAL</span><span class="fs-13 fw-medium"> on 19 Feb 2021 (20:00) By Erica Kernan</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-warning">DRAFT</span><span class="fs-13 fw-medium"> on 19 Feb 2021 (20:00) By Erica Kernan</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-secondary">SUBMITTED</span><span class="fs-13 fw-medium"> on 19 Feb 2021 (20:00) By Erica Kernan</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-danger">REJECTED</span><span class="fs-13 fw-medium"> on 19 Feb 2021 (20:00) By Erica Kernan</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span><span class="fs-13 fw-medium"> on 19 Feb 2021 (20:00) By Erica Kernan</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span><span class="fs-13 fw-medium"> on 19 Feb 2021 (20:00) By Erica Kernan</span></h5> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anna Adame</td>
                                        <td>
                                            <a
                                                href="ski-new.html"
                                                class="fw-medium text-info"
                                                >Periode 1 (2020)</a
                                            >
                                        </td>
                                        <td>
                                            <h5>
                                                <span
                                                    class="badge badge-soft-info"
                                                    >APPROVED 1</span
                                                ><span class="fs-13 fw-medium">
                                                    on 02 Mar 2021 (10:18) By
                                                    Alexis Clarke</span
                                                >
                                            </h5>
                                            <!-- <h5><span class="badge badge-soft-success">FINAL</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (10:18) By Alexis Clarke</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-warning">DRAFT</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (10:18) By Alexis Clarke</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-secondary">SUBMITTED</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (10:18) By Alexis Clarke</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-danger">REJECTED</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (10:18) By Alexis Clarke</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (10:18) By Alexis Clarke</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (10:18) By Alexis Clarke</span></h5> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anna Adame</td>
                                        <td>
                                            <a
                                                href="ski-new.html"
                                                class="fw-medium text-info"
                                                >Periode 1 (2020)</a
                                            >
                                        </td>
                                        <td>
                                            <h5>
                                                <span
                                                    class="badge badge-soft-success"
                                                    >FINAL</span
                                                ><span class="fs-13 fw-medium">
                                                    on 02 Mar 2021 (20:38) By
                                                    Jack Gough</span
                                                >
                                            </h5>
                                            <!-- <h5><span class="badge badge-soft-success">FINAL</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (20:38)   By Jack Gough</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-warning">DRAFT</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (20:38)   By Jack Gough</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-secondary">SUBMITTED</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (20:38)   By Jack Gough</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-danger">REJECTED</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (20:38)   By Jack Gough</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-info">APPROVED 1</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (20:38)   By Jack Gough</span></h5> -->
                                            <!-- <h5><span class="badge badge-soft-info">APPROVED 2</span><span class="fs-13 fw-medium"> on 02 Mar 2021 (20:38)   By Jack Gough</span></h5> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!--end row-->
</template>
