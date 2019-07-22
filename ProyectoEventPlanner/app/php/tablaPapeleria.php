

<table class="table-bordeless" style="font-family: 'Raleway', serif;">


      <?php
      include_once("connection.php");
  		$conMySql = connecting();

      function newCode($long) {
  		 $key = '';
  		 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
  		 $max = strlen($pattern)-1;
  		 for($i=0;$i < $long;$i++) $key .= $pattern{mt_rand(0,$max)};
  		 return $key;
  		}


      $sql =  "SELECT * FROM `company` WHERE `idCompany` in (SELECT `idCompany` from `company_category` where `idCategory` = 5)";
              $result = mysqli_query($conMySql,$sql);

              while($show= mysqli_fetch_row($result)){
                $newCode= null;
                $newData = null;
                $new1 =null;
                $new2 =null;
                $new3 =null;

                $newCode = newCode(10);
                $newData =newCode(10);
                $new1 =newCode(4);
                $new2 =newCode(4);
                $new3 =newCode(4);

      ?>
      <tr>


        <td scope="col">
          <br>
            <h4 style="color: #04806C"><b><?php echo $show[1]  ?></b></h4>
            <p class="d-flex justify-content-between" style="font-size: 15px;"><?php echo $show[2]  ?></p>
            <h6 ><b>Contacto</b></h6>
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
          <div id="<?php echo $newCode ?>" class="carousel slide" data-ride="#<?php echo $newData ?>">
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 390px; width: 555px;">
      <img src="<?php echo "upload/Papeleria/".$show[5] ?>" class="d-block w-100" alt="<?php echo $new1 ?>">
    </div>
    <div class="carousel-item" style="height: 390px; width: 555px;">
      <img src="<?php echo "upload/Papeleria/".$show[6] ?>" class="d-block w-100" alt="<?php echo $new2 ?>">
    </div>
    <div class="carousel-item" style="height: 390px; width: 555px;">
      <img src="<?php echo "upload/Papeleria/".$show[7] ?>" class="d-block w-100" alt="<?php echo $new3 ?>" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#<?php echo $newCode ?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#<?php echo $newCode ?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
        </td>

      </tr>

      <?php

        }
        $close = closeConnection($conMySql);
       ?>
</table>
