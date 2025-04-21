@extends('layouts.app2')

@section('content')
<style>
    header {
        background-color: #046C3C;
        display: flex;
        align-items: center;
        text-align: center;
        height: 209px;
    }
    header h2 {
        color: #ffffff;
        margin: 0 auto;
        font-weight: 700;
    }
    h2 {
        color: #046C3C;
        font-weight: 700;
        margin-top: 50px;
    }
    .container h2 {
        margin-bottom: 50px;
    }
    .all {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .gallery {
        height: 100vh;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: auto;
        gap: 40px;
        width: 100%;
        grid-template-areas: 
            "img1 img3 img3"
            "img1 img4 img5"
            "img2 img4 img6";
    }
    .gallery img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
    }
    .gallery img:hover {
        transform: scale(1.1);
    }
    .img1 { grid-area: img1; }
    .img2 { grid-area: img2; }
    .img3 { grid-area: img3; }
    .img4 { grid-area: img4; }
    .img5 { grid-area: img5; }
    .img6 { grid-area: img6; }
</style>

<!-- Bootstrap Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-header border-0">
        <h5 class="modal-title text-white" id="videoModalLabel">Fasilitas Video</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <video id="videoPlayer" controls>
            <source src="" type="video/mp4">
            Browser Anda tidak mendukung video.
          </video>
        </div>
      </div>
    </div>
  </div>
</div>

<header>
    <h2>Fasilitas Pembelajaran</h2>
</header>

<div class="container">
    <h2>Fasilitas Pembelajaran</h2>
    <div class="all">
        <div class="gallery">
            <img src="{{ asset('Screenshot 2025-03-06 112412.png') }}" alt="Perpustakaan" class="img1 video-trigger" data-video="{{ asset('vidio 3.mp4') }}">
            <img src="{{ asset('Screenshot 2025-03-06 112430.png') }}" alt="Laboratorium Komputer" class="img2 video-trigger" data-video="{{ asset('vidio 2.mp4') }}">
            <img src="{{ asset('Screenshot 2025-03-06 112444.png') }}" alt="Kelas" class="img3 video-trigger" data-video="{{ asset('VIDIO 1.mp4') }}">
            <img src="{{ asset('Screenshot 2025-03-06 112455.png') }}" alt="Aula" class="img4 video-trigger" data-video="{{ asset('Laravel - Google Chrome 2025-02-23 22-08-08.mp4') }}">
            <img src="{{ asset('Screenshot 2025-03-06 112517.png') }}" alt="Proses Belajar" class="img5 video-trigger" data-video="{{ asset('Laravel - Google Chrome 2025-02-23 22-08-08.mp4') }}">
            <img src="{{ asset('Screenshot 2025-03-06 112543.png') }}" alt="CCTV Keamanan" class="img6 video-trigger" data-video="{{ asset('Laravel - Google Chrome 2025-02-23 22-08-08.mp4') }}">
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
    const videoPlayer = document.getElementById('videoPlayer');
    const videoSource = videoPlayer.querySelector('source');

    document.querySelectorAll('.video-trigger').forEach(img => {
        img.addEventListener('click', () => {
            const videoUrl = img.getAttribute('data-video');
            videoSource.src = videoUrl;
            videoPlayer.load();
            videoModal.show();
        });
    });

    // Stop video saat modal ditutup
    document.getElementById('videoModal').addEventListener('hidden.bs.modal', () => {
        videoPlayer.pause();
        videoPlayer.currentTime = 0;
    });
</script>
@endsection
