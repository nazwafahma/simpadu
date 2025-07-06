@extends('template.main')
@section('content')

<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Prodi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data Prodi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header ">
                            <h3 class="card-title">Data Prodi</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('prodi') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama Prodi</label>
                                    <input type="text" name="nama" id="nama"
                                        class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                                    <input type="text" name="kaprodi" id="kaprodi"
                                     class="form-control @error('kaprodi') is-invalid @enderror">
                                    @error('kaprodi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" name="jurusan" id="jurusan"
                                    class="form-control @error('jurusan') is-invalid @enderror">
                                    @error('jurusan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            <div class="card-footer">
                                <a href="{{ url ('prodi') }}" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

@endsection