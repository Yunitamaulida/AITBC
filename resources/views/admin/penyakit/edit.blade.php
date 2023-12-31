@extends('admin.home')
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Input Data User</h3>
                    </div>
                    <!-- form start -->
                    <form action="{{route('penyakit.update',$post->kode)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName1">kode</label>
                                <input type="kode" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode',$post->kode) }}"  id="exampleInputKode1" placeholde r="Enter kode pengguna" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">nama</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$post->name) }}"  id="exampleInputName1" placeholde r="Enter name pengguna">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">deskripsi</label>
                                <input type="name" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('name',$post->deskripsi) }}"  id="exampleInputName1" placeholde r="Enter name pengguna">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">solusi</label>
                                <input type="name" class="form-control @error('solusi') is-invalid @enderror" name="solusi" value="{{ old('name',$post->solusi) }}"  id="exampleInputName1" placeholde r="Enter name pengguna">
                            </div>
                          </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
