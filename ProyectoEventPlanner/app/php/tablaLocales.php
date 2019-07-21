

<table class="table-bordeless" style="font-family: 'Raleway', serif;">


      <?php
      include_once("connection.php");
  		$conMySql = connecting();


      $sql =  "SELECT * FROM `company` WHERE `idCompany` in (SELECT `idCompany` from `company_category` where `idCategory` = 4)";
              $result = mysqli_query($conMySql,$sql);
              while($show= mysqli_fetch_row($result)){

      ?>
      <tr>

        <td scope="col">
          <br>

                          <h4><b><?php echo $show[1]  ?></b></h4>
                          <p style="font-size: 15px;"><?php echo $show[2]  ?></p>
                          <h6><b>Contacto</b></h6>
                          <p style="font-size: 15px;"> <span class="fa fa-envelope-o"></span> <?php echo $show[3]  ?>
                            <br>
                            <span class="fa fa-whatsapp"></span> <?php echo $show[4]  ?>

                          <a href="<?php echo $show[9]  ?>" class="fa fa-instagram fa-2x" style="color: #0a0a0a; float: right; padding-left:8px;"> </a>
                          <a href="<?php echo $show[8]  ?>" class="fa fa-facebook-square fa-2x" style="color: #0a0a0a; float: right"></a>
                          </p>

        </td >
        <td scope="col"> <!--Columna invisible-->
          <p style="color: #FFFFFF"> .............</p>
          </td>
        <td scope="col">
          <br>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 390px; width: 555px;">
      <img src="<?php echo "upload/Locales/".$show[5] ?>" class="d-block w-100">
    </div>
    <div class="carousel-item" style="height: 390px; width: 555px;">
      <img src="<?php echo "upload/Locales/".$show[6] ?>" class="d-block w-100" >
    </div>
    <div class="carousel-item" style="height: 390px; width: 555px;">
      <img src="<?php echo "upload/Locales/".$show[7] ?>" class="d-block w-100" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
        </td>

      </tr>

      <?php

        }
       ?>
</table>
