

  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Learn Bootstrap 4 with MDB</h1>

            <hr class="hr-light">

            <p>
              <strong>Best & free guide of responsive web design</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p>

            <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-indigo btn-lg">Start free tutorial
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form action="login" method="post" accept-charset="utf-8">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Login</strong>
                  </h3>
                  <hr>
                  <div id="infoMessage"><?php echo $message;?></div>
                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" name="identity" id="identity" class="form-control">
                    <label for="identity">Username</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-unlock-alt prefix grey-text"></i>
                    <input type="password" name="password" id="password" class="form-control">
                    <label for="password">Password</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" value="1" id="remember" class="custom-control-input">
                      <label class="custom-control-label" for="remember">Remember Me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-indigo">Submit</button>
                  </div>
                  <div class="text-center">
                    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
                  </div>
                </form>
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Material Design for Bootstrap</h3>
            <p>This template is created with Material Design for Bootstrap (
              <strong>MDB</strong> ) framework.</p>
            <p>Read details below to learn more about MDB.</p>
            <!-- Main heading -->

            <hr>

            <p>
              <strong>400+</strong> material UI elements,
              <strong>600+</strong> material icons,
              <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
              <strong>Free for personal and commercial use.</strong>
            </p>

            <!-- CTA -->
            <a target="_blank" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" class="btn btn-indigo btn-md">Download
              <i class="fas fa-download ml-1"></i>
            </a>
            <a target="_blank" href="https://mdbootstrap.com/docs/jquery/components/" class="btn btn-indigo btn-md">Live demo
              <i class="far fa-image ml-1"></i>
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

     