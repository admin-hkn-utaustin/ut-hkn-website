<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="css/foundation.css"/>
  <link rel="stylesheet" href="css/hkn.css"/>
  <link rel="stylesheet" type="text/css" href="js/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css">

  <script language="javascript" type="text/javascript" src="js/vendor/modernizr.js"></script>
  <script language="javascript" type="text/javascript" src="js/vendor/jquery.js"></script>

  <title>HKN Psi Chapter | <?php echo $title; ?></title>

  <script language="javascript" type="text/javascript">
    //<![CDATA[
    $(document).ready(function () {
      $("nav.top-bar > .top-bar-section li#<?php echo $title; ?>").addClass("active");
    });
    //]]>
  </script>
</head>
<body>
  <div class="row large-centered columns">
    <div style="text-align:center;">
      <a href="index.php">
      <img width="970px" src="images/hknbanner2023.png"/>
      </a>
    </div>
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name small"></li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Left Nav Section -->
        <ul class="left">
          <li id="Home"><a href="index.php">Home</a></li>
          <li id="About" class="has-dropdown">
            <a href="#">About</a>
            <ul class="dropdown">
              <li id="Chapter"><a href="chapterinformation.php">Chapter</a></li>
              <li id="Officers"><a href="officers.php">Officers</a></li>
              <li id="FacultyFriends"><a href="facultyfriends.php">Faculty & Friends</a></li>
              <li id="Contact"><a href="contact.php">Contact</a></li>
            </ul>
          </li>
          <li id="Members" class="has-dropdown">
            <a href="#">Members</a>
            <ul class="dropdown">
              <li id="Pledge Requirements"><a href="requirements.php">Pledge Requirements</a></li>
              <li id="Pledges"><a href="pledges.php">Pledges</a></li>
              <li id="Actives"><a href="actives.php">Actives</a></li>
            </ul>
          </li>
          <li id="Announcements"><a href="announcements.php">Announcements</a></li>
          <li id="Gallery"><a href="gallery.php">Gallery</a></li>
          <li id="Calendar"><a href="calendar.php">Calendar</a></li>
          <li id="Corporate"><a href="corporate.php">Corporate</a></li>
        </ul>

        <!-- Right Nav Section -->
        <ul class="right">
          <li id="Links" class="has-dropdown">
            <a href="#">Useful Links</a>
            <ul class="dropdown">
              <li><a target="_blank"
                href="https://docs.google.com/spreadsheets/d/1sM0jmhA5v-X5ugG4fQvNoEVE_IeAKaExZdVJ5a04DYM/edit?usp=sharing">
		Active Hours Table</a></li>
              <li><a target="_blank" href="https://www.facebook.com/groups/HKNSpring2020">
		Facebook Group</a></li>
              <li><a target="_blank" 
		href="https://docs.google.com/spreadsheets/d/1wJqaRDtmoH17K8R38ED8DUoKh8ICBdPio3uh7DSk0jI/edit?usp=sharing">
		Pledge Hours Table</a></li>
                 <li class="divider"></li>
                 <li class="has-dropdown">
                  <a href="#">Website</a>
                  <ul class="dropdown">
                    <li><a target="_blank" href="https://github.com/admin-hkn-utaustin/website/">Contribute</a></li>
                    <li><a target="_blank" href="https://github.com/admin-hkn-utaustin/website/issues">Issue Tracker</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </section>
      </nav>
    </div>

    <div class="main row large-centered columns">
