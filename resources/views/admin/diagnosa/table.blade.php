@extends('admin.home')
@section('contents')
  <section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Kasus Diagnosa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Penyakit</th>
                    <th>Persentase</th>
                  </tr>
                  </thead>
                  <tbody>  
                  @forelse ($posts as $post)
                    <tr class='clickable-row' 
                    data-toggle="modal" 
                    data-target="#editModal" 
                    onclick="onClick({{$post}})">
                      <td>{{$post->name}}</td>
                      <td>{{$post->email}}</td>
                      <td>{{$post->jenis_kelamin}}</td>
                      <td>{{$post->penyakit}}</td>
                      <td>{{$post->persentase}}</td>
                    </tr>                  
                  @empty
                  <div class="alert alert-danger">
                      Data gejala belum Tersedia.
                  </div>
                  @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Penyakit</th>
                    <th>Persentase</th>
                  </tr>
                  </tfoot>
                </table>
              </div><!-- /.card-body -->
            </div><!-- /.card -->
          </div><!-- /.content -->
    </div><!-- /.container-fluid -->
  </section>
    <!-- Edit  Job modal -->
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Penguna</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="post">
                  <div class="modal-body">
                    <fieldset id="modal_form">
                      
                      <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputNama" placeholder="Enter nama anda" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Enter email anda" disabled>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label for="exampleInputBerat">Berat Badan</label>
                            <input type="number" class="form-control" placeholder="Enter Berat Badan" name="bb" id="exampleInputBerat" disabled>
                        </div>
                        <div class="col-4">
                            <label for="exampleInputTinggi">Tinggi Badan</label>
                            <input type="number" class="form-control" placeholder="Enter Tinggi Badan" name="bt" id="exampleInputTinggi" disabled>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="custom-select" id="exampleInputJenis" name="jenis" disabled>
                                <option value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPenyakit">Penyakit</label>
                        <input type="text" class="form-control" name="alamat" id="exampleInputPenyakit" placeholder="Enter alamat anda" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputGejala">Gejala</label>
                        <input type="text" class="form-control" name="alamat" id="exampleInputGejala" placeholder="Enter alamat anda" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" id="exampleInputAlamat" placeholder="Enter alamat anda" disabled></textarea>
                    </div>
                    </fieldset>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Job modal -->
  <script>
    function onClick(data) {
      $('#editModal').modal('show');
      document.getElementById("exampleInputNama").value = data.name;
      document.getElementById("exampleInputEmail").value = data.email;
      document.getElementById("exampleInputAlamat").value = data.alamat;
      document.getElementById("exampleInputBerat").value = data.bb;
      document.getElementById("exampleInputTinggi").value = data.bt;
      document.getElementById("exampleInputPenyakit").value = data.penyakit;
      document.getElementById("exampleInputGejala").value = data.gejala_terpilih;
      document.getElementById("exampleInputJenis").value = data.jenis_kelamin;
    }
  </script>

@endsection    