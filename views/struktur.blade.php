@extends('layouts.app')
@section('content')
<style>
    .top{
        background-color: #046C3C;
        display: flex;
        align-items: center;
        text-align: center;
        height:209px;
       
    }
    .top h2{
         color: #ffffff;
        margin:0 auto;
        font-weight: 700;
    }
    h2{
        color: #046C3C;
        font-weight: 700;
        margin-top:50px;
    }
    .container img{
        margin-top:20px;
    }
    .all {
            font-family: Arial, sans-serif;
            margin: 20px;
            
        }


        .accordion {
            display: flex;
            justify-content: space-between;
            background: #f1f1f1;
            cursor: pointer;
            padding: 15px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            font-size: 16px;
            transition: 0.4s;
            border-radius: 5px;
            margin-top: 5px;
        }
        .active, .accordion:hover {
            background-color: #ddd;
        }
        .panel {
            padding: 0 15px;
            display: none;
            background-color: white;
            overflow: hidden;
            text-align: justify;
        }
    </style>
</head>


</style>
<header class="top">
    <h2>Struktur Organisasi Pimpinan dan Tata Usaha</h2>
</header>
<div class="container">
    <h2>Struktur Organisasi Madrasah</h2>
<img src="{{asset('STRUKTUR MA ZAHA 1 Dalam 75 cm x 90 cm.jpg')}}" alt="" width="100%">
</div>
    <div class="all">
    
    <div class="container 1">
        <h2>Deskripsi Tugas Pokok Dan Fungsi</h2>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Kepala Madrasah </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p><strong> a.	Kepala MADRASAH Sebagai Edukator :</strong>
<p>Melaksanakan PBM yang efektif dan efisien </p>
               <strong> b.	Kepala MADRASAH Sebagai Manager :</strong> 
<p>1.	Menyusun Perencanaan </p>
<p>2.	Pengorganisasian Kegiatan </p>
<p>3.	Mengarahkan kegiatan </p>
<p>4.	Mengkordinasikan kegiatan </p>
<p>5.	Melaksanakan pengawasan </p>
<p>6.	Melaksanakan evaluasi terhadap kegiatan </p>
<p>7.	Melaksanakan kebijakan </p>
<p>8.	Mengadakan rapat </p>
<p>9.	Mengambil keputusan  </p>
<p>10.	Menerbitkan SK  </p>
<p>11.	Mengatur PBM </p>
<p>12.	Mengatur administrasi ke TU an, Kesiswaan, ketenagaan, sarana – prasarana, keuangan dan RAPBM </p>
<p>13.	Mengatur Osis </p>
<p>14.	Mengatur Humas dan instansi terkait </p>
<p> </p>
               <strong> c. Kepala MADRASAH sebagai Administrator</strong> 
<p>1.	Perencanaan </p>
<p>2.	Pengarsipan </p>
<p>3.	Pengarahan </p>
<p>4.	Pengkoordinasian </p>
<p>5.	Pengawasan </p>
<p>6.	Kurikulum </p>
<p>7.	Kesiswaan </p>
<p>8.	Ketata Usahaan </p>
<p>9.	Ketenagaan </p>
<p>10.	Kantor </p>
<p>11.	Keuangan </p>
<p>12.	Perpustakaan </p>
<p>13.	Laboratorium </p>
<p>14.	Ruang Keterampilan / kesenian </p>
<p>15.	Bimbingan konseling </p>
<p>16.	UKS </p>
<p>17.	OSIS </p>
<p>18.	Serba Guna </p>
<p>19.	Media </p>
<p>20.	Gudang </p>
<p>21.	7 K </p>
<p> </p>
<p></p>
<p></p>
<p></p>
               <strong> d. Kepala MADRASAH Sebagai Supervisor</strong> 
<p>1.	Proses belajar mengajar </p>
<p>2.	Kegiatan bimbingan dan konseling </p>
<p>3.	Kegiatan Ekstra kurikuler </p>
<p>4.	Kegiatan ke Tata Usahaan </p>
<p>5.	Kegiatan kerja sama dengan masyarakat dan Instansi terkait </p>
<p>6.	Sarana dan Prasarana </p>
<p>7.	Kegiatan Osis </p>
<p> </p>
               <strong> e.	Kepala MADRASAH sebagai Pemimpin / Leader : </strong>
<p>1.	Dapat dipercaya, jujur, dan bertanggung jawab </p>
<p>2.	Memahami kondisi guru, karyawan, santri</p>
<p>3.	Memiliki VISI dan memahami Missi MADRASAH </p>
<p>4.	Mengambil keputusan urusan intern dan exstern MADRASAH </p>
<p>5.	Membuat, mencari dan memilih gagasan baru </p>
<p> </p>
               <strong> f.	Kepala MADRASAH sebagai Inovator : </strong>
<p>1.	Melakukan pengembangan di bidang </p>
<p>a.	KBM </p>
<p>b.	BK </p>
<p>c.	Exstra Kurikuler </p>
<p>d.	Pengadaan Sarana dan Prasarana </p>
<p>2.	Melaksanakan pembinaan guru / karyawan  </p>
<p>3.	Melakukan pembenahan dalam ruang gali sumber daya di Komite / Masyarakat  </p>
<p> </p>
               <strong> g.	Kepala MADRASAH sebagai Motivator :</strong> 
<p>1.	Mengatur ruang kantor yang konduktif untuk bekerja </p>
<p>2.	Mengatur ruang kantor yang konduktif untuk KBM / BK </p>
<p>3.	Mengatur ruang lab. Yang konduktif untuk Praktikum </p>
<p>4.	Mengatur ruang Perpustakaan Yang konduktif untuk belajar </p>
<p>5.	Mengatur ruang halaman / lingkungan MADRASAH yang sejuk dan teratur </p>
<p>6.	Menciptakan hubungan kerja yang harmonis antara guru / karyawan </p>
<p>7.	Menciptakan hubungan kerja yang harmonis antara MADRASAH dan lingkungan </p>
<p>8.	Menerapkan prinsip penghargaan dan hukuman  </p>
                </p>
        </div>
    
        <button class="accordion"><div>Tugas Pokok dan Fungsi Wakil Kepala Tata Usaha </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>a.	Menyusun program tata usaha MADRASAH 
<p>b.	Pembinaan dan pengelolaan karier </p>
<p>c.	Penyusunan administrasi perlengkapan MADRASAH dan persuratan </p>
<p>d.	Penyusunan dan penyajian data dan statistik MADRASAH </p>
<p>e.	Mengkoordinasikan melaksanakan 7K </p>
<p>f.	Menyusun laporan pelaksanaan kegiatan pengurus ke Tata usaha secara berkala </p>
<p>g.	Legalisasi dokumentasi </p>
                </p>
        </div>
    
        <button class="accordion"><div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kurikulum </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Menyusun dan menjabarkan kalender pendidikan 
                <p>2.	Menyusun pembagian tugas guru dan jadwal pelajaran </p>
                <p>3.	Mengatur penyusunan program pengajaran (Program Semester, Program Tahunan  penyusunan kurikulum, perangkat mengajar)  </p>
                <p>4.	Mengatur pelaksanaan kegiatan Kurikuler dan Ekstra Kurikuler </p>
                <p>5.	Mengatur pelaksanaan program penilaian, kriteria kenaikan kelas, kelulusan dan laporan kemajuan belajar siswa serta pembagian Raport dan Ijzah</p>
                <p>6.	Mengatur pelaksanaan program perbaikan  </p>
                <p>7.	Mengatur pemanfaatan lingkungan sebagai sumber belajar </p>
                <p>8.	Melakukan supervisi Administrasi dan Akademis </p>
            </p>
        </div>
    
        <button class="accordion"><div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kesiswaan </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Mengatur Program dan pelaksanaan BK 
                <p>2.	Mengatur dan mengkoordinasikan pelaksaan 7K </p>
                <p>3.	Mengatur dan membina kegiatan Program OSIS </p>
                <p>4.	Mengatur pelaksanaan peraturan MADRASAH </p>
                <p>5.	Menyusun dan mengatur pelaksanaan pemilihan siswa prestasi</p>
                <p>6.	Menyusun Penyelenggaraan extra kurikuler </p>
                <p>7.	Menyeleksi calon untuk Bea siswa bersama waka humas </p>
                <p>8.	Mengatur mutasi siswa</p>
                <p>9.	Menyelenggarakan tasyakuran akhirus sanah </p>
            </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Hubungan Masyarakat </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Mengatur dan mengembangkan hubungan dengan Komite , Wali Santri, tokoh Masyarakat dan lain sebagainya  
<p>2.	Menyelenggarakan kemah bakti santri </p>
<p>3.	Menyelenggaarakan milad MADRASAH ( gebyar seni ) </p>
<p>4.	Mendata para Alumni </p>
<p>5.	Menjalani hubungan kerja sama dengan lembaga-lembaga professional dan instansi terkait </p>
<p>6.	Menangani karnaval, upacara hari besar Nasional / hari besar Islam dan lain sebagainya  </p>
<p>7.	Mengawasi dan melaporkan keaktifan guru kepada kepala madrasah yang rekapanya di kirim oleh petugas Piket</p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian sarana prasarana </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Perencanaan kebutuhan sarana pra sarana untuk menunjang pragram Belajar Mengajar  
            <p> 2.	Merencanakan program pengadaan sarana pendidikan </p>
            <p> 3.	Mengatur pemanfaatan sarana pra sarana </p>
            <p> 4.	Pengelolaan peralatan, perbaikan </p>
            <p> 5.	Mengatur pembukuan / inventaris Madrasah </p>
            <p> 6.	Menangani hal-hal yang sifatnya keluar </p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Bendahara </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>
<p>1.	Menerima keuangan dari pembantu bendahara </p>
<p>2.	Memasukkan ke rekening Bank yang telah ditentukan </p>
<p>3.	Membukukan ke buku Kas ke uangan dibantu pembantu bendahara </p>
<p>4.	Menyetorkan / membayar HR dan Transport guru dan karyawan  </p>
<p>5.	Membayar rekening listrik, wifi, koran dan telepon </p>
<p>6.	Menyetorkan keuangan pesantren /  Yayasan </p>
<p>7.	Mengeluarkan keuangan untuk keperluan MADRASAH diluar rutin setelah mengetahui kepala MADRASAH </p>
<p>8.	laporan bulanan  </p>

                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Staf Kepala TU</div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Membuat Daftar Buku induk 
<p>2.	Menginventarisir Daftar Buku Lulusan </p>
<p>3.	Menyimpan Daftar Kumpulan Nilai (Leger)</p>
<p>4.	Menginventarisir Pendaftaran Siswa Baru</p>
<p>5.	Menyusun Daftar Keadaan Siswa</p>
<p>6.	Mengisi Buku kleper </p>
<p>7.	Mengisi Buku mutasi </p>
<p>8.	Buku Raport </p>
<p>9.	Daftar nilai prestasi siswa </p>
<p>10.	Mengisi papan data keadaan siswa,dll</p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Staf Bendahara </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Menerima keuangan dari siswa sesuai dengan ketentuan  
<p>2.	Menyerahkan keuangan kepada bendahara </p>
<p>3.	mengingatkan kepada siswa yang mempunyai tunggakan secara berkala  </p>
<p>4.	Membantu tugas bendahara </p>
<p>5.	membuat rekapitulasi keuangan setiap bulan </p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Staf Waka Kurikulum </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	 Membantu tugas kurikulum menyusun program kurikulum
<p>2.	 Membantu tugas kurikulum melaksanakan supervisi</p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Staf Waka Humas</div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Melaksanakan hubungan sekolah dan masyarakat
<p>2.	Membantu proses kegiatan komite</p>
<p>3.	Menjalin kerja sama dengan pemerintah dan lembaga masyarakat serta keterlibatan pemangku kepentingan (stakeholders)</p>
<p>4.	Mencatat dan mendokumentasikan proses kegiatan kehumasan</p>
<p>5.	Mempromosikan sekolah/madrasah dan mengkoordinasikan penelusuran tamatan</p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Staf Waka Sarpras </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Merencanakan kebutuhan dan mengelola sarana</p>
            <p>2.	Menyusun daftar kebutuhan sarana dan prasarana</p>
            <p>3.	Mencatat dan menginventarisir sarana</p>
            <p>4.	Menyimpan dokumen kepemilikan</p>
            <p>5.	Membuat daftar inventarisasi ruang, dll</p>
            <p>6.	Mengatur tempat dan fasilitas kegiatan upacara dan rapat-rapat dinas</p>
            <p>7.	Koordinator Petugas Layanan Khusus, Penjaga, Tukan Kebun, dan Petugas Kebersihan.</p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Ketua Program Unggulan</div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Menyusun Program unggulan Madrasah
<p>2.	Melaksanakan program unggulan madrasah</p>
<p>3.	Menangani lomba prestasi,</p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Guru BK </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>
<p>1.	Penyusunan program dan pelaksanaan bimbingan dan konseling </p>
<p>2.	Koordinasi dengan wali kelas dalam rangka mengatasi masalah yang dihadapai oleh siswa tentang kesulitan belajar </p>
<p>3.	Memberikan layanan dan bimbingan kepada siswa agar lebih berprestasi dalam kegian belajar </p>
<p>4.	Memberikan saran dan pertimbangan kepada siswa dalam memperoleh gambaran tentang lanjutan pendidikan dan lapangan pekerjaan yang sesuai </p>
<p>5.	Mengadakan penelitian pelaksanaan bimbingan dan konseling </p>
<p>6.	menyusun statistik hasil penilaian bimbingan dan konseling </p>
<p>7.	Melaksanakan kegiatan analisis hasil evaluasi belajar </p>
<p>8.	Menyusun dan melaksanakan program tindak lanjut bimbingan dan konseling </p>
<p>9.	Menyusun laporan pelaksanaan bimbingan dan konseling </p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Wali Kelas </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p><strong> 1.	Pengelolaan Kelas</strong>  
<p>a.	Tugas pokok meliputi </p>
<p>•	Mewakili orang tua dan Kepala MADRASAH dalam lingkungan MADRASAH </p>
<p>•	Membantu pengembangan keterampilan dan kecerdasan santri </p>
<p>•	Membina karakter, akhlaqul karimah dan kepribadian santri </p>
<p>b.	Keadaan santri </p>
<p>•	Mengetahui jumlah dan hafal nama anak didiknya </p>
<p>•	Mengetahui identitas diri anak didiknya </p>
<p>•	Mengetahui kehadiran anak didiknya setiap hari </p>
<p>•	Mengetahui masalah-masalah yang dihadapi anak didiknya </p>
<p>c.	Melakukan penilaian  </p>
<p>•	Tingkah laku santri sehari-hari di MADRASAH </p>
<p>d.	Kerajinan, kelakuan, dan kedisiplinan santri  </p>
<p>e.	Mengambil tindakan bila dianggap perlu </p>
<p>•	Pembaritahuan, pembinaan dan pengarahan </p>
<p>•	Peringatan secara lisan dan tertulis </p>
<p>f.	Langkah tindak lanjut </p>
<p>•	Memperhatikan buku nilai raport anak didiknya </p>
<p>•	Mendata keberhasilan anak didiknya </p>
<p>•	Membangun suasana kekeluargaan </p>
<p> </p>
               <strong> 2.	Penyelenggaraan administrasi kelas, meliputi ; </strong>
<p>a.	Denah tempat duduk anak didiknya </p>
<p>b.	Papan absensi anak didiknya </p>
<p>c.	Daftar pelajaran dan daftar piket </p>
<p>d.	Buku referensi  </p>
<p>e.	Buku jurnal kelas </p>
<p>f.	Tata tertib kelas </p>
<p>g.	Penyusunan dan pembuatan statistik bulanan santri </p>
<p>h.	Pembuatan catatan khusus tentang santri / bukuliterasi </p>
<p>i.	Pengisian dan pembagian buku laporan penilai hasil belajar (raport) </p>
<p>j.	Merekapitulasi absensi siswa setiap bulan </p>
<p>k.	Melengkapi data anak didiknya meliputi ( Ijazah SD Sederajat, KK dan Akta kelahiran ) </p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Guru </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Guru yang mempunyai jam pertama wajib hadir di MADRASAH paling lambat 07.15 WIB.  
<p>2.	Mendampingi santri dalam mengikuti program Sapa santri dan literasi MADRASAH </p>
<p>3.	Membuat kelengkapan mengajar dengan baik dan lengkap </p>
<p>4.	Melakukan absensi kehadiran </p>
<p>5.	Melaksanakan kegiatan pembelajaran </p>
<p>6.	Melaksanakan penilaian harian, PHB, PAS, PAT  </p>
<p>7.	Melaksanakan analisis ulangan harian </p>
<p>8.	Menyusun dan melaksanakan program perbaikan dan pengayaan </p>
<p>9.	Melaksanakan kegiatan bimbingan pengimbasan pengetahuan (desiminasi) kepada guru yang lain </p>
<p>10.	Menggunakan media pembelajaran atau alat peraga </p>
<p>11.	Mengikuti kegiatan workshop, bimtek/MGMP/Diseminasi pengembangan kurikulum terbaru </p>
<p>12.	Melaksanakan dan mengikuti tugas tertentu dari MADRASAH </p>
<p>13.	Membuat catatan tentang kemajuan hasil belajar santri </p>
<p>14.	Mengisi jurnal dan mencatat kehadiran santri sebelum memulai pelajaran  </p>
<p>15.	Mengumpulkan jurnal kegiatan guru pada akhir semester </p>
<p>16.	Mendidik akhlaq santri sesuai dengan SATLOGI SANTRI dan 9 BUDI UTAMA SANTRI </p>
<p>17.	Apabila berhalangan hadir, maka wajib memberitahukan / mohon ijin kepada kepala MADRASAH melalui Tele Japri dan kepada guru piket. selain ijin kepada kepala MADRASAH maka dianggap alpa.  </p>
<p>18.	Memakai seragam dengan atribut lengkap </p>
<p>a	Sabtu – ahad 	: Baju batik bawah gelap </p>
<p>b	Senin – selasa	: Baju putih bawah gelap</p>
<p>c	Rabu – Kamis 	: Baju hijau</p>
<p>19.	Mengikuti upacara/Apel yang diselenggarakan Madrasah / Yayasan</p>
<p>20.	5 hari kerja bagi guru sertifikasi, guru non sertifikasi menyesuaikan jumlah hari/jam mengajar </p>
                </p>
        </div>
        <button class="accordion"><div>Tugas Pokok dan Fungsi Petugas Perpustakaan </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>1.	Perencanaan pengadaan buku / bahan pustaka / media elektrinika 
<p>2.	Penyusunan pelayanan perpustakaan </p>
<p>3.	Perencanaan pengembangan perpustakaan </p>
<p>4.	Pemeliharaan dan perbaikan buku-buku / bahan pustaka / media elektronika </p>
<p>5.	Investasi buku  </p>
<p>6.	Melakukan layanan bagi siswa, guru dan tenaga pendidikan lainya serta masyarakat </p>
<p>7.	Pengelolaan dan penyimpanan buku-buku perpustakaan </p>
<p>8.	Menyusun tata tertib perpustakaan </p>
<p>9.	Menyusun laporan pelaksanaan kegiatan perpustakaan secara berkala </p>
                </p>
</svg>
    
    <script>
        var acc = document.getElementsByClassName("accordion");
        for (var i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    </div>
@endsection
