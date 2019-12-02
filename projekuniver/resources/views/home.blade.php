@extends('layouts.master')

<style>
body {
     background: url('background.jpg');
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
  }

body {
  background: url('');
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
}

section {cara menampilkan uks dari databa
  min-height: 420px;
}

#satu {
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
.event {
  height: 350px;
  width: 250px;
  margin-bottom: 40px;

  -webkit-transform: scale(1.08);
  transform: scale(1.08);
  background: transparent;
  color: white;
  text-shadow: 1px 2px 2px #111;
  transition: all 0.8s;
  -moz-transition: all 0.8s;
  -webkit-transition: all 0.8s;
  -ms-transition: all 0.8s;
  -o-transition: all 0.8s;
}
#social:hover{
  -webkit-transform:scale(1.1);
  -moz-transform:scale(1.1);
  -o-transform:scale(1,1);
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration:0.5s;
}

#imgop {
  opacity: 0.6;
  filter: alpha(opacity=20);
  /* For IE8 and earlier */
}

.imgtrans {
  opacity: 0.3;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}
.profil-gradient{
  background: linear-gradient(to bottom, #66ccff 0%, #6600ff 100%);
}

.kegiatan{

}

.waktu-slider {
  position: absolute;
  width:3900px;

  /*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
  animation-name:slider;
  animation-duration:16s;
  animation-timing-function: ease-in-out;
  animation-iteration-count:infinite;
  -webkit-animation-name:slider;
  -webkit-animation-duration:16s;
  -webkit-animation-timing-function: ease-in-out;
  -webkit-animation-iteration-count:infinite;
  -moz-animation-name:slider;
  -moz-animation-duration:16s;
  -moz-animation-timing-function: ease-in-out;
  -moz-animation-iteration-count:infinite;
  -o-animation-name:slider;
  -o-animation-duration:16s;
  -o-animation-timing-function: ease-in-out;
  -o-animation-iteration-count:infinite;
}


</style>

@section('title', 'universal | Home')

@section('content')

<!-- JUMBOTRON -->
<section id="home"  class="home" style="background-color:#066dc2">
  <div class="jumbotron text-center bg-transparent">
    <div class="container" style="padding-top:80px">
      <img src="img/logoPPMU.png" width="25%" class="rounded-circle img-thumbnail mb-4">
      <h3 class="display-5 font-weight-bold">Pondok Pesanten Mahasiswa Universal</h3>
      <p class="lead ">Jl. Desa Cipadung No.01, RT.03/RW.08, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614</p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="background-color : #0e74c0">
        Hubungi kami
      </button>
      <div class="collapse" id="collapseExample">
        <div class="card card-body"style="background-color:white">
          <ul class="list-inline social-buttons text-center mt-1">
            <li class="list-inline-item">
              <a href="https://www.facebook.com" target="_blank">
                <i id="social"class="fa fa-facebook-square fa-3x"></i>
              </a>
            </li>
            <li class="list-inline-item">

              <a href="https://www.instagram.com" target="_blank"><img src="img/instagram.jpeg" width="60px"
                <i id="social"class="fa fa-instagram-square fa-3x"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.twitter.com" target="_blank">
                <i id="social"class="fa fa-twitter-square fa-3x"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- JUMBOTRON -->

<!-- BERITA -->

<section id="kegiatan" class="kegiatan"style="background-color:#42e0f5">
  <div class="container pb-5" id="kegiatan" class="kegiatan">
    <div class="row" style="padding-top:100px; padding-bottom:100px">
      <div class="col-sm-6" style="border:2px solid white ;padding-top:30px; background-color:transparent">
        <div class="">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner justify-content-center" style="background:">
              @foreach($ukss as $i => $uks)
              <div class="carousel-item @if($i == 0) {{ 'active' }} @endif justify-content-center">
                <a href="{{ route('link', $uks->id) }}"><img src="img_uks/{{$uks->gambar_uks}}" class="mx-auto d-block" alt="Cinque Terre" "border" height="400px" width="100%"></a>

              </div>
              @endforeach
            </div>
            <div class="container">
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-6">
        <div class="">
          <div class="jumbotron jumbotron-fluid">
            <div class="font-weight-bold text-center">
              Ayo lihat kabar pupoler lainnya
            </div>
          </div>
        </div>
        <div class="col">
          <div class="">
            <div class="container">
              <div class="embed-responsive embed-responsive-16by9">

                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JxUnUo5lfmQ?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- END BERITA -->


<!-- PROFIL -->
<section id="profil" class="profil " style="padding-bottom:100px; padding-top:110px; background-color:#42f5cb">
  <center>
    <h1><strong style="color:black"> Profile</strong><h1>
    </center>
  <br>
  <br>

  <div class="container" id="profil">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="row text-center mx-0">
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#sejarah" aria-expanded="true" aria-controls="sejarah" data-toggle="tooltip" data-placement="top" title="Sejarah">
                  SEJARAH
                </button>
              </h2>
            </div>
          </div>
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#visimisi" aria-expanded="false" aria-controls="visimisi">
                  VISI MISI
                </button>
              </h2>
            </div>
          </div>
          <div class="col">
            <div class="card-header-group bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#dasarhukum" aria-expanded="false" aria-controls="dasarhukum">
                  DASAR HUKUM
                </button>
              </h2>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div id="sejarah" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body text-justify">
            Salah satu strategi perubahan masyarakat  yang diakui keandalannya adalah normative-reeducative strategy, yaitu strategi perubahan masyarakat  melalui pelembagaan ‘nilai dan norma’ dalam kehidupan masyarakat. Norma dan nilai tersebut termasyarakatkan melalui pendidikan (education-reeducation). Proses pendidikan yang baik dan sistematis akan  melahirkan perubahan paradigma berpikir masyarakat, yang pada gilirannya akan mempercepat proses perubahan masyarakat.  Pertumbuhan suatu masyarakat dimulai dari produktivitas individu, dan produktivitas individu diperoleh melalui pendidikan lewat efeknya pada peningkatan kemampuan manusia dan motivasi manusia untuk berprestasi.
            Tentu saja, norma, nilai, serta proses pendidikan  yang harus dikembangkan bukan semata-mata yang bersifat antroposentris (yang berorientasi pada pemenuhan kebutuhan fisik duniawi), tetapi juga harus secara seimbang mengembangkan nilai, norma, dan proses pendidikan teosentris (aspek moral, spiritual, ketuhanan). Berbagai penelitian tentang pengembangan Sumber Daya manusia menunjukkan bahwa hard skill (kemampuan intelektual, kecakapan teknis) menyumbang 15% saja bagi kesuksesan hidup seseorang. Sisanya, 85 % ditentukan oleh soft skill (akhlak, kepribadian, etos kerja, kejujuran dan sebagainya) yang antara lain dihasilkan oleh pendidikan berkarakter teosentris.
            Sejarah pendidikan Islam Indonesia telah mencatat bahwa pondok pesantren yang dikelola secara serius dan ikhlas, mempunyai keunggulan tersendiri, terutama pada sisi tradisi keilmuan dan transmisi-internalisasi nilai-nilai dan norma. Karena ia senantiasa menebarkan dan menyuarakan tata nilai dan norma-norma agama. Pola kehidupan sosial, budaya, dan keagamaan masyarakat di lingkungan pondok pesantren, umumnya memiliki dasar-dasar nilai, norma, dan tradisi keagamaan yang kuat serta membentuk pola hubungan fungsional-produktif di antara keduanya.<p>
            </p>
            Salah satu misi utama penyelenggaraan Pondok Pesantren sejak awal berdirinya adalah melakukan kegiatan kaderisasi keulamaan dalam tradisi keilmuan yang berorientasi tafaqquh fi al-din sebagai wujud kesadaran kolektif masyarakat (Islam) dalam menghadapi perubahan zaman. Karenanya Pondok Pesantren tumbuh dan berkembang selaras dengan cita agama yang akan segera hilang manakala motif dan corak keagamaan masyarakat juga hilang.
            Belakangan ini, Pondok Pesantren menyimpan banyak persoalan yang menjadikannya tertatih-tatih dalam menapaki perjalanan sejarahnya. Rasanya belum pernah Pondok Pesantren  menghadapi tantangan berat seperti sekarang. Tidak sedikit Pondok Pesantren yang hampir kehilangan modal sosial dan kulturalnya. Di tengah ketertatihannya itu, akhir-akhir ini Pondok Pesantren juga disergap oleh stigma negatif pasca rangkaian teror bom dan isu propaganda ‘Islam radikal’ yang terjadi di Indonesia.
            Padahal, pada dekade 1970-an hingga 1980-an, ketika Lembaga Swadaya Masyarakat (LSM) menjadi mainstream gerakan pemberdayaan masyarakat, Pondok Pesantren dipastikan terlibat sebagai mitra strategis dalam pembangunan masyarakat (community development). Pondok Pesantren terbukti mampu merekam sekaligus mengangkat derajat kehidupan masyarakat sekitarnya.
            Pondok Pesantren sudah selayaknya merevitalisasi kembali peran strategisnya sebagaimana pernah dilakukan pada era 70-an dan 80-an. Lebih dari sekedar itu, kini Pondok Pesantren dituntut untuk terlibat secara aktif dalam kegiatan advokasi untuk mendorong perubahan nilai dan orientasi pembangunan, termasuk dituntut mampu mengajukan konsep-konsep pembangunan alternatif.

            Berdasarkan latar belakang tersebut, dengan senantiasa memohon Bimbingan dan Pertolongan ALLAH Subhanahu Wata’ala serta mohon dukungan dari masyarakat, YAYASAN Suwargi Buwana Djati bercita-cita menjadi bagian dari upaya revitalisasi fungsi dan peran strategis Pondok Pesantren dengan membangun education based community, sebuah konsep pendidikan yang paralel dengan Pondok Pesantren sebagai community college, yakni sistem pendidikan transformatif-emansipatoris berbasis empati, toleransi, semangat perubahan dan pemberdayaan yang berorientasi mewujudkan Kemashlahatan Universal.
          </div>
        </div>
      </div>
      <div class="card">
        <div id="visimisi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <p><h3>Visi Pondok Pesantren Mahasiswa Universal adalah :</h3><br>

              “Menjadi center of exellence dalam Pengkajian dan Pengamalan Nilai-nilai Keislaman inklusif-transformatif-emansipatoris yang berorientasi mewujudkan Kemashlahatan Universal”</p>
              <br>
              <br>
              <p><h3>Misi Pondok Pesantren Mahasiswa Universal adalah :</h3><br><br>

                (1)       Pengembangan wawasan dan tradisi keilmuan yang berorientasi padatafaqquh fi al-din melalui kajian ilmu-ilmu keIslaman (tsaqofah Islamiyyah)secara kritis, holistik, dan mendalam;
                <br><br>
                (2)       Pengembangan wawasan ‘Ulama al-Amilin  melalui penyelenggaraan program pengabdian kepada masyarakat untuk mengamalkan pengetahuan dan keterampilan dalam rangka mewujudkan kemashlahatan universal;
                <br><br>
                (3)       Pengembangan wawasan Imam al-Muttaqin melalui penyiapan kader pemimpin masyarakat yang memiliki kesadaran kritis, kemampuan analisis, daninovatif-kreatif dalam mendorong dan mengelola transformasi sosial;
                <br><br>
                (4)       Pengembangan wawasan Muslim Muttaqien melalui pembentukan kualitas pribadi muslim (Syakhsyiyyah Islamiyyah) berakhlak mulia, empatik, dan toleran, yang mampu hidup bersama dalam masayarakat plural yang berkeadaban (civil society);
                <br><br>
                (5)       Pengembangan nilai-nilai dan tradisi kebudayaan Islam untuk memperkaya khazanah dan menjaga marwah kebudayaan nasional.
                <br><br>
                (6)       Peningkatan profesionalisme pengelolaan Pondok Pesantren melalui kedisiplinan implementasi komitmen dan strategi pencapaian mutu  dan tradisi Pondok Pesantren.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="dasarhukum" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                •	Akta Notaris Pendirian Yayasan Nomor  25 Tanggal 08-09-2010
                •	Akta Notaris Pendirian Cabang Yayasan Nomor  09 Tanggal 10-04-2011
                •	S.K. MENKUMHAM R I Nomor AHU-4556.AH.01.04 Tahun 2010
                •	NPWP  No. 31.229.254.3-426.000
                •	Undang-Undang Dasar 1945 dan Perubahannya
                •	Undang-Undang Nomor 20 Tahun 2003 Tentang Sistem Pendidikan Nasional
                •	Peraturan Pemerintah Nomor 73 Tahun 1991 Tentang Pendidikan Luar Sekolah
                •	Peraturan Pemerintah Nomor 39 Tahun 1992 Tentang Peran serta Masyarakat dalam Pendidikan Nasional
                •	Peraturan Pemerintah Nomor 19 Tahun 2005  Tentang Standar Nasional Pendidikan
                •	Peraturan Pemerintah Nomor 55 Tahun 2007  Tentang Pendidikan Agama dan Pendidikan Keagamaan
              </div>
            </div>


          </div>
          <div class="card">
            <div class="row text-center mx-0 ">
              <div class="col">
                <div class="card-header-group bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#kurikulum" aria-expanded="false" aria-controls="kurikulum">
                      KURIKULUM
                    </button>
                  </h2>
                </div>
              </div>
              <div class="col">
                <div class="card-header-group bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#kbm" aria-expanded="false" aria-controls="kbm">
                      K B M
                    </button>
                  </h2>
                </div>
              </div>
              <div class="col">
                <div class="card-header-group bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#sistempenilaian" aria-expanded="false" aria-controls="sistempenilaian">
                      SISTEM PENILAIAN
                    </button>
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="kurikulum" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>
<h3>1. Karakter Kurikulum</h3>

Kurikulum Pondok Pesantren Mahasiswa Universal bertolak dari beberapa prinsip:

  <ul>
     Prinsip kesinambungan ajaran, pemikiran, dan tradisi keIslaman dari masa ke masa
  </ul>

  <ul>
    Prinsip kritis, holistik, mendalam, dan bertanggungjawab dalam kajian keIslaman, baik secara material maupun metodologikal (ushul)
  </ul>
  <ul>
    Prinsip dinamis dalam merespons dan mengantisipasi perkembangan zaman
  </ul>
    <ul>
      Prinsip gradual dalam penyajian dan pengajarannya sesuai dengan jenjang dan tingkat pendidikan
    </ul>
    <br>

<h3>2. Komponen Kurikulum</h3>

Komponen Kurikulum Pondok Pesantren Mahasiswa Universal mencerminkan integrasi keilmuan Pesantren yang terdiri dari:

    <ul>
      Komponen studi teks (tahlil al-nash) yang secara referensial merujuk kepada al-Quran dan as-Sunnah, dan kitab-kitab klasik dan kontemporer.
    </ul>

<ul>
  Komponen pengembangan wawasan substansial yang mengintegrasikan beberapa disiplin ilmu-ilmu keIslaman (Aqidah, Tafsir, Hadits, Fiqh, dan lain-lain) sebagai mainstream program studi di Pondok Pesantren;
</ul>
<ul>
  Komponen ilmu-ilmu alat yang meliputi Ushul Fiqh, Qaidah Fiqhiyyah, Keterampilan Bahasa, Mantiq dan Balaghah;

</ul>
<ul>
  Komponen pengembangan karakter/Pribadi Muslim (Syakhsyiyyah Islamiyyah) antara lain meliputi materi tentang Sirah Nabawiyyah, Akhlak, Etika, Hak Asasi Manusia (HAM), dan Civil Society;

</ul>
<ul>
  Komponen pengembangan jiwa kepemimpinan dan kepeloporan yang meliputi materi Kepemimpinan, Pengorganisasian Masyarakat, Psikologi Komunitas, Dinamika Kelompok, Pendidikan Pembebasan, Teologi Pembebasan, Analisis Sosial, Analisis Kekuasaan, Gerakan Sosial, Strategi Advokasi, Social Learning, Riset Kritis, dan lain-lain.

</ul>
<ul>
  Komponen pengembangan kemandirian dan keterampilan hidup (life skills), antara lain meliputi materi tentang Kewirausahaan, Perencanaan Bisnis, Ekonomi Kreatif, Pengembangan Soft skills, Information Technology (IT), dan lain-lain.

</ul>
<ul>
  Komponen pengembangan wawasan dan apresiasi seni budaya antara lain meliputi materi tentang Strategi Kebudayaan, Sejarah Kebudayaan/ Peradaban, Antropologi Budaya, dan lain-lain.

</ul>
<br>
<h3>3. Struktur Kurikulum</h3>

<ul>
  Struktur Kurikulum Pondok Pesantren Mahasiswa Universal terdiri dari susunan ‘Materi Pengajian’ yang secara referensial berbasis dan merujuk kepada al-Quran dan as-Sunnah, dan kitab-kitab klasik (turats) dan kontemporer (‘ashry).

</ul>
<ul>
  Pendidikan dan pengajaran Pondok Pesantren Mahasiswa Universal didesain dengan menggabungkan aspek teori kritis, metodologi partisipatif, dan pengalaman praktis; beramal ‘ilmiah’ berilmu ‘amaliah’.

</ul>
<ul>
  Model pendidikan yang digunakan adalah pendidikan orang dewasa (andragogy), melalui kegiatan ta’lim, tarbiyyah, ta’dib, dan irsyad, dengan menggunakan model pendekatan ‘peran’, model praxis (aksi-refleksi) yang penerapannya dilakukan in-class [bandungan, sorogan, tausiah, diskusi, bahtsul masa’il] dan out-class [riset aksi, outbond, field-study].

</ul>
</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="kbm" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div id="sistempenilaian" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

          <div class="card">
            <div class="row text-center mx-0">
              <div class="col">
                <div class="card-header-group bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#komitmen" aria-expanded="false" aria-controls="komitmen">
                      KOMITMEN MUTU DAN STRATEGI
                    </button>
                  </h2>
                </div>
              </div>
              <div class="col">
                <div class="card-header-group bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#tradisipesantren" aria-expanded="false" aria-controls="tradisipesantren">
                      TRADISI PESANTREN
                    </button>
                  </h2>
                </div>
              </div>
              <div class="col">
                <div class="card-header-group bg-transparent" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#fasilitas" aria-expanded="false" aria-controls="fasilitas">
                      FASILITAS
                    </button>
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div id="komitmen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div id="tradisipesantren" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div id="fasilitas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>Pondok Pesantren Mahasiswa Universal berlokasi di Jalan Desa Cipadung Nomor 1 RT 03/08 Kota Bandung, menempati lahan seluas 1.133 m2.. Adapun fasilitas yang dimiliki antara lain kobong/asrama Santri putera-puteri (2 lantai),  ruang pengajian, fasilitas olahraga, fasilitas kesenian, internet hot-spot, pondok baca, toko/kantin, koperasi syariah, dan lain-lain.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!-- END PROFIL -->

    <!-- UKS -->
    <section id="uks" class="uks" style="padding-top:100px; background-color:">
      <div class="container"style="">
        <center>
          <h1><strong style="color:black"> Artikel Santri</strong><h1>
          </center>
        @foreach($ukss as $uks)
        <div id="social"class="col-md-3"style="float:left">


        <a href="{{ route('linkuks', $uks->id) }}" style="width:300px; height: 300px;border:1px solid black;margin:5px;">


          <img src="img_uks/{{$uks->gambar_uks}}" alt="Snow" style="width:100%; height:50%">
          <p style="margin-left:11%">{{ str_limit($uks->isi_uks, 180,'baca selengkapnya ....')}}</p>


        </a>
        </div>
        @endforeach
      </div>
    </section>




@endsection
