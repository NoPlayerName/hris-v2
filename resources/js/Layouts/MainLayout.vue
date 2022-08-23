<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AppTopbar from "@/Components/Topbar.vue";
import AppSidebar from "@/Components/Sidebar.vue";
import AppBreadcrumbs from "@/Components/Breadcrumbs.vue";
import { onMounted } from "vue";

defineProps({
    title: {
        type: String,
        default: "Dashboard",
    },
    breadcrumbs: {
        type: Object,
        default() {
            return {};
        },
    },
});

onMounted(() => {
    // let externalScript = document.createElement('script')
    // externalScript.setAttribute('src', '/assets/js/app.js')
    // document.head.appendChild(externalScript)
});
</script>

<template>
    <Head :title="title" />
    <!-- Begin page -->
    <div id="layout-wrapper">
        <AppTopbar></AppTopbar>
        <!-- ========== App Menu ========== -->
        <AppSidebar></AppSidebar>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between"
                            >
                                <h4 class="mb-sm-0">{{ title }}</h4>
                                <div class="page-title-right">
                                    <AppBreadcrumbs
                                        :data="breadcrumbs"
                                    ></AppBreadcrumbs>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col">
                            <div class="h-100">
                                <slot />
                            </div>
                            <!-- end .h-100-->
                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">© IT Department.</div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                PT. Duta Visual Nusantara Tivi Tujuh
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <button
        id="back-to-top"
        onclick="topFunction()"
        class="btn btn-danger btn-icon"
    >
        <i class="ri-arrow-up-line"></i>
    </button>
</template>
