<!-- Essential function that oads the script sheets -->
<?php wp_footer(); ?>
<div class="container-fluid pt-4 my-md-5 pt-md-5 border-top bg-dark">
    <div class="row">
      <div class="col-12 col-md">
        <!-- <img class="mb-2" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19"> -->
        <small class="d-block mb-3 text-muted">© 2017–2021</small>
      </div>
      <div class="col-6 col-md">

        <h5>Page Links</h5>
        <?php
        wp_nav_menu();
        ?>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
