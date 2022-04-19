@extends('zTheme.AdminLTE.master')
@section('title', 'Halaman Peta Jabatan')

@section('css')
@stop

@section('content')

    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Peta Jabatan</h3>
                    <div class="card-tools">
                        {{-- <button type="button" class="btn btn-tool" data-card-widget="card-refresh"
                            data-source="widgets.html" data-source-selector="#card-refresh-content"
                            data-load-on-init="false">
                            <i class="fas fa-sync-alt"></i>
                        </button> --}}
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                            <i class="fas fa-expand"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="bg-white">
                        <img src="https://www.unila.ac.id/wp-content/uploads/2013/01/Stuktur-Organisasi-Unila-2017.jpg"
                            alt="Peta Jabatan" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Struktur Jabatan</h3>
                    <div class="card-tools">
                        {{-- <button type="button" class="btn btn-tool" data-card-widget="card-refresh"
                            data-source="widgets.html" data-source-selector="#card-refresh-content"
                            data-load-on-init="false">
                            <i class="fas fa-sync-alt"></i>
                        </button> --}}
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                            <i class="fas fa-expand"></i>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="todo-list" data-widget="todo-list">
                        <li>
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo2" id="todoCheck2" checked> --}}
                            {{-- <label for="todoCheck2"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Kepala UPT TIK</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Struktural</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>
                        <li style="margin-left: 20px">
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo3" id="todoCheck3"> --}}
                            {{-- <label for="todoCheck3"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Wakil Manajemen Mutu</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Struktural</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>
                        <li style="margin-left: 20px">
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo4" id="todoCheck4"> --}}
                            {{-- <label for="todoCheck4"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Kasubag TU</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Struktural</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>
                        <li style="margin-left: 40px">
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo5" id="todoCheck5"> --}}
                            {{-- <label for="todoCheck5"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Kepala Divisi Pusat Data Dan Informasi</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Fungsional</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>
                        <li style="margin-left: 40px">
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo6" id="todoCheck6"> --}}
                            {{-- <label for="todoCheck6"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Kepala Divisi Pusat Infastruktur TIK</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Fungsional</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>

                        <li style="margin-left: 40px">
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo6" id="todoCheck6"> --}}
                            {{-- <label for="todoCheck6"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Kepala Divisi Pengembangan Sistem Informasi</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Fungsional</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>
                        <li style="margin-left: 40px">
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo6" id="todoCheck6"> --}}
                            {{-- <label for="todoCheck6"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Kepala Divisi Pusat Pelatihan Sistem Informasi</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Fungsional</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>
                        <li style="margin-left: 40px">
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo6" id="todoCheck6"> --}}
                            {{-- <label for="todoCheck6"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Kepala Divisi Sumber Daya Manusia</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Fungsional</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>
                        <li style="margin-left: 40px">
                            <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            {{-- <div class="icheck-primary d-inline ml-2"> --}}
                            {{-- <input type="checkbox" value="" name="todo6" id="todoCheck6"> --}}
                            {{-- <label for="todoCheck6"></label> --}}
                            {{-- </div> --}}
                            <span class="text">Kepala Divisi Pusat Infastruktur TIK</span>
                            <small class="badge badge-secondary"><i class="far fa-folder"></i> Fungsional</small>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 100%</small>
                            <small class="badge badge-danger"><i class="fas fa-lock-open"></i> Terbuka</small>
                            <div class="tools text-white">
                                <i class="fas fa-trash mr-2"></i>
                                <i class="fas fa-edit mr-2"></i>
                                <i class="fas fa-plus mr-2"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
