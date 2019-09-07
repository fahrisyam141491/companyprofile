<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>COMPANY PROFILE FAHRI</title>

      <!-- stylesheet -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <script src="{{ asset('js/stylejs.js') }}"></script>

      <!-- google fonts -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque:300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->

      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- icons -->
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
      <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>

<body>
      
      <a name="home"></a>
      <div class="wrapper">

            <!--------------- hero section starts here --------------->

            <div class="video-container">
                  <video playsinline autoplay muted loop id="bgvid">
                        <source src="{{ asset('video/examplecp.mp4') }}" type="video/mp4">
                  </video>
            </div>

            <div class="header">
                  <h1>We are here for manage your Work.</h1>
            </div>

            <!--------------- hero section ends here --------------->

            <!--------------- navbar starts here --------------->

            <nav class="nav">
                  <span id="brand">
                        <a href="index.html">SkuyLiving</a>
                  </span>

                  <ul id="menu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#team">Our team</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#berita">Berita</a></li>
                  </ul>

                  <div id="toggle">
                        <div class="span">menu</div>
                  </div>

            </nav>

            <div id="resize">
                  <div class="close-btn">close</div>

                  <ul id="menu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#team">Our team</a></li>
                        <li><a href="#contact">Contact</a></li>
                  </ul>
            </div>

            <!--------------- navbar ends here --------------->

            <div class="content">

            <!--------------- about section starts here --------------->

            <a name="about"></a>

           <section class="story">
      

                  <div class="container-fluid">

                        <div class="section-data">

                              <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">01</div>
                                    <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">{{ \App\About::where('id', 1)->value('judul') }}</div>
                              </div>

                              <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6 section-info wow fadeInUp" data-wow-delay="0.6s">
                                          {{ \App\About::where('id',1)->value('isi') }}
                                    </div>
                              </div>

                        </div>

                  </div>

           </section>

            <!--------------- about section ends here --------------->

            <!--------------- services section starts here --------------->

            <a name="services"></a>

           <section class="services">

            <div class="container-fluid">

                  <div class="section-data">
                        @foreach(\App\Service::all() as $key => $value)
                        <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">02</div>
                              <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">{{$value->judul}}</div>
                        </div>

                        <div class="row service">
                              <div class="col-md-4"></div>
                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                                   
                                   {!! $value->isi !!}

                              </div>
                        </div>
                        @endforeach
                        
                  </div>

            </div>

           </section>

            <!--------------- services section ends here --------------->

            <!--------------- team section starts here --------------->

            <a name="team"></a>

            <section class="team">

                  <div class="container-fluid">

                        <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">03</div>
                              <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">Our team</div>
                        </div>

                        <div class="row members">

                              <div class="col-md-4"></div>

                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-member">
                                          <div class="team-img team-one"></div>
                                    </div>
                                    <div class="team-title">
                                          <h5>Fahri Syamsudin</h5>
                                          <span>Founder & CEO</span>
                                    </div>
                              </div>

                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                                          <div class="team-member">
                                                <div class="team-img team-two"></div>
                                          </div>
                                          <div class="team-title">
                                                <h5>Farhan Syamsudin</h5>
                                                <span>Co-Founder</span>
                                          </div>
                                    </div>

                        </div>

                  </div>

            </section>
            
            <!--------------- team section ends here --------------->

            <!--------------- newsletter section starts here --------------->

           <section class="newsletter">

                  <div class="container">

                        <div class="row">
                              <div class="col-md-12">
                                    <div class="news-data">
                                    <div class="section-subheading">
                                          <h1 class="wow fadeInUp" data-wow-delay="0.3s">Subscribe to our newsletter</h1>
                                    </div>

                                    <div class="input-group wow fadeInUp" data-wow-delay="0.4s">
                                          <input type="email" class="form-control" placeholder="Enter your email">
                                          <span class="input-group-btn">
                                                <button class="btn" type="submit">Subscribe</button>
                                          </span>
                                    </div>
                                    </div>
                              </div>
                        </div>

                  </div>

           </section>

            <!--------------- newsletter section ends here --------------->

            <!--------------- contact section starts here --------------->

            <a name="contact"></a>

            <section class="contact">

                  <div class="container-fluid">

                        <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">04</div>
                              <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">Contact us</div>
                        </div>

                        <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-6 icon-title wow fadeInUp" data-wow-delay="0.5s">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur deleniti eveniet quisquam sapiente obcaecati consequuntur.</div>
                        </div>

                        <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-6">

                                    <form action="{{route('saveSend')}}" name="contact-form" id="contact-form" method="post">
                                          @csrf
                                          <ul>
                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                      <label for="contact-name">Name :</label>
                                                      <div class="textarea">
                                                            <input type="text" name="name" id="contact-name" required>
                                                      </div>
                                                </li>
                                                <br>
                                                <li class="wow fadeInUp" data-wow-delay="0.7s">
                                                      <label for="contact-email">E-mail :</label>
                                                      <div class="textarea">
                                                            <input type="email" name="email" id="contact-email" required>
                                                      </div>
                                                </li>
                                                <br>
                                                <li class="wow fadeInUp" data-wow-delay="0.8s">
                                                     <label for="contact-project">Message :</label> 
                                                     <div class="textarea">
                                                     <textarea name="message" id="contact-project" rows="6" required></textarea>
                                                     </div>
                                                </li>
                                          </ul>
                                          <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp" data-wow-delay="0.9s">Send</button>

                                    </form>
                              </div>
                        </div>

                  </div>

            </section>

            <a name="berita"></a>

           <section class="story">
      

                  <div class="container-fluid">

                        <div class="section-data">

                              <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">05</div>
                                    <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">{{ \App\Berita::where('id', 1)->value('judul') }}</div>
                              </div>

                              <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6 section-info wow fadeInUp" data-wow-delay="0.6s">
                                          {{ \App\Berita::where('id',1)->value('isi') }}
                                    </div>
                              </div>

                        </div>

                  </div>

           </section>

            <!--------------- footer starts here --------------->

            <div class="footer">

                  <div class="container">

                        <div class="info">

                              <div class="row">
                                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s" id="address">
                                          <p>Work area</p>
                                          <h4>Tanjung Sanyang</h4>
                                          <h4>Jakarta Timur</h4>
                                          <h4>+62 858 2942 3212</h4>

                                          <br><br>
                                    </div>

                                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s" id="media">
                                          <ul>
                                                <li><a href="https://www.facebook.com/fahri.syamsudin.1?ref=bookmarks" target="_blank" class="akun"><ion-icon name="logo-facebook"></ion-icon></a></li>

                                                <li><a href="https://www.instagram.com/fahri.sym_/" target="_blank" class="akun"><ion-icon name="logo-instagram"></ion-icon></a></li>

                                                <li><a href="https://twitter.com/fahri_syamsudin" target="_blank" class="akun"><ion-icon name="logo-twitter"></ion-icon></a></li>

                                                <li><a href="https://www.youtube.com/channel/UCemCly08pqgVkxNER2QSGTQ" target="_blank"><ion-icon name="logo-youtube" class="akun"></ion-icon></a></li>
                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s" id="mail">
                                          <p>Say Hello To</p>
                                          <h4>US</h4>

                                          <br><br>
                                    </div>
                              </div>

                        </div>

                  </div>

            </div>

            <!--------------- footer ends here --------------->

            </div>

      </div>


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</body>
</html>


