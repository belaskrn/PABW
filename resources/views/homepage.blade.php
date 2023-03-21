<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/homepage.css">

    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->


    <nav class="navbar navbar-dark" data-bs-theme="dark">
      <div class="container">

        <a class="navbar-brand" href="#">
          <img src="img/TicketIn.png" alt="TicketIn" width="120" height="26">
        </a>

        <button class="btn btn-outline-success btn-rounded-white" type="submit">Masuk</button>

      </div>
    </nav>
  </head>

  <body>
    <section class="hero text-white">

      <figure class="quote text-center fw-bold">
        <blockquote class="blockquote">
          <p class="p-5" style="font-size: 2rem;">Hai! Mau cari apa?</p>
        </blockquote>
      </figure>
  
      <div class="container p-3">
        <!-- tab hotel & pesawat -->
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
  
          <li class="nav-item">
            <a class="nav-link active" id="pesawat-tab" data-toggle="tab" href="#pesawat" role="tab" aria-controls="pesawat" aria-selected="true">Pesawat</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotel</a>
          </li>
  
        </ul>
  
        <!-- isi tabs-->
        <div class="tab-content bg-white border border-secondary border-1 rounded p-3 shadow text-black" id="myTabContent">
  
          <div class="tab-pane fade show active" id="pesawat" role="tabpanel" aria-labelledby="pesawat-tab">
            <h3 class="lab mt-3">Penerbangan</h3>
  
            <form class="d-flex flex-column align-items-center">

              <div class="form-row">
                
                <div class="form-group col mt-3">
                  <label for="dest">Asal:</label>
                  <select name="asal" class="form-control" id="dest">
                    <option value="Asal">Asal</option>
                    <option value="Balikpapan">Balikpapan</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Surabaya">Surabaya</option>
                  </select>
                </div>
                <div class="form-group col mt-3">
                  <label for="tuju">Tujuan:</label>
                  <select name="tujuan" class="form-control" id="tuju">
                    <option value="tujuan">Tujuan</option>
                    <option value="Balikpapan">Balikpapan</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Surabaya">Surabaya</option>
                  </select>
                </div>
                <div class="form-group col mt-3">
                  <label for="tanggal">Tanggal Pergi:</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal">
                </div>
                <div class="form-group col mt-3">
                  <label for="kelas">Kelas Kabin:</label>
                  <select name="kelas" class="form-control" id="kelas">
                    <option value="Semua">Semua</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Bisnis">Bisnis</option>
                  </select>
                </div>
              </div>
            
              <div class="form-row">
                <div class="form-group col mt-3">
                  <input class="btn btn-primary" type="submit" name="submit" id="flightsButton" value="Cari Tiket">
                </div>
              </div>
            </form>          
                   
          </div>
  
          <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
            <h3 class="lab mt-3">Hotel</h3>
  
            <form class="d-flex flex-column align-items-center">
              <div class="form-row">
                <div class="form-group col mt-3">
                  <label for="dest">Destinasi</label>
                  <select name="destinasi" class="form-control" id="dest">
                    <option value="Balikpapan">Balikpapan</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Surabaya">Surabaya</option>
                  </select>
                </div>
                <div class="form-group col mt-3">
                  <label for="tanggal">Tanggal Nginep:</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal">
                </div>
              </div>
            
              <div class="form-row">
                <div class="form-group col mt-3">
                  <input class="btn btn-primary" type="submit" name="submit" id="hotelButton" value="Cari Hotel">
                </div>
              </div>
            </form>
          </div>
  
        </div>
      </div>
  
      <!-- memuat file bootstrap.js dan jQuery -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
      </script>

    </section>

    <!-- <section class="about">

      <figure class="quote text-center fw-bold">
        <blockquote class="blockquote">
          <p class="p-5" style="font-size: 2rem;">About Us</p>
        </blockquote>
      </figure>
      
    </section> -->

    <section class='flight-lists pt-3'>

    <div class="container">

      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Button</a>
        </div>
      </div>

      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Button</a>
        </div>
      </div>

    </div>
    </section>


  </body>

  <footer class="text-white py-2">
    <div class="container mt-1 d-flex justify-content-center">
      <a class="navbar-brand" href="#">
        <img src="img/TicketIn.png" alt="Logo" width="100" height="22" class="d-inline-block align-text-top">
        2023
      </a>
    </div>
  </footer>

</html>
