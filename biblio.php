<?php include("header.php");?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
      <header class="intro-header" style="background-image: url('<?php echo $image;?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Referencias bibliográficas</h1>
                        <hr class="small">
                        <span class="subheading"><i>Aves urbanas: explorando constructores de identidad urbana</i></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-0 col-md-12 col-md-offset-1">
              <?php
              $json = file_get_contents('data/biblio.json');
              $datos = json_decode($json,true);
              $todos = count($datos);
              ?>

                  <!-- Main Content -->
              <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-0">
              </div>

              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-0">

              <h3>Referencias bibliográficas (<?php echo($todos);?>)</h3>

              <?php for($n = 0; $n < $todos; $n++){?>
                <div class="post-preview">
                    <p><?php echo($datos[$n]["author"]);?> (<?php echo($datos[$n]["year"]);?>). <?php echo($datos[$n]["name"]);?> <?php echo($datos[$n]["country"]);?> <?php echo($datos[$n]["ed"]);?>. <a href="<?php echo($datos[$n]["url"]);?>"><i class="fa fa-link" aria-hidden="true"> </i></a></p>
                </div>
              <?php }; ?>


                          </div>
                      </div>
                  </div>

              <hr>





    <hr>

    <?php include("footer.php");?>
