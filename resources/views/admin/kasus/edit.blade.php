@extends('admin.home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/css/kasus.css') }}">
@endpush
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Input Data Gejala Penyakit</h3>
                    </div>
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label>Penyakit</label>
                            <input type="text" class="form-control @error('penyakit') is-invalid @enderror" name="penyakit" value="{{ $penyakits->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <div class="selected-container" id="gejala-selected-container" data-url='{{ route('list_selected_gejala', $penyakits->kode) }}'></div>
                        </div>
                        <div class="form-group">
                            <label>Pilih Gejala</label>
                            <div class="boxes-container" id="gejala-container" data-url='{{ route('list_gejala', $penyakits->kode) }}'></div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('kasus.index') }}" class="btn btn-primary">Kembali ke tabel basis kasus</a>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <script>
        // CKEDITOR.replace('content');
    </script>
@endsection
@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            reload_list_gejala()
            reload_list_selected_gejala()
        })

        function reload_list_gejala() {
            if ($('#gejala-container').length) {
                // $('#gejala-container').html('<p><b>Sedang Memuat..</b></p>');
                var reload_url = $('#gejala-container').data('url');
                $('#gejala-container').load(reload_url);
            }
        }

        function reload_list_selected_gejala() {
            if ($('#gejala-selected-container').length) {
                // $('#gejala-selected-container').html('<p><b>Sedang Memuat..</b></p>');
                var reload_url = $('#gejala-selected-container').data('url');
                $('#gejala-selected-container').load(reload_url);
            }
        }
    </script>
@endpush
