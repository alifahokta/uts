<!DOCTYPE html>
<html lang="en">

<section class="menu_bar" >
@yield('content')
<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
          <a class="navbar-brand" href="/home">
              <!-- <i class="fa fa-line-chart"></i> -->
              Sistem Informasi Wisata Provinsi Bali
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/home#about" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="/home#project" class="nav-link">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a href="/berita" class="nav-link">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="/kontak" class="nav-link contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</section>