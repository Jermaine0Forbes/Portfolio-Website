<?php include('modal.php'); ?>

<header class="with menu-visible">
  <div class="row justify-content-center mar-half marV">
      <div class="col-md-6 hidden-sm-down">
          <nav class="top-nav navbar">
              <ul class=" navbar-nav around">
                  <li class="nav-item"><a class="nav-link <?php echo ($page == 'index')? "active":'' ?>" href="/">Portfolio</a></li>
                  <li class="nav-item"><a class="nav-link <?php echo ($page == "skill")? "active": ''?>" href="skill.php">Skills</a></li>
                  <li class="nav-item"><a class="nav-link <?php echo ($page == "about")? "active": ''?>" href="about.php">About</a></li>
              </ul>
          </nav>
      </div>
  </div>
</header>


<button class="menu-btn close-menu">
    <i class="fa fa-times" aria-hidden="true"></i>
</button>
