<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: rgba(0, 0, 0, 0.8);
            font-family: Arial, sans-serif;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 80%;
            max-width: 900px;
        }
        .photo {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }
        .photo img {
            width: 100%;
            display: block;
            border-radius: 10px;
        }
        .caption {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            text-align: center;
            padding: 10px;
            transition: bottom 0.4s ease, background 0.4s ease;
        }
        .photo:hover .caption {
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
        }
    </style>
</head>
<body>
    <div class="gallery">
        <div class="photo">
            <img style="height:200px" src="{{asset('img/itb.jpg')}}" alt="Foto 1">
            <div class="caption">Nama 1 - Jabatan 1</div>
        </div>
        <div class="photo">
            <img style="height:200px" src="{{asset('img/itb.jpg')}}" alt="Foto 2">
            <div class="caption">Nama 2 - Jabatan 2</div>
        </div>
        <div class="photo">
            <img style="height:200px" src="{{asset('img/itb.jpg')}}" alt="Foto 3">
            <div class="caption">Nama 3 - Jabatan 3</div>
        </div>
        <div class="photo">
            <img style="height:200px" src="{{asset('img/itb.jpg')}}" alt="Foto 4">
            <div class="caption">Nama 4 - Jabatan 4</div>
        </div>
        <div class="photo">
            <img style="height:200px" src="{{asset('img/itb.jpg')}}" alt="Foto 5">
            <div class="caption">Nama 5 - Jabatan 5</div>
        </div>
        <div class="photo">
            <img style="height:200px" src="{{asset('img/itb.jpg')}}" alt="Foto 6">
            <div class="caption">Nama 6 - Jabatan 6</div>
        </div>
    </div>
</body>
</html>
