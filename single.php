<?php include("header.php");?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <?php
    $csv = array_map('str_getcsv', file('datos.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    $la_url = $_GET['url'];
    ?>
    <header class="intro-header" style="background-image: url('<?php echo ($csv[$la_url]["imagen"]);?>')">


      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="site-heading">
                      <h1><?php echo($csv[$la_url]["titulo"])?></h1>
                      <hr class="small">
                      <span class="subheading">&bull;<?php echo($csv[$la_url]["tags"]);?></span>
                  </div>
              </div>
          </div>
      </div>
      </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-0 col-md-10 col-md-offset-1">
              <?php
              $csv = array_map('str_getcsv', file('datos.csv'));
              array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
              array_shift($csv);
              $la_url = $_GET['url'];
              ?>


              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 col-md-4 col-md-offset-1">
                          <div class="site-heading">
                              <h1><?php echo($csv[$la_url]["titulo"])?></h1>
                              <hr class="small">
                              <span class="subheading"><h4><?php echo($csv[$la_url]["bajada"]);?></h4></span>
                          </div>
                      </div>
                  </div>
              </div>
              </header>


                  <!-- Post Content -->
                  <article>
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-8 col-lg-offset-2 col-md-4 col-md-offset-1">

                                <?php echo($csv[$la_url]["abstract"])?>
                                <h6><i><a href= "<?php echo $csv[$la_url]["vinculo"];?>"> Texto completo&rarr;</a></i></h6>


                            </div>
                          </div>
                      </div>
                  </article>

                  <hr>


<?php include("footer.php");?>
