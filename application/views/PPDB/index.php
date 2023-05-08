

  <!-- Bar info -->
      <form action="<?= base_url('Ppdb/tambah_data')?>" method="post">
        Nama
        <input type="text" name="Nama"/>
        NISN
        <input type="number" name="nisn"/>
        alamat
        <textarea name="alamat"></textarea>
        Nama Orang Tua
        <input type="text" name="namaOrtu"/>
        Asal Sekolah
        <input type="text" name="asek"/>
        Nomer HandPhone/Telephone
        <input type="number" name="no_hp"/>
        Jenis Kelamin
        <input type="radio" name="JK" value="pria"/> Pria
        <input type="radio" name="JK" value="wanita"/> Wanita 
        Agama
        <input type="radio" name="agama" onclick = "ilang_a()" value="islam"/> Islam
        <input type="radio" name="agama" onclick = "ilang_a()" value="kristen"/> Kristen
        <input type="radio" name="agama" onclick = "ilang_a()" value="hindu"/> Hindu
        <input type="radio" name="agama" onclick = "ilang_a()" value="budha"/> Budha
        <input type="radio" name="agama" value = "lainnya" id="lainnyaRA" onclick = "muncul_a()"/> Lainnya
        <input type="text" name="agama_l" style="display:none" id="lainnya_a"/>
        Darimana Kamu Tahu SMK Yadika Soreang?
        <input type="radio" name="sumber" onclick = "ilang_s()" value="Teman"/> Teman
        <input type="radio" name="sumber" onclick = "ilang_s()" value="Keluarga"/> Keluarga
        <input type="radio" name="sumber" onclick = "ilang_s()" value="Media Sosial"/> Media Sosial
        <input type="radio" name="sumber" value = "lainnya" id="lainnyaRS" onclick = "muncul_s()" value="Lainnya"/> Lainnya
        <input type="text" name="sumber_l" style="display:none" id="lainnya_s"/>
        Pilihan Jurusan
        <input type="radio" name="jurusan" value="RPL"/> Rekayasa Perangkat Lunak
        <input type="radio" name="jurusan" value="AK"/> Akuntansi
        <input type="radio" name="jurusan" value="AP"/> Perhotelan
    <input type="submit" value="submit">
    </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function ilang_a(){
      document.getElementById('lainnya_a').style.display = 'none';
      document.getElementById('lainnyaRA').setAttribute('name','agama');
    }
    function muncul_a(){
      document.getElementById('lainnya_a').style.display = 'block';
      document.getElementById('lainnyaRA').removeAttribute('name');
    }
    function ilang_s(){
      document.getElementById('lainnya_s').style.display = 'none';
      document.getElementById('lainnyaRS').setAttribute('name','sumber');
    }
    function muncul_s(){
      document.getElementById('lainnya_s').style.display = 'block';
      document.getElementById('lainnyaRS').removeAttribute('name');
    }
  </script>
  <!-- End -->
  