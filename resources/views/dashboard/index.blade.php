@extends('layout.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')

<div class="block-header">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <h3>DASHBOARD</h3>
            <h1>Hi , <b>{{ Auth::user()->name }}</b></h1>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-2">
        <label for="bank" class="control-label">Bulan</label>
        <input type="month" class="form-control" @if (session('bulan'))
            value="{{ session('tahun') }}-{{ session('bulan') }}" @endif id="bulan">
    </div>
    <div class="col-lg-2" style="padding-top: 30px;">
        <button type="button" onclick="filter()" class="btn btn-success"><i class="fa fa-filter"></i>
            Filter</button>
        <button type="button" onclick="hapus()" class="btn btn-danger"><i class="fa fa-trash"></i>
            Clear</button>
    </div>
    <div class="col-12">
        <div class="text-light">
            <div class="card-body">
                <div class="row" style="min-height: 250px; width:100%; align-items: center;
                        justify-content: center; margin:0 -20px 0 -20px;">
                    <div class="card theme-bg col-xl-4 col-sm-4 mt-2 mb-3 py-4"
                        style="text-align: left;font-size: 2rem; justify-content:center; 
                        align-item:center; padding:2rem; background: linear-gradient(120deg, rgb(209, 8, 125) 0%, rgb(179, 2, 214) 50%, rgb(19, 7, 179) 100%);">
                        <div class="text-content mb-4">
                            <h3 class="text-title" style="font-weight:600;">Jumlah Barang Masuk</h3>
                            <h1 class="text-title" style="font-size:5rem; font-weight:700;">{{ $qtymasuk }}</h1>
                            <hr>
                            @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Divisi Administrasi|Karyawan Divisi Gudang')
                            <h2 class="text-title" style="font-weight:600;">Rp. {{ number_format($hargamasuk,0,',','.')
                                }}</h2>
                            @endhasanyrole
                        </div>
                    </div>
                    <div class="card theme-bg col-xl-4 col-sm-4 mt-2 mb-3 py-4"
                        style="align-item:center; padding:2rem; background: linear-gradient(120deg, rgb(19, 7, 179) 0%, rgb(3, 105, 153) 50%, rgb(1, 177, 147) 100%);"">
                            <div class=" text-content mb-4">
                        <h3 class="text-title" style="font-weight:600;">Jumlah Barang Keluar</h3>
                        <h1 class="text-title" style="font-size:5rem; font-weight:700;">{{ $qtykeluar }}</h1>
                        <hr>
                        @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Divisi Administrasi|Karyawan Divisi Gudang')
                        <h2 class="text-title" style="font-weight:600;">Rp. {{ number_format($hargakeluar,0,',','.') }}
                        </h2>
                        @endhasanyrole
                    </div>
                </div>
                <div class="card theme-bg col-xl-4 col-sm-4 mt-2 mb-3 py-4"
                    style="text-align: left;font-size: 2rem; justify-content:center; align-item:center; padding:2rem; background: linear-gradient(120deg, rgba(1, 177, 147) 0%, rgb(13, 224, 77), rgb(127, 218, 24) 100%);">
                    <div class="text-content mb-4">
                        <h3 class="text-title" style="font-weight:600;">Jumlah Persediaan Saat Ini</h3>
                        <h1 class="text-title" style="font-size:5rem; font-weight:700;">{{ $qtypersediaan }}</h1>
                        <hr>
                        @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Divisi Administrasi|Karyawan Divisi Gudang')
                        <h2 class="text-title" style="font-weight:600;">Rp. {{ number_format($hargapersediaan,0,',','.')
                            }}</h2>
                        @endhasanyrole
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">
@stop

@section('vendor-script')
<script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
@stop

@section('page-script')
<script>
    function filter() {
        $.ajax({
                  type: "POST",
                  url: `/api/set-filter`,
                  data: {
                    _token : "{{ csrf_token() }}",
                      bulan : $('#bulan').val(),
                  },
                  dataType: 'json',
                  success: function(response) {
                      location.reload();
                    // console.log(response);
                  },
                  failure: function(response) {
                      alert('Gagal upload');
                        console.log(response);

                  },
                  error: function(response) {
                      alert('Mohon Untuk Melengkapi Datanya');
                        console.log(response);

                  }
              });
    }

    function hapus() {
        $('#bulan').val(null).trigger('change');
        var tes = "{{ Session::forget(['bulan']) }}";
        location.reload();
    }
</script>
<script src="{{ asset('assets/js/index.js') }}"></script>
@stop