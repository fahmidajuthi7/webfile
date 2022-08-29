
<body>
  <header class="navbar navbar-fixed-top navbar-inverse menu">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="index.php"><img src="images/logo.png"  style="margin-top:-15px;width:45px;float:left;"/> <span>Sobuj</span><i class="fa fa-long-arrow-right" aria-hidden="true"></i><b>Bangla</b></a>
      <div class="navbar-collapse nav-collapse collapse navbar-header pull-right">
        <ul class="nav navbar-nav">
          <li ><a href="index.php" class="active">Home</a>       </li>
          <li ><a href="about.php" class="">About Us</a>       </li>
		  <li class="">
            <a href="project.php?page_id=about&sub_id=view" class="dropdown-toggle js-activated">Projects <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="project.php?page_id=about&sub_id=scholarship">Scholarship</a></li>
              <li><a href="project.php?page_id=about&sub_id=blood">Blood Bank</a></li>
            </ul>
          </li>
          <li ><a href="team.php" class="">Our Team</a>       </li>
          <li ><a href="partner.php" class="">Our Partner</a>       </li>
          <li ><a href="news.php" class="">News & Events</a>       </li>
          <li ><a href="gallery.php" class="">Gallery</a>       </li>
          <li ><a href="contact.php" class="">Contact</a>       </li>
         
         

        </ul>
      </div> <!-- .nav-collapse -->
    </div> <!-- .container -->
  </header> <!-- .navbar -->
<script src="bootstrap-hover-dropdown.js"></script>
   <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>

