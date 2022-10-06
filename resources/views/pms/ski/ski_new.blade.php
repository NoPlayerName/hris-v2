<x-layout title="New Sasaran Kerja Individu" :breadcrumbs="['SKI & PA' => '#', 'Sasaran Kerja Individu' => '/pms/ski', 'New Sasaran Kerja Individu' => '']">
    <!-- end page title -->
    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">

        </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
        <div class="row g-4">
            <div class="col-auto">
                <div class="avatar-xl">
                    <img src="{{ auth()->user()->avatar }}" alt="user-img" class="img-thumbnail rounded" />
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">{{ auth()->user()->name }}</h3>
                    <p class="text-white-75">IT Software Dev.</p>
                    <div class="hstack text-white-50 gap-1">
                        <div>
                            <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>TRANS7 - BOC -
                            PRODUCTION DIRECTORATE - PROD. FACILITIES DIVISION - INFORMATION TECHNOLOGY DEPARTMENT - IT
                            SUPPORT - SOFTWARE DEV. - SYSTEM ANALYST - SOFTWARE DEV.
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-12 col-lg-auto order-last order-lg-0">
                <div class="row text text-white-50 text-center">
                    <div class="col-lg-6 col-4">
                        <div class="p-2">
                            <h3 class="text-white mb-1"><span class="badge badge-gradient-dark">NIK.
                                    {{ auth()->user()->nik }}</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="d-flex sticky-nav"
                    style=" z-index: auto; position: sticky; z-index: 999; background: rgb(21, 48, 89); top: 70px; padding: 12px 24px;">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fs-14 tugas" href="#tugas" onclick="tugas()" role="tab">
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Tugas & Tanggung Jawab Utama</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14 ski" href="#ski" onclick="ski()" role="tab">
                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Sasaran Kerja Individu</span>
                            </a>
                        </li>
                    </ul>
                    <div class="flex-shrink-0">
                        <button class="btn btn-secondary"><i class="lab la-telegram-plane"></i> Submit</button>
                    </div>
                </div>

                <!-- Info -->
                <div class="mt-4 card">
                    <div class="card-body">
                        <h5 class="card-title">Penilai</h5>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                            <i class="ri-number-1"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="mb-1 fw-semibold">Nancy Martino</p>
                                        <h5><span class="badge badge-soft-success">APPROVED</span></h5>
                                        <!-- <h5><span class="badge badge-soft-danger">NOT APPROVED</span></h5> -->
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12 col-md-4">
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                            <i class="ri-number-2"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="mb-1 fw-semibold">Donald Palmer</p>
                                        <!-- <h5><span class="badge badge-soft-success">APPROVED</span></h5> -->
                                        <h5><span class="badge badge-soft-danger">NOT APPROVED</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12 col-md-4">
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                            <i class="ri-number-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="mb-1 fw-semibold">Joseph Parker</p>
                                        <!-- <h5><span class="badge badge-soft-success">APPROVED</span></h5> -->
                                        <h5><span class="badge badge-soft-danger">NOT APPROVED</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div><!-- end card -->

                {{-- ski tugas --}}
                <div class="row " id="tugas">
                    <div class="col-xxl-12">
                        <div class="card">
                            @if (session()->has('successTugas'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('successTugas') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="card-header align-items-center d-flex flex-md-row flex-column">
                                <h4 class="card-title mb-0 flex-grow-1 mb-3 mb-md-0">Tugas dan Tanggung Jawab Utama</h4>
                                <div>
                                    <button type="button" class="btn btn-soft-info mb-1 addtugas"
                                        data-bs-toggle="modal" data-bs-target="#Modal"><i
                                            class="ri-add-circle-line align-middle me-1"></i> Add Tugas</button>
                                    <button type="button" class="btn btn-soft-primary mb-1"><i
                                            class="ri-edit-circle-line align-middle me-1"></i> Edit Tugas</button>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table align-top mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col" class="w-100">Job Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tugas as $tg)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $tg->tugas }}</td>
                                                        <td>
                                                            <div class="hstack gap-3 fs-15">
                                                                <a href="javascript:void(0);" class="link-primary"><i
                                                                        class="ri-settings-4-line"></i></a>
                                                                <form
                                                                    action="ski-new/tugas/post/{{ $tg->id_ref_ski_tugas }}"
                                                                    method="POST" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="btn link-danger"
                                                                        onclick="return confirm('Yakin ingin menghapus?')"><i
                                                                            class="ri-delete-bin-5-line"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                            </div><!-- end card-body -->

                        </div><!-- end card -->
                    </div>
                    <!--end col-->
                </div>
                {{-- ski --}}
                <div class="row" id="ski">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex flex-md-row flex-column">
                                <h4 class="card-title mb-0 flex-grow-1 mb-3 mb-md-0">Sasaran Kerja Individu</h4>
                                <div class="text-center">
                                    <button type="button" class="btn btn-soft-info mb-1 addski"
                                        data-bs-toggle="modal" data-bs-target="#Modal"><i
                                            class="ri-add-circle-line align-middle me-1"></i> Add Sasaran
                                        Kerja</button>
                                    <button type="button" class="btn btn-soft-primary mb-1"><i
                                            class="ri-edit-circle-line align-middle me-1"></i> Edit Sasaran
                                        Kerja</button>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <p class="text-muted">Ketentuan bobot anda : <code>'0.4'</code></p>
                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table id="sasaran-kerja-individu"
                                            class="table table-striped table-border dt-responsive w-100 align-middle">
                                            <thead>
                                                <tr>
                                                    <!-- <th scope="col">No</th> -->
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Sasaran Kerja</th>
                                                    <th scope="col">Bobot</th>
                                                    <th scope="col">Kriteria Pengukuran</th>
                                                    <th scope="col">Target</th>
                                                    <th scope="col">Batas Waktu</th>
                                                    <th scope="col">Rencana Tindakan</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($SasaranKerjaIndividu as $SkiSki)
                                                    <tr>
                                                        <!-- <td>1</td> -->
                                                        <td>{{ $SkiSki->SkiTemplate->category }}</td>
                                                        <td>{{ $SkiSki->sasaran_kerja }}</td>
                                                        <td>{{ $SkiSki->bobot }}</td>
                                                        <td>{{ $SkiSki->kriteria_pengukuran }}</td>
                                                        <td>{{ $SkiSki->target }}
                                                        </td>
                                                        <td>{{ date('d-m-Y', strtotime($SkiSki->batas_waktu)) }}</td>
                                                        <td>{{ $SkiSki->rencana_tindakan }}</td>
                                                        <td>
                                                            <div class="hstack gap-3 fs-15">
                                                                <a href="javascript:void(0);" class="link-primary"><i
                                                                        class="ri-settings-4-line"></i></a>
                                                                <form
                                                                    action="ski-new/sk-individu/post/{{ $SkiSki->id_ref_ski_sk }}"
                                                                    method="POST" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="btn link-danger"
                                                                        onclick="return confirm('Yakin ingin menghapus?')"><i
                                                                            class="ri-delete-bin-5-line"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot class="justify-content-end">
                                                <tr>
                                                    <td></td>
                                                    <th>Jumlah Bobot</th>
                                                    <th>0.4</th>
                                                    <td colspan="5"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <th>Sisa Bobot </th>
                                                    <th>0</th>
                                                    <td colspan="5"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <th>Maks. Bobot</th>
                                                    <th>0.4</th>
                                                    <td colspan="5"></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                            </div><!-- end card-body -->

                        </div><!-- end card -->
                    </div>
                    <!--end col-->
                </div>

            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="" class="formModal" method="POST">
                        @csrf
                        <div class="col-lg">
                            <div class=" mb-3 form1">
                                <label for="basic-url" class="form-label label1">Your vanity URL</label>
                                <select class="form-select input1" id="inputGroupSelect01" name="">
                                    <option selected>Choose...</option>
                                    @foreach ($kelompok as $kp)
                                        <option value="{{ $kp->id_kelompok_sk }}">{{ $kp->kelompok }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 form2">
                                <label for="basic-url" class="form-label label2">Your vanity URL</label>
                                <textarea class="form-control input2" name="" id="basic-url" aria-describedby="basic-addon3"></textarea>
                            </div>

                            <div class=" mb-3 form3">
                                <label for="basic-url" class="form-label label3">Your vanity URL</label>
                                <input type="text" class="form-control input3" name="" id="basic-url"
                                    aria-describedby="basic-addon3">
                            </div>

                            <div class=" mb-3 form4">
                                <label for="basic-url" class="form-label label4">Your vanity URL</label>
                                <input type="text" class="form-control input4" name="" id="basic-url"
                                    aria-describedby="basic-addon3">
                            </div>

                            <div class=" mb-3 form5">
                                <label for="basic-url" class="form-label label5">Your vanity URL</label>
                                <input type="text" class="form-control input5" name="" id="basic-url"
                                    aria-describedby="basic-addon3">
                            </div>

                            <div class=" mb-3 form6">
                                <label for="basic-url" class="form-label label6">Your vanity URL</label>
                                <input type="date" class="form-control input6" name="" id="basic-url"
                                    aria-describedby="basic-addon3">
                            </div>

                            <div class=" mb-3 form7">
                                <label for="basic-url" class="form-label label7">Your vanity URL</label>
                                <textarea class="form-control input7" name="" id="basic-url" aria-describedby="basic-addon3"></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
