<?php require_once __DIR__ . "../../../../../mainsrc/Design/header.php"; ?>


<main>

<div style="margin: 0" id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/onlineschool/mainsrc/src/img/education2.jpg" alt="education picture" />
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Example headline.</h1>
          <p>Some representative placeholder content for the first slide of the carousel.</p>
          <p><a class="btn btn-lg btn-dark btn-outline-warning" href="/Register">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/onlineschool/mainsrc/src/img/scotland2.jpg" alt="scotland picture" />
      <div class="container">
        <div class="carousel-caption text-end">
          <!-- <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p> -->
          <p><a class="btn btn-lg btn-dark btn-outline-warning" href="/onlineschool/#courses">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/onlineschool/mainsrc/src/img/scotland3.jpg" alt="scotland3" />
      <div class="container">
        <div class="carousel-caption text-end">
          <!-- <h1>One more for good measure.</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p> -->
          <p><a  class="btn btn-lg btn-dark btn-outline-warning" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container col-xxl-8 px-4 py-5">

<!-- Responsive left HERO
================================================== -->

  <div id="heather" class="row flex-lg-row-reverse align-items-center  py-5">
    <a name="tutor"></a>
    <div class="col-10 col-sm-8 col-lg-6">
      <h1  class="display-5 fw-bold lh-1 mb-3"> Hello and Welcome! </h1>
      <h1  class="display-6 fw-bold lh-1 mb-3"> I'm Heather </h1>
      <img src="/onlineschool/mainsrc/src/img/woman.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h3  class="display-5 fw-bold lh-1 mb-3"> I love Toast</h3>
      <p class="lead">Here I'm teling you all about me and my passion to teach . bla bla .Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
      <p class="col-md-8 fs-4">Here yaddad yadda I'm teling you all about the online school how it works and bla bla bla.   </p>
    </div>
  </div>

  <a name="onlineSchool"></a>
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Online School</h1>
      <p class="lead">Here I'm teling you all about the online school how it works and bla bla bla.  Check out the examples below for how you can remix and restyle it to your liking. </p>
      <p class="col-md-8 fs-4">Here yaddad yadda I'm teling you all about the online school how it works and bla bla bla.   </p>
    </div>
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="/onlineschool/mainsrc/src/img/onlineSchool.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
  </div>

  <a name="courses"></a>
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="/onlineschool/mainsrc/src/img/courses.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Courses</h1>
      <p class="lead">Here I'm teling you all about Courses . bla bla .Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
      <p class="col-md-8 fs-4">Here yaddad yadda I'm teling you all about the online school how it works and bla bla bla.   </p>
    </div>
  </div>


</div><!-- Hero end -->



<!-- Marketing messaging and featurettes
================================================== -->


<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Courses or whatever</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

      <div class="feature col">

        <div class=" btnclr feature-icon  bg-gradient">
          <svg class="bi" width="32" height="32" fill="#FFF">
            <use xlink:href="#balloon-heart"/>
          </svg>
        </div>

        <h2>Course title 1</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>


      <div class="feature col">
        <div class="btnclr feature-icon bg-gradient">

          <svg class="bi" width="1em" height="1em"><use xlink:href="#calender-heart"/></svg>
        </div>

        <h2>Course title 2</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>

      <div class="feature col">

        <div class="btnclr feature-icon  bg-gradient">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cirlcle-fill"/></svg>
        </div>

        <h2>Course title 3</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
    </div>
  </div>


  <!-- START THE FEATURETTES -->


  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Custom cards</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/onlineschool/mainsrc/src/img/edinburg1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/onlineschool/mainsrc/src/img/educationHK3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/onlineschool/mainsrc/src/img/edinburg3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <a name="prices"></a>
  </div>

  <!-- /END THE FEATURETTES -->
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Pricing</h1>
    <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
  </div>
  
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Free</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul>

          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Pro</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">Enterprise</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
        </div>
      </div>
    </div>
  </div>

  <h2 class="display-6 text-center mb-4">Compare plans</h2>

  <div class="table-responsive">
    <table class="table text-center">
      <thead>
        <tr>
          <th style="width: 34%;"></th>
          <th style="width: 22%;">Free</th>
          <th style="width: 22%;">Pro</th>
          <th style="width: 22%;">Enterprise</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="text-start">Public</th>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Private</th>
          <td></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
      </tbody>

      <tbody>
        <tr>
          <th scope="row" class="text-start">Permissions</th>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Sharing</th>
          <td></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Unlimited members</th>
          <td></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Extra security</th>
          <td></td>
          <td></td>
          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        </tr>
      </tbody>
    </table>
  </div>

</div><!-- /.container -->
<hr class="featurette-divider">



<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>