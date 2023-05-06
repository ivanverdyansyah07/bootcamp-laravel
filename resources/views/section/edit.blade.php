@extends('templates.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Halaman Edit Kelas</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Kelas</h6>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="kompetensi_keahlian">Kompetensi Keahlian:</label>
                        <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian"
                            placeholder="Masukkan Kompetensi Keahlian">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Edit Kelas</button>
                        <a href="/api/kelas" class="btn btn-secondary">Halaman Kelas</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
