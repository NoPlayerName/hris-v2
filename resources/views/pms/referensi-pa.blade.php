<x-layout title="Referensi PA" :breadcrumbs="['SKI & PA' => '#', 'Referensi PA' => '']">
    <div x-data="referensi_pa" @ref-load-data.window="loadData">
        <div class="email-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
            <div class="email-menu-sidebar col-12">
                <div class="p-4 d-flex flex-column h-100">
                    <div class="mx-n4 px-4 email-menu-sidebar-scroll" data-simplebar>
                        <h5 class="fs-14 text-uppercase fw-bold mb-3 border-bottom border-bottom-dashed pb-2">ASPEK</h5>
                        <div class="mt-2 vstack">
                            @foreach (App\Enums\ManajerialLevel::cases() as $ml)
                                <a @click.prevent="changeManajerialLevel"
                                    :class="{{ $ml->value }} == manajerialLevel ? 'active' : ''"
                                    class=" d-flex align-items-center level-btn" role="button"
                                    data-level="{{ $ml->value }}"
                                    href="{{ route('pms.referensi-pa.index', ['level' => $ml->value]) }}">

                                    <div class="flex-grow-1 chat-user-box overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-0 chatlist-user-name">
                                            Level {{ $ml->value }}
                                        </h5>
                                        <small class="fs-13 text-muted text-truncate mb-0">{{ $ml->text() }}</small>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- end email-menu-sidebar -->

            <div class="email-content position-relative">
                <div class="p-4 pb-0">
                    <div class="row">
                        <div class="col-12 mb-3 d-lg-none d-block">
                            <select class="form-select fw-bold">
                                <option value="1">Level 1 - Division Head</option>
                                <option value="2" selected>Level 2 - Department Head</option>
                                <option value="3">Level 3 - Section Head</option>
                                <option value="4">Level 4 - Staff/Officer</option>
                            </select>
                        </div>
                    </div>

                    <div class="border-bottom border-bottom-dashed">
                        <div :class="!isReferensiPALoading ? 'd-none' : ''" class="card-preloader pe-auto">
                            <div class="card-status">
                                <div class="spinner-border text-success">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar data-simplebar-auto-hide="false" style="max-height: 70vh;" class="">
                            <template x-for="aspek in listAspek">
                                <div>
                                    <div class="d-flex pt-2 pb-2 sticky-top bg-white">
                                        <div class="flex-grow-1 hstack">
                                            <h5 class="fs-14 text-uppercase fw-bold fw-bold text-primary"
                                                x-text="aspek.name"></h5>
                                            <button
                                                @click="$dispatch('modal-load-data', {manajerial_level: manajerialLevel, aspek: aspek.value})"
                                                class="btn btn-primary btn-sm ms-auto" type="button"
                                                data-bs-toggle="modal" data-bs-target=".modal-form"><i
                                                    data-feather="plus-circle" class="icon-xs me-1 icon-dual-light"></i>
                                                Add New</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="live-preview" x-id="['default-accordion-example']">
                                            <div class="accordion" :id="$id('default-accordion-example', aspek.value)">
                                                <template x-for="refPA in getReferensi(aspek.value)">
                                                    <div class="accordion-item" x-id="['collapse-accordion']">
                                                        <h2 class="accordion-header" :id="$id('accordion-item')">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                :data-bs-target="`#${$id('collapse-accordion', refPA.id_ref_pa)}`"
                                                                aria-expanded="true"
                                                                :aria-controls="$id('collapse-accordion')"
                                                                x-text="`${refPA.seq}. ${refPA.utama}`">

                                                            </button>
                                                        </h2>
                                                        <div :id="$id('collapse-accordion', refPA.id_ref_pa)"
                                                            class="accordion-collapse collapse"
                                                            :data-bs-parent="`#${$id('default-accordion-example', aspek.value)}`">
                                                            <div class="accordion-body">
                                                                <div class="mt-2">
                                                                    <span
                                                                        class="fs-12 badge badge-soft-success badge-border mb-2">Pertimbangan
                                                                        :</span>
                                                                    <ul class="list-unstyled">
                                                                        <template
                                                                            x-for="pertimbangan in refPA.pertimbangan">
                                                                            <li class="py-1"><i
                                                                                    class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                                <span
                                                                                    x-text="pertimbangan.pertimbangan"></span>
                                                                            </li>
                                                                        </template>
                                                                    </ul>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <span
                                                                        class="fs-12 badge badge-soft-secondary badge-border mb-2">Keterangan
                                                                        :</span>
                                                                    <p x-text="refPA.keterangan"></p>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <span
                                                                            class="fs-12 badge badge-soft-danger badge-border">Bobot
                                                                            : <span x-text="refPA.bobot"></span></span>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <button
                                                                            @click="$dispatch('modal-load-data', refPA)"
                                                                            class="btn btn-ghost-info waves-effect waves-light"
                                                                            type="button" data-bs-toggle="modal"
                                                                            data-bs-target=".modal-form"><i
                                                                                class="ri-pencil-fill me-1 align-bottom"></i>
                                                                            Edit</button>
                                                                        <button
                                                                            @click="$dispatch('remove-load-data', refPA)"
                                                                            class="btn btn-ghost-danger waves-effect waves-light"
                                                                            type="button" data-bs-toggle="modal"
                                                                            data-bs-target=".modal-delete"><i
                                                                                class="ri-delete-bin-line me-1 align-bottom"></i>
                                                                            Delete</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL FORM-->
    <div x-data="referensi_pa_modal_form" @modal-load-data.window="loadData" class="modal fade modal-form" tabindex="-1"
        aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true" data-bs-keyboard="false"
        data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form @submit.prevent="save">
                    <div :class="!isSaving ? 'd-none' : ''" class="card-preloader pe-auto">
                        <div class="card-status">
                            <div class="spinner-border text-success">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-header p-3 bg-light">
                        <h5 class="modal-title" id="myLargeModalLabel">Referensi PA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="row gy-4 mb-3">
                                <div x-show="false" class="col-md-6">
                                    <label class="form-label">Level <span
                                            x-text="form.manajerial_level"></span></label>
                                    <select x-ref="choice_manajerial_level" data-model="form.manajerial_level"
                                        class="form-control form-control-sm">
                                        <option value="">Default Select</option>
                                        <option value="1">Level 1 - Division Head</option>
                                        <option value="2">Level 2 - Department Head</option>
                                        <option value="3">Level 3 - Section Head</option>
                                        <option value="4">Level 4 - Staff/Officer</option>
                                    </select>
                                </div>
                                <div x-show="false" class="col-md-6">
                                    <label class="form-label">Referensi PA</label>
                                    <select x-ref="choice_aspek" data-model="form.aspek"
                                        class="form-control form-control-sm">
                                        <option value="">Default Select</option>
                                        <option value="teknis">Aspek Teknis</option>
                                        <option value="manajerial">Aspek Manajerial</option>
                                        <option value="perilaku">Aspek Perilaku</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Utama</label>
                                <textarea class="form-control" rows="1" placeholder="Utama" required="" x-model="form.utama"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <textarea class="form-control" rows="3" placeholder="Keterangan" required="" x-model="form.keterangan"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Bobot</label>
                                <input type="number" step="0.01" max="1.00" min="0.01"
                                    class="form-control" placeholder="0" required="" x-model="form.bobot">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pertimbangan</label>
                                <template x-if="form.pertimbangan.length > 1">
                                    <template x-for="i in form.pertimbangan.length-1">
                                        <div class="row mb-3">
                                            <div class="col-md">
                                                <textarea required class="form-control" rows="1" :placeholder="i + '. Pertimbangan'"
                                                    x-model="form.pertimbangan[i-1].pertimbangan"></textarea>
                                            </div>
                                            <div class="col-md-1 d-grid">
                                                <button @click="delPertimbangan(i-1)" type="button"
                                                    class="btn btn-sm btn-danger"><i
                                                        class="ri-subtract-line align-middle"></i></button>
                                            </div>
                                        </div>
                                    </template>
                                </template>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <textarea required class="form-control" rows="1" :placeholder="form.pertimbangan.length + '. Pertimbangan'"
                                            x-model="form.pertimbangan[form.pertimbangan.length-1].pertimbangan"></textarea>
                                    </div>
                                    <div class="col-md-1 d-grid">
                                        <button @click="addPertimbangan" type="button"
                                            class="btn btn-sm btn-primary"><i
                                                class="ri-add-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"
                            :disabled="isSaving">Cancel</button>
                        <button type="submit" class="btn btn-success" :disabled="isSaving">Submit</button>
                    </div>
            </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div>

    <!-- removeProjectModal -->
    <div x-data="referensi_pa_modal_delete" @remove-load-data.window="loadData" class="modal modal-delete fade"
        data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button x-show="!isDeleting" type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close" id="close-modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <p class="text-muted mx-4 mb-0">Ingin menghapus referensi PA (<span
                                    x-text="data.utama"></span>)?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal"
                            :disabled="isDeleting">Batal</button>
                        <button @click="deleteData" type="button" class="btn w-sm btn-danger btn-load"
                            id="remove-project" :disabled="isDeleting">
                            <span class="d-flex align-items-center">
                                <span x-show="isDeleting" class="spinner-border flex-shrink-0 me-2" role="status">
                                    <span class="visually-hidden">Menghapus...</span>
                                </span>
                                <span class="flex-grow-1" x-text="isDeleting ? 'Menghapus...' : 'Ya'"></span>
                            </span>
                        </button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('referensi_pa', () => ({
                    manajerialLevel: {{ request('level') }},
                    listAspek: @json(App\Enums\PAAspek::all()),

                    referensiPA: [],
                    isReferensiPALoading: true,

                    init() {
                        let _this = this;
                        this.loadData();

                        let refreshState = function(event) {
                            if (!event.state) return;
                            _this.manajerialLevel = event.state.level;
                            _this.loadData();
                        }

                        window.addEventListener('popstate', refreshState);
                        window.addEventListener('pageshow', refreshState);

                    },

                    loadData() {
                        let _this = this;

                        _this.isReferensiPALoading = true;
                        axios.get('@route('pms.referensi-pa.index')', {
                            params: {
                                level: _this.manajerialLevel
                            }
                        }).then((res) => {
                            _this.referensiPA = res.data.data;
                            _this.isReferensiPALoading = false;
                        })
                    },

                    changeManajerialLevel(event) {
                        let target = $(event.target.closest("a"))
                        let href = target.attr('href')
                        let level = target.data('level')
                        this.manajerialLevel = level
                        window.history.pushState({
                            href: href,
                            level: level,
                        }, '', href);
                        this.loadData()
                    },

                    getReferensi(key) {
                        return _(this.referensiPA).filter(x => x.aspek == key).orderBy('seq').value()
                    },
                }))

                Alpine.data('referensi_pa_modal_form', () => ({
                    isEdit: false,
                    isSaving: false,

                    form: {
                        id_ref_pa: null,
                        aspek: null,
                        manajerial_level: null,
                        utama: '',
                        keterangan: '',
                        bobot: 0,
                        pertimbangan: [{
                            pertimbangan: '',
                        }],
                    },

                    init() {
                        let _this = this;

                        this.initChoice(_this.$refs.choice_manajerial_level)
                        this.initChoice(_this.$refs.choice_aspek)
                    },

                    initChoice(ref) {
                        let _this = this;
                        let elem = $(ref);
                        let model = elem.data('model');
                        let choice = new Choices(elem[0]);
                        choice.passedElement.element.addEventListener(
                            'change',
                            function(event) {
                                // _this.form.manajerial_level = event.detail.value
                                _.set(this, model, event.detail.value);
                                // _.get(this, model);
                            },
                            false,
                        );

                        _this.$watch(model, (value) => {
                            choice.setChoiceByValue(String(value));
                        });

                        choice.setChoiceByValue(String(_.get(_this, model)));
                    },

                    initCreateForm() {
                        let _this = this;

                    },

                    loadData(event) {
                        this.isEdit = event.detail.id_ref_pa || null != null;

                        this.form = {
                            id_ref_pa: event.detail.id_ref_pa,
                            aspek: event.detail.aspek,
                            manajerial_level: event.detail.manajerial_level,
                            utama: event.detail.utama,
                            keterangan: event.detail.keterangan,
                            bobot: event.detail.bobot,
                            pertimbangan: (event.detail.pertimbangan || []).length > 0 ? event.detail
                                .pertimbangan : [{
                                    pertimbangan: ''
                                }],
                        };
                    },

                    addPertimbangan() {
                        this.form.pertimbangan.push({
                            pertimbangan: '',
                        });
                    },

                    delPertimbangan(index) {
                        _.pullAt(this.form.pertimbangan, index);
                    },

                    save() {
                        let _this = this;

                        _this.isSaving = true;
                        axios({
                            method: _this.isEdit ? 'put' : 'post',
                            url: '@route('pms.referensi-pa.store')' + (_this.isEdit ? `/${_this.form.id_ref_pa}` :
                                ''),
                            data: _this.form
                        }).then(res => {
                            _this.afterSave(res);
                        }).catch(function(error) {
                            _this.isSaving = false;

                            Toastify({
                                text: "Gagal menyimpan referensi PA!",
                                duration: 5000,
                                close: false,
                                gravity: "top",
                                position: "center",
                                stopOnFocus: true,
                                className: "bg-danger",
                            }).showToast();
                        });
                    },

                    afterSave(res) {
                        this.isSaving = false;
                        if (!res.data.success) return;
                        $('.modal-form').modal('hide');
                        setTimeout(() => {
                            this.$dispatch('ref-load-data');
                        }, 300);
                        Toastify({
                            text: "Referensi PA berhasil disimpan!",
                            duration: 5000,
                            close: false,
                            gravity: "top",
                            position: "center",
                            stopOnFocus: true,
                            className: "bg-success",
                        }).showToast();
                    }
                }))

                Alpine.data('referensi_pa_modal_delete', () => ({
                    isDeleting: false,
                    data: {},

                    loadData(event) {
                        this.data = event.detail;
                    },

                    deleteData() {
                        let _this = this;

                        _this.isDeleting = true;
                        axios({
                            method: 'delete',
                            url: '@route('pms.referensi-pa.store')' + `/${_this.data.id_ref_pa}`,
                        }).then(res => {
                            _this.afterDelete(res);
                        }).catch(function(error) {
                            _this.isSaving = false;

                            Toastify({
                                text: "Gagal menghapus referensi PA!",
                                duration: 5000,
                                close: false,
                                gravity: "top",
                                position: "center",
                                stopOnFocus: true,
                                className: "bg-danger",
                            }).showToast();
                        });
                    },

                    afterDelete(res) {
                        this.isDeleting = false;
                        if (!res.data.success) return;
                        $('.modal-delete').modal('hide');
                        setTimeout(() => {
                            this.$dispatch('ref-load-data');
                        }, 300);
                        Toastify({
                            text: "Referensi PA berhasil dihapus!",
                            duration: 5000,
                            close: false,
                            gravity: "top",
                            position: "center",
                            stopOnFocus: true,
                            className: "bg-success",
                        }).showToast();
                    }
                }))
            })
        </script>
    @endpush
</x-layout>
