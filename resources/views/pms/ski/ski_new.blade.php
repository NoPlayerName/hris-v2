<x-layout title="New Sasaran Kerja Individu" :breadcrumbs="['SKI & PA' => '#', 'Sasaran Kerja Individu' => '/pms/ski','New Sasaran Kerja Individu' => '',]">
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
                                            <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>TRANS7 - BOC - PRODUCTION DIRECTORATE - PROD. FACILITIES DIVISION - INFORMATION TECHNOLOGY DEPARTMENT - IT SUPPORT - SOFTWARE DEV. - SYSTEM ANALYST - SOFTWARE DEV.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12 col-lg-auto order-last order-lg-0">
                                <div class="row text text-white-50 text-center">
                                    <div class="col-lg-6 col-4">
                                        <div class="p-2">
                                            <h3 class="text-white mb-1"><span class="badge badge-gradient-dark">NIK. {{ auth()->user()->nik }}</span></h3>
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
                                <div class="d-flex sticky-nav" style=" z-index: auto; position: sticky; z-index: 999; background: rgb(21, 48, 89); top: 70px; padding: 12px 24px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#tugas" role="tab">
                                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Tugas & Tanggung Jawab Utama</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#ski" role="tab">
                                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Sasaran Kerja Individu</span>
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
                                            <div class="card-header align-items-center d-flex flex-md-row flex-column">
                                                <h4 class="card-title mb-0 flex-grow-1 mb-3 mb-md-0">Tugas dan Tanggung Jawab Utama</h4>
                                                <div>
                                                    <button type="button" class="btn btn-soft-info mb-1 addtugas" data-bs-toggle="modal" data-bs-target="#Modal"><i class="ri-add-circle-line align-middle me-1"></i> Add Tugas</button>
                                                    <button type="button" class="btn btn-soft-primary mb-1"><i class="ri-edit-circle-line align-middle me-1"></i> Edit Tugas</button>
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
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra pharetra scelerisque.</td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Donec luctus ullamcorper risus nec lacinia. Cras id eros ut justo laoreet feugiat. </td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Duis interdum ultricies suscipit. Fusce tincidunt lacus at justo interdum, a pharetra purus tincidunt. Curabitur a nulla in ante pulvinar faucibus nec sed ipsum.</td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Maecenas condimentum venenatis mattis. Proin ipsum mauris, cursus eu felis ut, varius pretium augue. Nulla et tristique leo, eget fringilla ligula. </td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Sed eu nunc id magna suscipit molestie eget id orci. Nunc dui quam, malesuada vitae mauris a, aliquam molestie augue. Aliquam in metus eu diam volutpat luctus ac sit amet lectus. </td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
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
                                    </div>
                                    <!--end col-->
                                </div>
                                {{-- ski --}}
                                <div class="row" id="ski">
                                    <div class="col-xxl-12">
                                        <div class="card" >
                                            <div class="card-header align-items-center d-flex flex-md-row flex-column">
                                                <h4 class="card-title mb-0 flex-grow-1 mb-3 mb-md-0">Sasaran Kerja Individu</h4>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-soft-info mb-1 addski" data-bs-toggle="modal" data-bs-target="#Modal"><i class="ri-add-circle-line align-middle me-1"></i> Add Sasaran Kerja</button>
                                                    <button type="button" class="btn btn-soft-primary mb-1"><i class="ri-edit-circle-line align-middle me-1"></i> Edit Sasaran Kerja</button>
                                                </div>
                                            </div><!-- end card header -->
                                                
                                            <div class="card-body">
                                                <p class="text-muted">Ketentuan bobot anda : <code>'0.4'</code></p>
                                                <div class="live-preview">
                                                    <div class="table-responsive">
                                                        <table id="sasaran-kerja-individu" class="table table-striped table-border dt-responsive w-100 align-middle">
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
                                                                <tr>
                                                                    <!-- <td>1</td> -->
                                                                    <td>Pelanggan</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim.</td>
                                                                    <td>0.04</td>
                                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td>08 - 2022</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim, et mollis dui. Aliquam fermentum.</td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td>2</td> -->
                                                                    <td>Proses Internal</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td>0.04</td>
                                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                                    <td>Lorem ipsum dolor sit amet</td>
                                                                    <td>08 - 2022</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim.</td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td>3</td> -->
                                                                    <td>Pelanggan</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim.</td>
                                                                    <td>0.04</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim, et mollis dui</td>
                                                                    <td>Lorem ipsum dolor sit amet</td>
                                                                    <td>08 - 2022</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim, et mollis dui.</td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td>4</td> -->
                                                                    <td>Proses Internal</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim, et mollis dui. Aliquam fermentum.</td>
                                                                    <td>0.04</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim, et mollis dui</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td>08 - 2022</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim.</td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <!-- <td>5</td> -->
                                                                    <td>Pelanggan</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim, et mollis dui. Aliquam fermentum, mi blandit egestas interdum.</td>
                                                                    <td>0.04</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim, et mollis dui</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td>08 - 2022</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dignissim enim, et mollis dui.</td>
                                                                    <td>
                                                                        <div class="hstack gap-3 fs-15">
                                                                            <a href="javascript:void(0);" class="link-primary"><i class="ri-settings-4-line"></i></a>
                                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
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
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="ModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
         <form action="" method="POST">
            <div class="col-lg">
                 <label for="basic-url" class="form-label">Your vanity URL</label>
                 <div class="input-group mb-3">
                     <select class="form-select" id="inputGroupSelect01">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                     </select>
                 </div>
                 <label for="basic-url" class="form-label">Your vanity URL</label>
                 <div class="input-group mb-3">
                    <textarea class="form-control" id="basic-url" aria-describedby="basic-addon3"></textarea>
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

