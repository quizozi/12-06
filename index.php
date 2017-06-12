<?php include("header.php");?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $image;?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
                    <div class="site-heading">
                        <h1>Aves urbanas</h1>
                        <hr class="small">
                        <span class="subheading">Explorando constructores de identidad urbana</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-0">
              <?php
              // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
              $csv = array_map('str_getcsv', file('datos.csv'));
              // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
              array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
              array_shift($csv);

             for($a = 0; $a < $total = count($csv); $a++){?>
               <div class="post-preview">
                    <a href="single.php?url=<?php print($a)?>">
                <article class="row">
                    <hr>
                      <div class="col-xs-10 col-sm-2 col-md-0"> <br><img src="<?php echo $csv[$a]['imagen'];?>" class="img-responsive" ></div>
                        <div class="col-xs-10 col-sm-10 col-md-9">
                              <h3><?php echo($a+1);?>. <?php echo $csv[$a]['titulo'];?></h3></a>
                              <h6>Tags:</strong> <?php echo $csv[$a]['tags'];?>.</h6>
                                  <p><?php echo $csv[$a]['bajada'];?></p>
                                              <h5><i><a href= "<?php echo $csv[$a]['vinculo'];?>"><?php echo $csv[$a]['APA'];?></a></i></h5>

                      </div>
                  </article>
                <?php };?>

            </div>
        </div>
    </div>

    <hr>

    <?php include("footer.php");?>
