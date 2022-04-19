@extends('zTheme.AdminLTE.master')
@section('title', 'Halaman Struktur Jabatan')

@section('css')
<link rel="stylesheet" href="https://rawgit.com/bevacqua/dragula/master/dist/dragula.css">
<style>
/* .container {
  width: 400px;
  margin: 0 auto;
} */

.nested {
  padding: 4px 0;
  border: 1px dotted #bbb;
}

.item {
  padding: 8px;
}
</style>
@stop

@section('content')


<div class="row">
    <div class="col">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Struktur Jabatan</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="card-refresh"
                        data-source="widgets.html" data-source-selector="#card-refresh-content"
                        data-load-on-init="false">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="col">
                    <div class="container">
                        <div class="nested">
                          <div class="item">
                            Item 1
                            <div class="nested">
                              <div class="item">
                                Item 4
                                <div class="nested">
                                  <div class="item">
                                    Item 7
                                    <div class="nested"></div>
                                  </div>
                                  <div class="item">
                                    Item 8
                                    <div class="nested"></div>
                                  </div>
                                  <div class="item">
                                    Item 9
                                    <div class="nested"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                Item 5
                                <div class="nested"></div>
                              </div>
                              <div class="item">
                                Item 6
                                <div class="nested"></div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            Item 2
                            <div class="nested"></div>
                          </div>
                          <div class="item">
                            Item 3
                            <div class="nested"></div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script src="https://rawgit.com/bevacqua/dragula/master/dist/dragula.js"></script>
<script>
(function() {
  dragula([].slice.apply(document.querySelectorAll('.nested')));
})();
</script>
@stop
