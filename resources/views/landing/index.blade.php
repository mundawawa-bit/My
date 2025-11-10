<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('temp/my.css') }}">
    <title>MyMount.id</title>
</head>
<body>
    <h1>WEE</h1>
    <nav>
        <div>
            <img src="{{ asset('assets/MyMount.id.png') }}" alt="Logo">
        </div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Galeri</a></li>
            <li><button class="btn-contact">Contact</button></li>
        </ul>
    </nav>
    <div id="Beranda">
        <div class="box1">
            <h2>Langkahkan Kaki,</h2>
            <h2>Temukan Dirimu.</h2>
            <p>MyMount.id hadir untuk menemanimu menyiapkan pendakian: dari tips persiapan, rekomendasi gunung, hingga komunitas pecinta alam.</p>
            <div class="btn">
                <div class="btn-start">Mulai Petualang</div>
                <div class="btn-popular">Lihat Gunung Populer</div>
            </div>
            <img src="assets/person-bg.png" alt="gambar pendaki" class="img-person">

        </div>
    </div>
    <div>
        <div id="Tentang">
            <div class="mini-box1">
                <p># Tentang Kami #</p>
            </div>
            <h2>Kami Pendaki, Sama Sepertimu</h2>
            <p>Kami adalah komunitas pecinta alam yang percaya pendakian bukan sekadar hobi, tapi cara belajar mencintai diri sendiri dan menjaga bumi.</p>
            <div class="mini-box2">
                <div class="card1">

                    <h3>Membagikan panduan mendaki</h3>
                    <p>Tips praktis dan panduan lengkap untuk persiapan pendakian yang aman</p>
                </div>
                <div class="card2">
                    <h3>Menumbuhkan budaya ramah lingkungan</h3>
                    <p>Kampanye dan edukasi untuk menjaga kelestarian alam serta praktik pendakian yang bertanggung jawab</p>
                </div>
                <div class="card3">
                    <h3>Menginspirasi lewat kisah pendakian</h3>
                    <p>Berbagi pengalaman dan cerita inspiratif dari para pendaki untuk memotivasi perjalananmu.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="Tips">
        <div class="box2">
            <h2>Siap Mendaki, Siap Menang!</h2>
            <p>Berikut adalah panduan penting sebelum berangkat mendaki.</p>
            <div>
                <button class="tips-trik">💡 Baca Tips & Trik Mendaki</button>
            </div>
        </div>
        <div class="box3">
            <div class="card4">
                <h3>Persiapan Awal</h3>
                <p>Latihan fisik, rencanakan itinerary, cek cuaca</p>
            </div>
            <div class="card5">
                <h3>Perlengkapan Wajib</h3>
                <p>Carrier, sepatu gunung, tenda, jaket, logistik, P3K</p>
            </div>
            <div class="card6">
                <h3>Etika Pendakian</h3>
                <p>Bawa turun sampahmu, Jangan rusak alam, Hormati sesama pendaki</p>
            </div>
        </div>
    </div>
    <div class="gunung">
        <h2>The Best Mountain for Hikers</h2>
        <div class="mountain-list">
            @foreach($mountains as $mountain)
                <div class="mountain-card">
                    <img src="{{ asset('storage/'.$mountain->gambar) }}" alt="{{ $mountain->nama }}">
                    <h3>{{ $mountain->nama }}</h3>
                    <p>{{ $mountain->lokasi }}</p>
                    <p>{{ $mountain->deskripsi }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="quote">
        <h1>"Each path tells a story, each summit crowns a journey."</h1>
    </div>
    <div id="galeri">
        <h2>Galeri Foto Pendaki</h2>
        <div class="galeri-container">
            @foreach($galleries as $gallery)
                <div class="galeri-card">
                    <img src="{{ asset('storage/'.$gallery->gambar) }}" alt="{{ $gallery->judul }}">
                    <h4>{{ $gallery->judul }}</h4>
                    <p>{{ $gallery->lokasi }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div id="contact">
        <div class="box4">
        <h2>Mari Ngobrol, Kami Siap Mendengar</h2>
        <p>Punya saran atau pertanyaan? Tinggalkan pesanmu di sini.</p>
    </div>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="box-input">
        @csrf
        <div class="input-email">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="example@mail.com">
        </div>
        <div class="input-message">
            <label for="message">Pesan</label>
            <textarea name="pesan" placeholder="Tulis pesanmu di sini..."></textarea>
        </div>
        <button type="submit" class="btn-send">Kirim</button>
    </form>
    </div>
</body>
</html>
