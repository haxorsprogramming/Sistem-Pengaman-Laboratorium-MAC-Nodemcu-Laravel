<h3>History Akses</h3><br/>
<hr/>
<div class="row">
    <table class="table table-striped table-hover" id="tblHistory">
        <thead>
            <tr>
                <th>#</th>
                <th>Waktu Akses</th>
                <th>ID Card</th>
                <th>Mahasiswa</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataHistory as $history)
        <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>{{ $history -> waktu_update }}</td>
            <td>{{ $history -> id_card }}</td>
            <td>{{ $history -> cekIdCardData($history -> id_card) }}</td>
            @if($history -> cekIdCardData($history -> id_card) == 'tidak ada')
                <td><b>Tidak Diizinkan</b></td>
            @else 
                <td><b>Diizinkan</b></td>
            @endif
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>

    var rProsesHapus = server + "mahasiswa/hapus/proses";

    $("#tblHistory").dataTable();
   
</script>