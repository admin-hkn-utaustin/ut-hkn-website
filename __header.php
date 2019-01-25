<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="css/foundation.css"/>
  <link rel="stylesheet" href="css/hkn.css"/>
  <link rel="stylesheet" href="lib/tablesorter/style.css">

  <script language="javascript" type="text/javascript" src="js/vendor/modernizr.js"></script>
  <script language="javascript" type="text/javascript" src="js/vendor/jquery.js"></script>
  <script language="javascript" type="text/javascript" src="lib/tablesorter/jquery.tablesorter.min.js"></script>

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
      <img width="970px" src="images/hknbanner2015.png"/>
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
               href="https://docs.google.com/spreadsheets/d/1pzJATIXcARxkdzHeSZuYtDJGKayrTz2AMQ-Zuwyl8Ms/edit?usp=sharing">
		Active Hours Table</a></li>
              <li><a target="_blank" href="https://www.facebook.com/groups/1993336434305004/">
		Facebook Group</a></li>
              <li><a target="_blank" href="https://docs.google.com/spreadsheets/d/1KPj2xKB8pXNBoIGvMG320hsF-jsu4-tc61NfxsmC__8/edit?usp=sharing">
		Pledge Hours Table</a></li>
              <li><a target="_blank" href="https://docs.google.com/spreadsheets/d/1FNMkeSz9E6Tdzxd8pghAIcL3Q6-OSGFj9VN3coQGUls/edit?usp=sharing">
		Big/Little Group Points Tracker</a></li>
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
