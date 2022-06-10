<h3>Data Mahasiswa</h3><br/>
<a href="javascript:void(0)" class="btn btn-primary" onclick="load_page('mahasiswa/tambah')">Tambah Mahasiswa</a>
<hr/>
<div class="row">
    <table class="table table-striped table-hover" id="tblMhs">
        <thead>
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>
                <th>ID Card</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataMahasiswa as $mhs)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $mhs -> nim }}</td>
                <td>{{ $mhs -> nama_mahasiswa }}</td>
                <td>{{ $mhs -> prodi }}</td>
                <td>{{ $mhs -> kd_id_card }}</td>
                <td>
                    <a href="javascript:void(0)" class="btn btn-sm btn-warning">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $("#tblMhs").dataTable();
</script>