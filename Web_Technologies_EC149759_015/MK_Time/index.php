  <?php
    $pageTitle = 'Home';
    include('header.php');
  ?>

  <main>
    <div class="container">
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/pexels-maël-balland-4484237.jpg" class="d-block w-100" alt="some watch1" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Kitty ipsum dolor sit amet</h5>
              <p>Lick plastic bags waffles i shredded your linens.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/freestocks-9rHgOVRdrDM-unsplash.jpg" class="d-block w-100" alt="some watch2" />
            <div class="carousel-caption d-none d-md-block">
              <h5>I sits hack up furballs</h5>
              <p>
                Cat sit like bread cough furball into food bowl then scratch.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/mitchel-lensink-0Dm7wLo2DHo-unsplash.jpg" class="d-block w-100" alt="some watch3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Intrigued by the shower</h5>
              <p>
                Mesmerizing birds cats are a queer kind of folk or show belly
                bathe private parts with tongue then lick owner's face.
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </main>

  <div class="container my-5 p-3 text-center">
    <h1 class="align-items-center justify-content-center">MK Time - The fictional company designing and manufacturing Swiss watches in Edinburgh</h1>
  </div>

  <?php include('./footer.php'); ?>