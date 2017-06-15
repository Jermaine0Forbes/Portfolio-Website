
    <script src="js/anime.js"></script>
            <footer class="with" >

                <?php if ($page === "index"){ ?>
                    <div class="row justify-content-center">
                        <div id="pagination-container" class="col-12 col-sm-6">
                             <div class="pagination">

                             </div>
                        </div>
                    </div>

                <?php } ?>
               <div class="row justify-content-center">

                   <div class="<?php echo $footer; ?>">
                       <p class="h5 text-center">&copy; <?php echo date('o'); ?> by Jermaine Forbes</p>
                   </div>

                   <div class="<?php echo $footer; ?>">
                       <div class="social-section center">
                           <ul class="link-inline around">
                               <li><a href="http://bit.ly/2diKuOb"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                               <li><a href="https://twitter.com/JFDzine"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                               <li><a href="mailto:jermaine0forbes@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                               <li><a href="https://github.com/Jermaine0Forbes?tab=repositories"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <?php
                   mysqli_free_result($row);
                   mysqli_close($mysqli);
                ?>
            </footer>
        </div>
    </body>
</html>
