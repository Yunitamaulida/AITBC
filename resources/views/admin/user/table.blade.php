@extends('admin.home')
@section('contents')
  <section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable User</h3>
                <div class="card-tools">
                  <button onclick="location.href='{{route('user.create')}}'" type="button" class="btn btn-tool">
                    Tambah 
                    <i class="fas fa-plus"></i>
                  </button>
                </div>  
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>level</th>
                    <th>Create</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>  
                  @forelse ($posts as $post)
                    <tr>
                      <td>{{$post->name}}</td>
                      <td>{{$post->email}}</td>
                      <td>{{$post->level}}</td>
                      <td>{{$post->created_at}}</td>
                      <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $post->id) }}" method="POST">
                          <button onclick="location.href='{{route('user.edit',$post->id)}}'" type="button" class=" btn btn-tool">
                            edit 
                            <i class="fas fa-edit"></i>
                          </button>
                          @csrf
                          @method('DELETE')
                          <button  type="submit" class="btn btn-tool">
                            hapus
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>                  
                  @empty
                  <div class="alert alert-danger">
                      Data Post belum Tersedia.
                  </div>
                  @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>level</th>
                    <th>Create</th>
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
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif
  </script>
@endsection    