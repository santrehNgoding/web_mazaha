@extends('layouts.app')
@section('content')
<style>
body{
    background-color: #f8f8f8
}
.top {
        background-color: #046C3C;
        display: flex;
        align-items: center;
        text-align: center;
        height: 209px;
    }
    .top h2 {
        color: #ffffff;
        margin: 0 auto;
        font-weight: 700;
    }
    h2 {
        color: #046C3C;
        font-weight: 700;
        margin-top: 50px;
    }
.container {
  max-width: 1100px;
  margin: 0 auto;
}

h2 {
  margin-top: 40px;
  font-weight: 900
}

.stats {  padding:0 100px 0 100px ;
  display: flex;
  justify-content: space-between;
  gap:80px;
  margin-top: 10px;
}

.stat {
    width: 120px;
  background: white;
    padding: 30px;
  border-radius: 10px;
  text-align: center;
  flex: 1;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
.stat h3{
    font-weight: 900
}
.circle {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  line-height: 120px;
  font-size: 36px;
  font-weight:bolder;
  margin: 0 auto 10px;
  border: 12px solid;
}

.red .circle {
  border-color: red;
  color: red;
}

.blue .circle {
  border-color: blue;
  color: blue;
}

.yellow .circle {
  border-color: yellow;
  color: yellow;
}

.alumni-highlight {
  display: flex;
  gap: 30px;
  flex-wrap: wrap;
  margin-top: 10px;
}

.alumni-card {
  background: white;
  padding: 20px 20px 100px 20px;
  text-align: center;
  border-radius: 120px;
  width: 240px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.alumni-card img {
  width: 200px;
  height: 200px;
  margin-bottom: 30px;
  border-radius: 50%;
  object-fit: cover;
}

.search-bar {
  margin-top: 10px;
  padding: 10px;
  width: 100%;
  border-radius: 8px;
  border: 1px solid #ccc;
}

table {
  width: 100%;
  margin-top: 15px;
  border-collapse: collapse;
}

table th, table td {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: left;
}

th {
  background-color: #006d3c;
  color: white;
}

</style>
<header class="top">
  <h2>Sebaran Alumni</h2>
</header>

  <div class="container" style="">
    <h2>Statistik Alumni</h2>
    <div class="stats">
      <div class="stat red">
        <div class="circle">85%</div>
        <h3>Melanjutkan Kuliah</h3>
      </div>
      <div class="stat blue">
        <div class="circle">10%</div>
        <h3>Bekerja</h3>
      </div>
      <div class="stat yellow">
        <div class="circle">5%</div>
        <h3>Lainnya</h3>
      </div>
    </div>

    <h2>Highlight Alumni</h2>
    <div class="alumni-highlight">
      <!-- Ulangi elemen ini sesuai kebutuhan -->
      <div class="alumni-card">
        <img src="{{asset('Screenshot 2025-05-07 174624.png')}}" alt="Kania Salsabila">
        <h3>Ainun Hikmah,S.Si,M.Si</h3>
        <p>Staf akademik dan kemahasiswaan FMIPA Universitas Negri Malang</p>
      </div>
      <div class="alumni-card">
        <img src="{{asset('Screenshot 2025-05-07 174731.png')}}" alt="Kania Salsabila">
        <h3>Salsabila Meisefiyani</h3>
        <p>Jurusan Syariah Islamiyah Universitas Al-Azhar Mesir</p>
      </div>
      <div class="alumni-card">
        <img src="{{asset('Screenshot 2025-05-07 174854.png')}}" alt="Kania Salsabila">
        <h3>Fitho Eka Wahyudi</h3>
        <p>Anggota Polri</p>
      </div>
      <div class="alumni-card">
        <img src="{{asset('Screenshot 2025-05-07 175335.png')}}" alt="Kania Salsabila">
        <h3>M. Umar Faruq</h3>
        <p>TNI Angkatan Darat</p>
      </div>
    </div>

    <h2>Universitas</h2>
    <input type="text" placeholder="Cari Universitas" class="search-bar">

    <table class="mb-5">
      <thead>
        <tr>
          <th>Nama Universitas</th>
          <th>Jumlah Alumni</th>
        </tr>
      </thead>
      <tbody>
        <!-- Tambahkan data universitas di sini -->
      </tbody>
    </table>
  </div>
@endsection
