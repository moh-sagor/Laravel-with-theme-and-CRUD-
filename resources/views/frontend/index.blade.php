<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <title>Responsive Web Layout</title>
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/CSS/style.css') }}" />
  </head>
  <body>
    <!-- header start -->
    <header>
      <div class="navbar">
        <div class="nav-item">
          <div class="nav-logo">
            <img src="{{ asset('frontend')}}/images/icons/logo.png" alt="" />
            <h3><a href="">Ieda</a></h3>
          </div>
          <div class="nav-link">
            <a href="">Home</a>

            <a href="">About</a>

            <a href="">Works</a>

            <img src="{{ asset('frontend')}}/images/icons/sagor-img.png" alt="" />
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
    <main>
      <!-- top player and top blogs -->
      <section class="container">
        <!-- .top-players>.players>.player*6>img[src="/images/players/player-$.png"]+h3{player-$} -->
        <div class="top-players">
          <h2 class="section-title">Top Players</h2>
          <div class="players">
            <div class="player">
              <img src="{{ asset('frontend')}}/images/players/player-1.png" alt="" />
              <h3 class="player-name">John Smith</h3>
            </div>
            <div class="player">
              <img src="{{ asset('frontend')}}/images/players/player-2.png" alt="" />
              <h3 class="player-name">Pro Rasel</h3>
            </div>
            <div class="player">
              <img src="{{ asset('frontend')}}/images/players/player-3.png" alt="" />
              <h3 class="player-name">Abu Sufian</h3>
            </div>
            <div class="player">
              <img src="{{ asset('frontend')}}/images/players/player-4.png" alt="" />
              <h3 class="player-name">Husain Bolt</h3>
            </div>
            <div class="player">
              <img src="{{ asset('frontend')}}/images/players/player-5.png" alt="" />
              <h3 class="player-name">Messi</h3>
            </div>
            <div class="player">
              <img src="{{ asset('frontend')}}/images/players/player-6.png" alt="" />
              <h3 class="player-name">Mbappe</h3>
            </div>
          </div>
        </div>
        <hr />

        <div class="top-blogs">
          <h2 class="section-title">Top Blogs</h2>
          <div class="blogs">
            <div class="blog">
              <div class="thumbnil">
                <img src="{{ asset('frontend')}}/images/blogs/blog-1.png" alt="" />
                <div class="blog-info">
                  <h3 class="blog-title">13 of my favourite UI/UX Goodies</h3>
                  <p class="blog-author">by <a href="">Danny Sapio</a></p>
                </div>
              </div>
            </div>
            <div class="blog">
              <div class="thumbnil">
                <img src="{{ asset('frontend')}}/images/blogs/blog-2.png" alt="" />
                <div class="blog-info">
                  <h3 class="blog-title">UI cheat sheet: list vs grids</h3>
                  <p class="blog-author">by <a href="">Ress Gadd</a></p>
                </div>
              </div>
            </div>
            <div class="blog">
              <div class="thumbnil">
                <img src="{{ asset('frontend')}}/images/blogs/blog-3.png" alt="" />
                <div class="blog-info">
                  <h3 class="blog-title">
                    7 typography tips for interface design
                  </h3>
                  <p class="blog-author">by <a href="">Jeremiah Lam</a></p>
                </div>
              </div>
            </div>
            <div class="blog">
              <div class="thumbnil">
                <img src="{{ asset('frontend')}}/images/blogs/blog-4.png" alt="" />
                <div class="blog-info">
                  <h3 class="blog-title">Your logo is copied</h3>
                  <p class="blog-author">by <a href="">Ferdinand Vogler</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <main class="second-main">
      <section class="container">
        <div class="latest-course">
          <h2 class="section-title">Latest Course</h2>
          <div class="courses">
            <div class="course">
              <div class="course-thumbnil">
                <img src="{{ asset('frontend')}}/images/courses/course-1.png" alt="" />
                <div class="course-info">
                  <h3>React - The Complete Guide 2023</h3>
                  <p class="course-author">Sagor Hossain</p>
                  <div class="course-time-star">
                    <div>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star empty"></i>
                      <span class="rating">4.5</span>
                    </div>

                    <div class="duration">
                      <i class="fa-regular fa-clock"></i> 01:30hr
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="course">
              <div class="course-thumbnil">
                <img src="{{ asset('frontend')}}/images/courses/course-2.png" alt="" />
                <div class="course-info">
                  <h3>Powerpoint 2022-Master Powerpoint Course 2023</h3>
                  <p class="course-author">Sagor Hossain</p>
                  <div class="course-time-star">
                    <div>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star empty"></i>
                      <span class="rating">4.5</span>
                    </div>
                    <div class="duration">
                      <i class="fa-regular fa-clock"></i>
                      01:30hr
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="course">
              <div class="course-thumbnil">
                <img src="{{ asset('frontend')}}/images/courses/course-3.png" alt="" />
                <div class="course-info">
                  <h3>The Complete JavaScript Course 2023</h3>
                  <p class="course-author">Sagor Hossain</p>
                  <div class="course-time-star">
                    <div>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star filled"></i>
                      <i class="fa-solid fa-star empty"></i>
                      <span class="rating">4.5</span>
                    </div>
                    <div class="duration">
                      <i class="fa-regular fa-clock"></i> 01:30hr
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
