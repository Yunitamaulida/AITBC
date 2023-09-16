<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>TBC Kecerdasan Buatan - Diagnosa</title>
    <!--====== Favicon Icon ======-->
    <link rel = "icon" href = {{ asset('admin/dist/img/AdminLTELogo.png') }}  type = "image/x-icon">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/bootstrap.min.css')}}>
    <!--====== Slick css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/slick.css')}}>
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/magnific-popup.css')}}>
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/LineIcons.css')}}>
    <!--====== Default css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/default.css')}}>
    <!--====== Style css ======-->
    <link rel="stylesheet" href={{asset('guest/assets/css/style.css')}}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('admin/dist/css/adminlte.min.css') }}>
    <!-- DataTables -->
    <link rel="stylesheet" href={{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}>
</head>

<body>
  
    <!--====== HEADER ONE PART START ======-->

    <header class="header-area">

        <div class="navbar-area navbar-one navbar-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('guest/assets/images/logo.sv')}}g" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('') }}/#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('') }}/#penyakit">Penyakit</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#diagnosa">Diagnosa</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <ul>
                                    <li><a class="light" href="{{ url('home') }}">Sign In</a></li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <form action="{{ route('diagnosa.post') }}" method="post">
        @csrf
        <div id="diagnosa" class="header-content-area d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-wrapper">
                            <div class="header-content">
                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-header">
                                        <h3 class="card-title">Input Data Diri Anda</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Nama</label>
                                            <input type="text" class="form-control @error('kode') is-invalid @enderror" name="nama" value="{{ old('nama') }}"  id="exampleInputNama" placeholder="Enter nama anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  id="exampleInputEmail" placeholder="Enter email anda">
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="exampleInputBerat">Berat Badan</label>
                                                <input type="number" class="form-control" placeholder="Enter Berat Badan" name="bb" id="exampleInputBerat">
                                            </div>
                                            <div class="col-4">
                                                <label for="exampleInputTinggi">Tinggi Badan</label>
                                                <input type="number" class="form-control" placeholder="Enter Tinggi Badan" name="bt" id="exampleInputTinggi">
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="custom-select" name="jenis">
                                                    <option value="L">Laki Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAlamat">Alamat</label>
                                            <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}"  id="exampleInputAlamat" placeholder="Enter alamat anda"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- header content -->

                            <div class="header-image d-none d-lg-block">
                                <div class="card image">
                                    <div class="card-header">
                                        <h3 class="card-title">Diagnosa TBC</h3>
                                        <div class="card-tools">
                                        <button type="submit" class="btn btn-primary">
                                            Mendiagnosa 
                                            <i class="fas fa-plus"></i>
                                        </button>
                                        </div>  
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>nama</th>
                                                    <th>action</th>
                                                </tr>
                                                </thead>
                                                <tbody>  
                                                @forelse ($gejala as $key => $post)
                                                    <tr>
                                                        <td>{{$post->name}}
                                                            <input style="text-align:center; border-color: transparent;" name="inputs[{{$key}}][kode]" type="text" value={{$post->kode}} hidden>
                                                            <input style="text-align:center; border-color: transparent;" name="inputs[{{$key}}][name]" type="text" value={{$post->name}} hidden>
                                                        </td>
                                                        <td><input style="text-align:center" class="icheck-primary" name="inputs[{{$key}}][milih]" type="checkbox" id="remember"></td>
                                                    </tr>                  
                                                @empty
                                                    <div class="alert alert-danger">
                                                    Data gejala belum tersedia.
                                                    </div>
                                                @endforelse
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>nama</th>
                                                        <th>action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card -->
                                </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="{{asset('guest/assets/images/header-shape.svg')}}" alt="shape">
            </div> <!-- header-shape -->
        </div> <!-- header content area -->
        </form>
    </header>
    
    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-70 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo-support d-md-flex align-items-end justify-content-between">
                            <div class="footer-logo d-flex align-items-end pt-30">
                                <a href="index.html"><img src={{asset('guest/assets/images/footer-logo.svg')}} alt="Logo"></a>
                            </div> <!-- footer logo -->
                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-sm-12">
                        <div class="footer-support ">
                            <span class="number">09-215-5596</span>
                            <span class="mail">hello@customeagency.com</span>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Company</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Product & Services</h6>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Developer</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">Template Crafted by <a rel="nofollow" href="">Rahgenah</a> - UI Powered by <a el="nofollow" href="">AAP</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
    
    

    <!--====== jquery js ======-->
    <script src="{{asset('guest/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('guest/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('guest/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('guest/assets/js/popper.min.js')}}"></script>


    <!--====== Images Loaded js ======-->
    <script src="{{asset('guest/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('guest/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('guest/assets/js/scrolling-nav.js')}}"></script>
    
    
    <!--====== Slick js ======-->
    <script src="{{asset('guest/assets/js/slick.min.js')}}"></script>
    
    
    <!--====== Main js ======-->
    <script src="{{asset('guest/assets/js/main.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src={{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
            "iDisplayLength": 5,
          });
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
</body>

</html>
