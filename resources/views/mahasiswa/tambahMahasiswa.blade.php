<div id="divTambahMahasiswa">
    <h3>Form Tambah Mahasiswa</h3><br />
    <div class="row">
        <div class="col-6 col-lg-6 col-sm-6">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" id="txtNama" placeholder="Nama Mahasiswa" />
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" id="txtJk">
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Program Studi</label>
                <select class="form-control" id="txtProdi">
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Fisika">Fisika</option>
                    <option value="Biologi">Biologi</option>
                    <option value="Matematika">Matematika</option>
                </select>
            </div>
            <div class="form-group">
                <label>NIM (Nomor Induk Mahasiswa)</label>
                <input type="text" class="form-control" id="txtNim" placeholder="Nomor Induk Mahasiswa" />
            </div>
            <div class="form-group">
                <label>KD ID CARD</label>
                <input type="text" class="form-control" id="txtIdCard" placeholder="Kode ID Card" />
            </div>
            <div>
                <a href="javascript:void(0)" class="btn btn-primary" @click="prosesTambahMhsAtc()">Proses Tambah Mahasiswa</a>
            </div>
        </div>
    </div>
</div>

<script>
    var rProsesTambah = server + "mahasiswa/tambah/proses";
    // vue object 
    var appTambah = new Vue({
        el : '#divTambahMahasiswa',
        data : {

        },
        methods : {
            prosesTambahMhsAtc : function()
            {
                let nama = document.querySelector("#txtNama").value;
                let jk = document.querySelector("#txtJk").value;
                let prodi = document.querySelector("#txtProdi").value;
                let nim = document.querySelector("#txtNim").value;
                let idCard = document.querySelector("#txtIdCard").value;
                let ds = {'nama':nama, 'jk':jk, 'prodi':prodi, 'nim':nim, 'idCard':idCard}
                if(nama === "" || nim === "" || idCard === ""){
                    pesanUmumApp('warning', 'Fill field !!!', 'Harap isi seluruh field !!!');
                }else{
                    axios.post(rProsesTambah, ds).then(function(res){
                        pesanUmumApp('success', 'Sukses', 'Sukses menambahkan data mahasiswa baru ..');
                        load_page('mahasiswa');
                    });
                }
                
            }
        }
    });
    // inisialisasi 
    document.querySelector("#txtNama").focus();
</script>