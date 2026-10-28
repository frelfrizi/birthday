<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#6c1d2a">
    <meta name="description" content="Sebuah rangkaian kecil untuk merayakan kamu dan cerita kita.">
    <title>Happy Birthday, Sayang ♡</title>
    <link rel="stylesheet" href="{{ asset('storybook.css') }}">
    <script src="{{ asset('storybook.js') }}" defer></script>
</head>
<body>
    <div class="floating-hearts" aria-hidden="true">
        <span class="floating-heart">♡</span>
        <span class="floating-heart">♥</span>
        <span class="floating-heart">♡</span>
        <span class="floating-heart">♡</span>
        <span class="floating-heart">♥</span>
        <span class="floating-heart">♡</span>
        <span class="floating-heart">♡</span>
        <span class="floating-heart">♥</span>
        <span class="floating-heart">♡</span>
        <span class="floating-heart">♡</span>
    </div>

    <a class="skip-link" href="#cerita">Lewati ke cerita</a>

    <main class="storybook" id="cerita">
        <section class="panel panel--wine panel--hero" aria-labelledby="hero-title">
            <span class="corner-flower corner-flower--top" aria-hidden="true">✳</span>
            <p class="eyebrow">sebuah cerita kecil untukmu</p>
            <h1 id="hero-title">Happy Birthday<br><em>Sayang</em></h1>
            <p class="hero-copy">Untuk orang yang membuat hari-hari biasa terasa istimewa.</p>

            <figure class="portrait-frame">
                <div class="photo-placeholder photo-placeholder--hero">
                    <img src="{{ asset('images/1.jpeg') }}" alt="Potretmu di hari ulang tahun">
                    <span class="photo-caption">the birthday girl</span>
                </div>
                <span class="frame-sparkle" aria-hidden="true">✦</span>
            </figure>

            <a class="pill-link" href="#know-you">lanjut ke cerita <span aria-hidden="true">↘</span></a>
            <p class="hero-date">hari ini tentang kamu, selalu</p>
            <span class="corner-flower corner-flower--bottom" aria-hidden="true">✳</span>
        </section>

        <section id="know-you" class="panel panel--wine panel--portrait" aria-labelledby="know-title">
            <p class="chapter-label chapter-label--light">01 <span>— tentang kamu</span></p>
            <h2 id="know-title">Getting to Know<br><em>You</em></h2>

            <figure class="feature-photo">
                <div class="photo-placeholder photo-placeholder--soft">
                    <img src="{{ asset('images/2.jpeg') }}" alt="Potret favoritmu">
                </div>
                <figcaption>the one I choose, every day</figcaption>
            </figure>

            <p class="light-copy">Caramu tertawa, bercerita, dan membuat siapa pun merasa pulang—semuanya adalah hal-hal kecil yang kusimpan baik-baik.</p>
            <span class="tiny-star" aria-hidden="true">✦</span>
        </section>

        <section class="panel panel--paper panel--wallpaper" aria-labelledby="photostrip-title">
            <p class="chapter-label">02 <span>— potongan waktu</span></p>
            <h2 class="visually-hidden" id="photostrip-title">Potongan kecil kenangan kita</h2>
            <p class="wallpaper-caption">potret dirimu yang selalu jadi favoritku</p>

            <div class="film-strip" role="group" aria-label="Tiga potret dirimu">
                <div class="photo-placeholder photo-placeholder--strip"><img src="{{ asset('images/3-1.jpeg') }}" alt="Potretmu 3-1"></div>
                <div class="photo-placeholder photo-placeholder--strip"><img src="{{ asset('images/3-2.jpeg') }}" alt="Potretmu 3-2"></div>
                <div class="photo-placeholder photo-placeholder--strip"><img src="{{ asset('images/3-3.jpeg') }}" alt="Potretmu 3-3"></div>
            </div>
            <span class="strip-date">my favorite girl, always</span>
        </section>

        <section class="panel panel--wine panel--collage" aria-labelledby="collage-title">
            <div class="collage-moon" aria-hidden="true"></div>
            <p class="chapter-label chapter-label--light">03 <span>— dunia kecil kita</span></p>
            <h2 id="collage-title">Only Us,<br><em>Always</em></h2>

            <div class="polaroid-cloud" aria-label="Tempat untuk dua foto kenangan">
                <figure class="polaroid polaroid--one">
                    <div class="photo-placeholder photo-placeholder--polaroid"><img src="{{ asset('images/4-1.jpeg') }}" alt="Potretmu 4-1"></div>
                    <figcaption>that day</figcaption>
                </figure>
                <figure class="polaroid polaroid--two">
                    <div class="photo-placeholder photo-placeholder--polaroid"><img src="{{ asset('images/4-2.jpeg') }}" alt="Potretmu 4-2"></div>
                    <figcaption>with you</figcaption>
                </figure>
                <span class="polaroid-heart" aria-hidden="true">♥</span>
            </div>
            <p class="light-copy collage-copy">Di antara begitu banyak tempat, favoritku selalu saat berada di sampingmu.</p>
        </section>

        <section class="panel panel--paper" aria-labelledby="years-title">
            <p class="chapter-label">04 <span>— perjalananmu</span></p>
            <h2 id="years-title"><span class="number-title">17</span> Tahun<br><em>Penuh Cerita</em></h2>
            <p class="section-intro">Tujuh belas tahun tumbuh menjadi seseorang yang begitu aku banggakan.</p>

            <ol class="timeline timeline--four timeline--compact">
                <li><span class="timeline-heart" aria-hidden="true">♡</span><span class="timeline-title">Mimpi</span></li>
                <li><span class="timeline-heart" aria-hidden="true">♡</span><span class="timeline-title">Berani</span></li>
                <li><span class="timeline-heart" aria-hidden="true">♡</span><span class="timeline-title">Bertumbuh</span></li>
                <li><span class="timeline-heart" aria-hidden="true">♡</span><span class="timeline-title">Bersinar</span></li>
            </ol>

            <p class="paper-note">Semoga tahun ini penuh hal-hal baik, pelukan yang lama, tawa yang lepas, dan semua impian yang pelan-pelan jadi nyata.</p>
            <div class="heart-row" aria-hidden="true"><span>♥</span><span>♥</span><span>♥</span></div>
        </section>

        <section class="panel panel--paper panel--song" aria-labelledby="song-title">
            <p class="chapter-label">05 <span>— lagu kita</span></p>
            <h2 id="song-title">Song That Reminds<br><em>Me of Us</em></h2>

            <figure class="album-card">
                <div class="album-art">
                    <img src="{{ asset('images/lagu.png') }}" alt="Sampul lagu Bunga oleh Bagas Zaki">
                </div>
                <figcaption>
                    <span class="track-name">Bunga</span>
                    <span class="track-artist">Bagas Zaki</span>
                    <span class="track-rule" aria-hidden="true"><i></i></span>
                </figcaption>
            </figure>
            <p class="paper-note song-note">Ada lagu yang selesai diputar, tapi rasanya tetap tinggal—seperti kamu.</p>
        </section>

        <section class="panel panel--paper panel--moments" aria-labelledby="moments-title">
            <p class="chapter-label">06 <span>— album kita</span></p>
            <h2 id="moments-title">Our<br><em>Moments</em></h2>
            <p class="section-intro">Enam kotak kecil, dan terlalu banyak cerita untuk diceritakan.</p>

            <div class="memory-grid" role="group" aria-label="Enam potret dirimu">
                <div class="photo-placeholder photo-placeholder--memory memory-one"><img src="{{ asset('images/6-1.jpeg') }}" alt="Potretmu 6-1"></div>
                <div class="photo-placeholder photo-placeholder--memory memory-two"><img src="{{ asset('images/6-2.jpeg') }}" alt="Potretmu 6-2"></div>
                <div class="photo-placeholder photo-placeholder--memory memory-three"><img src="{{ asset('images/6-3.jpeg') }}" alt="Potretmu 6-3"></div>
                <div class="photo-placeholder photo-placeholder--memory memory-four"><img src="{{ asset('images/6-4.jpeg') }}" alt="Potretmu 6-4"></div>
                <div class="photo-placeholder photo-placeholder--memory memory-five"><img src="{{ asset('images/6-5.jpeg') }}" alt="Potretmu 6-5"></div>
                <div class="photo-placeholder photo-placeholder--memory memory-six"><img src="{{ asset('images/6-6.jpeg') }}" alt="Potretmu 6-6"></div>
            </div>
            <p class="grid-caption">setiap momen bersamamu terasa istimewa</p>
        </section>

        <section class="panel panel--wine panel--future" aria-labelledby="future-title">
            <p class="chapter-label chapter-label--light">07 <span>— yang akan datang</span></p>
            <h2 id="future-title">To Many More Days<br><em>Together</em></h2>
            <p class="light-copy">Untuk semua hal yang belum kita coba, tempat yang belum kita datangi, dan hari-hari biasa yang akan jadi luar biasa.</p>

            <ol class="timeline timeline--four timeline--light">
                <li><span class="timeline-heart" aria-hidden="true">♡</span><span class="timeline-title">Lebih banyak tawa</span></li>
                <li><span class="timeline-heart" aria-hidden="true">♡</span><span class="timeline-title">Tempat baru</span></li>
                <li><span class="timeline-heart" aria-hidden="true">♡</span><span class="timeline-title">Mimpi bersama</span></li>
                <li><span class="timeline-heart" aria-hidden="true">♡</span><span class="timeline-title">Selalu kamu</span></li>
            </ol>

            <p class="future-signoff">hari ini, besok, dan seterusnya <span aria-hidden="true">♡</span></p>
        </section>

        <section class="panel panel--wine panel--letter" id="surat" aria-labelledby="letter-title">
            <div class="letter-paper">
                <span class="seal" aria-hidden="true">♥</span>
                <p class="chapter-label">08 <span>— surat kecil</span></p>
                <h2 id="letter-title">Untukmu,<br><em>selalu</em></h2>
                <p class="letter-lead">Di hari istimewamu, ada satu hal yang ingin selalu kuingatkan.</p>
                <div class="letter-rule" aria-hidden="true"></div>
                <p class="letter-copy">Terima kasih sudah hadir, tumbuh, dan memilih berjalan bersamaku. Semoga hari-harimu dipenuhi alasan untuk tersenyum, ruang untuk bermimpi, dan orang-orang yang menyayangimu dengan tulus.</p>
                <p class="letter-signature">— Aku, yang selalu menyayangimu</p>

                <div class="surprise-note" id="surprise-note" hidden>
                    <p>Selamat ulang tahun, rumah paling nyaman. Mari kita isi halaman berikutnya dengan hal-hal baik, cerita baru, dan banyak sekali pelukan.</p>
                    <span aria-hidden="true">♡</span>
                </div>

                <button class="letter-button" type="button" aria-expanded="false" aria-controls="surprise-note">
                    <span>Buka pesan kecil</span><span class="button-heart" aria-hidden="true">♡</span>
                </button>
            </div>
        </section>

        <footer class="page-footer">
            <span aria-hidden="true">♡</span>
            <p>ceritanya masih panjang, dan aku senang menjalaninya bersamamu</p>
            <span aria-hidden="true">♡</span>
        </footer>
    </main>
</body>
</html>
