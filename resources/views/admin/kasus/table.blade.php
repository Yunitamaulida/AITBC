@extends('admin.home')
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable Kasus</h3>
                        {{-- <div class="card-tools">
                            <button onclick="location.href='{{ route('kasus.create') }}'" type="button" class="btn btn-tool">
                                Tambah
                                <i class="fas fa-plus"></i>
                            </button>
                        </div> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kasus Penyakit</th>
                                    <th>Gejala</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @forelse ($penyakits as $penyakit)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $penyakit->name }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($penyakit->gejalas as $gejala)
                                                    <li>{{ $gejala->name }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('deleted_kasus_all', $penyakit->kode) }}" method="POST">
                                                <button onclick="location.href='{{ route('kasus.edit', $penyakit->kode) }}'" type="button" class=" btn btn-tool">
                                                    edit
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-tool toastrDefaultSuccess">
                                                    hapus
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @empty
                                    <div class="alert alert-danger">
                                        Data Kasus belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Penyakit</th>
                                    <th>Gejala</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>

                        {{-- {{ $posts->links() }} --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
    <script>
        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
    </script>

@endsection
