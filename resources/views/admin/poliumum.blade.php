

<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('admin.navbar')

 @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Pasien Puskesmas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <P>Jumlah Pasien : 15</P>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-check"></i>Success</h5>
      {{ session('pesan') }}
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Pasien</td>
                <td>NIK</td>
                <td>Usia</td>
                <td>Kelamin</td>
                <td>Alamat</td>
                <td>Poli</td>
                <td style="width: 200px;">Action</td> <!-- Menambahkan style width pada column "Action" -->
            </tr>
        </thead>
      </table>
    </div>  

</div>
@include('admin.footer')

@include('admin.script')
</body>
</html>
