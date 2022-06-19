<h3>Data Mahasiswa</h3><br/>
<a href="javascript:void(0)" class="btn btn-primary" onclick="load_page('mahasiswa/tambah')">Tambah Mahasiswa</a><br/><br/>
<a href="javascript:void(0)" class="btn btn-success" onclick="setBacaRfId()" id="btnBacaRfId">Baca RF ID</a>
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
                    <a href="javascript:void(0)" class="btn btn-sm btn-warning" onclick="hapusProses('{{ $mhs -> kd_mahasiswa }}')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>

    var rProsesHapus = server + "mahasiswa/hapus/proses";
    var rSetBacaRFID = server + "device/set-read-rf-id";
    var rRollBackBacaRFID = server + "device/set-read-rf-id/rollback";

    $("#tblMhs").dataTable();

    function hapusProses(kdMhs)
    {
        confirmQuest('info', 'Konfirmasi', 'Hapus mahasiswa ...?', function (x) {hapusConfirm(kdMhs)});
    }

    function setBacaRfId()
    {
        $("#btnBacaRfId").hide();
        axios.post(rSetBacaRFID).then(function(res){
            console.log(res.data);
            pesanUmumApp('success', 'Sukses', 'Sukses mengirim perintah baca ID Card ke perangkat, harap catat kode id card yg muncul untuk penambahan data akses baru ... Halaman akan di reload dalam 7 detik ...');
        });
        setTimeout(function(){
            axios.post(rRollBackBacaRFID).then(function(){
                load_page('mahasiswa');
            });
        }, 8000);
    }

    function hapusConfirm(kdMhs)
    {
        let ds = {'kdMhs':kdMhs}
        axios.post(rProsesHapus, ds).then(function(res){
            pesanUmumApp('success', 'Sukses', 'Sukses menghapus data mahasiswa ..');
            load_page('mahasiswa');
        });
    }

</script>