@extends('layouts.main')
@section('css', '/css/style.css')
@section('content')
      <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
          <div class="container">
            <h1>Selamat Datang</h1>
            <h2>Ini Adalah Website Resmi Puskesmas Sehat</h2>
            <!-- ======= Button Lihat antrian ======= -->
          <div class="buttonantrian">
            <a href="/antrean" class="btn btn-primary">Lihat Antrean</a>
      </div>
          </div>
        </section>
      <!-- End Hero -->
    <main id="main">
        <!-- ======= Kenapa kita Section ======= -->
            <section id="why-us" class="why-us">
              <div class="container">

                <div class="row">
                  <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                      <h3>Sistem Antrian Online</h3>
                      <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid iure, recusandae qui autem quam cupiditate impedit corporis nesciunt earum molestiae delectus voluptas, nostrum ut iste cumque doloribus nam alias cum. 
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                      <div class="row">
                        <div class="col-xl-4 d-flex align-items-stretch">
                          <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bx-plus-medical"></i>
                            <h4>Poli Umum</h4>
                            <p>
                              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati laudantium cum, nesciunt, doloremque voluptatem magni cumque in sed modi totam excepturi voluptatum earum quo alias magnam, praesentium facilis reiciendis assumenda?
                            </p>
                          </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                          <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bx-dna"></i>
                            <h4>Poli Gigi</h4>
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sint corporis veniam eum, aperiam harum nostrum adipisci beatae autem, nihil ex maxime cum nesciunt ducimus labore nam laborum, voluptas provident?
                            </p>
                          </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                          <div class="icon-box mt-4 mt-xl-0">
                            <i class="bx bxs-first-aid"></i>
                            <h4>Poli THT</h4>
                            <p>
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis delectus quia odio repudiandae quam impedit, recusandae voluptatem sit velit magnam. Autem facere provident odit voluptatibus cumque dolorem ea, dolorum vero.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </section>
        
        <!-- End Kenapa kita Section -->

        <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
              <div class="container">

                <div class="section-title">
                  <h2>Contact</h2>
                </div>
              </div>

              <div class="container">
                <div class="row mt-5">

                  <div class="col-lg-4">
                    <div class="info">
                      <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Lokasi:</h4>
                        <p>Bonang</p>
                      </div>

                      <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>Lutfi@gmail.com</p>
                      </div>

                      <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>085244456154</p>
                      </div>

                    </div>

                  </div>

                  <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                      </div>
                      <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                  </div>

                </div>

              </div>
            </section>
        <!-- End Contact Section -->

      </main>
@endsection