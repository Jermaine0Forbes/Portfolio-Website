<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "yurizan8";
    $dbname = "portfolio";

    $mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if(mysqli_connect_errno()){
            die('Connection failed ...'.
            mysqli_connect_error().
            "(".mysqli_connect_errno(). ")"
          );
        }


    $command = "SELECT p.pro_id as id ,  p.title as title, p.summary as body, group_concat( distinct f.framework)  as framework,";
    $command .= " group_concat(distinct m.language) as language,  group_concat(distinct l.library) as libs, group_concat(distinct i.src) as images,";
    $command .=  " p.created as created ,  p.updated as updated, ";
    $command .=  " p.link as link, p.code as code ";
    $command .=  " FROM project as p   left join madeWith as m using(pro_id) ";
    $command .=  " left join libraries as l using(pro_id) ";
    $command .=  " left join images as i using (pro_id) ";
    $command .=  " left join frameworks as f using(pro_id) group by id order by stamp desc";
    $query = $command;
   $result = mysqli_query($mysqli, $query);


   if(!$result ){
    die("database query failed");
   }

 ?>

<div class="slider">
    <?php

       while($row = mysqli_fetch_array($result)){

           $lang = explode(",", $row["language"]);
           $frame = explode(",", $row["framework"]);
           $lib = explode(",", $row["libs"]);
           $img = explode(",", $row["images"]);
           $med = [];
           $sma = [];
           $code = $row["code"];

           foreach ($img as  $value) {
               if(strpos($value,"medium")  > 1){
                  array_push($med, $value);
               }else{
                   array_push($sma, $value);

               }
           }

        ?>
    <div class="slide" >
      <div class="container wide page-content">
          <div class="row hite-9">
              <div class="col-sm-10 col-md-7 center-md">
                  <div  class="row no-mar  justify-content-center ">

                       <div class="col-lg-10 pad padH ">
                           <h2 class=" text-center slide-title"><?php echo $row["title"]; ?> </h2>
                           <div class="row justify-content-center hidden-md-up">
                               <div class="col-8 mobile-pic ">
                                   <div class="medium">
                                       <img class="img-fluid" src="img/<?php echo $med[0] ?>" alt="mobile image">
                                   </div>
                               </div>
                           </div>

                           <div class="row slide-mobile-padding slide-date">
                             <div class="col-sm-6 text-sm-center ">
                                <span class="center"><i class="fa fa-calendar" aria-hidden="true"></i> Created: <?php echo $row["created"]; ?></span>
                             </div>
                             <div class="col-sm-6 text-sm-center ">
                                <span class="center"><i class="fa fa-calendar-o" aria-hidden="true"></i> Last Updated: <?php echo $row["updated"]; ?></span>
                             </div>
                           </div>
                           <div class="row justify-content-center slide-mobile-padding slide-summary">
                              <div class="col-sm-10">
                                  <p>
                                     <?php echo $row["body"]; ?>
                                  </p>
                              </div>
                           </div>
                           <div class="row mar marV hidden-md-down slide-facts">
                                 <div class="col-md-4">
                                     <div class="">
                                          <p class="h4">Frameworks</p>
                                          <ul>
                                              <?php foreach ($frame as  $value) {
                                                  echo "<li>{$value}</li>";
                                              } ?>
                                         </ul>
                                     </div>
                                 </div>

                                 <div class="col-md-4">
                                     <div class="">
                                          <p class="h4">Made With</p>
                                          <ul>
                                              <?php foreach ($lang as  $value) {
                                                  echo "<li>{$value}</li>";
                                              } ?>
                                          </ul>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="">
                                          <p class="h4">Libraries</p>
                                          <ul>
                                              <?php foreach ($lib as  $value) {
                                                  echo "<li>{$value}</li>";
                                              } ?>
                                          </ul>
                                     </div>
                                 </div>
                          </div>

                          <?php if (empty($code) ) {?>
                              <div class="row justify-content-center no-gutters visit">
                                <div class="col-sm-6  btn-container">
                                  <a href="<?php echo $row["link"] ?>" target="_blank" class="btn btn-primary fluid "> visit site</a>
                                </div>
                              </div>

                          <?php } else{?>

                              <div class="row justify-content-center no-gutters visit">
                                  <div class="col-sm-6  btn-container">
                                    <a href="<?php echo $row["link"] ?>" target="_blank" class="btn btn-primary fluid left"> visit site</a>
                                  </div>
                                <div class="col-sm-6  btn-container">
                                  <a href="<?php echo $row["code"] ?>" target="_blank" class="btn btn-primary fluid right "> visit code</a>
                                </div>
                              </div>

                         <?php } ?>
                       </div>
                  </div>
              </div>
              <div class="col-sm-5 overflow-hide hidden-sm-down">
                  <div class="big">

                  </div>

                  <div class="medium">
                      <a href="<?php echo $row["link"]; ?>">
                          <?php if(sizeof($med) > 1) { ?>
                              <div class="flex-medium">
                                  <ul class="imgList">
                                      <?php foreach ($med as  $value): ?>
                                          <li><img class="img-fluid" src="img/<?php echo $value;?>" alt="medium image">   </li>
                                      <?php endforeach; ?>
                                  </ul>
                              </div>

                          <?php }else { ?>

                               <img class="img-fluid" src="img/<?php echo $med[0] ?>" alt="small image">
                          <?php } ?>
                      </a>
                  </div>

                  <div class="small">
                      <a href="<?php echo $row["link"]; ?>">
                          <?php if(sizeof($sma) > 1) { ?>
                              <div class="flex-small">
                                  <ul class="imgList">
                                      <?php foreach ($sma as  $value): ?>
                                          <li><img class="img-fluid" src="img/<?php echo $value;?>" alt="small image">   </li>
                                      <?php endforeach; ?>
                                  </ul>
                              </div>

                          <?php }else { ?>
                              <img class="img-fluid" src="img/<?php echo $sma[0] ?>" alt="small image">
                          <?php } ?>
                      </a>
                  </div>
              </div>
          </div>

      </div>
    </div>

    <?php
        }
     ?>

</div><!-- slider -->
