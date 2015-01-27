<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="css/foundation.css"/>
  <link rel="stylesheet" href="css/hkn.css"/>

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
    <div style="text-align:center;"><img width="970px" src="images/hknbanner.png"/></div>
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
          <li id="About"><a href="about.php">About</a></li>

          <li id="Members" class="has-dropdown">
            <a href="#">Members</a>
            <ul class="dropdown">
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
               href="https://docs.google.com/a/hkn.ece.utexas.edu/spreadsheet/ccc?key=0Aub-hgNV0eBldHQ1UHlqTVlXb3JIR19wLUhCSXhpemc#gid=0">Active
               Hours Table</a></li>
               <li><a target="_blank" href="https://www.facebook.com/groups/198592133542301/">Active Facebook Group</a>
               </li>
               <li><a target="_blank"
                 href="https://docs.google.com/a/hkn.ece.utexas.edu/spreadsheet/ccc?key=0Aub-hgNV0eBldGt4VndfeEdpalZDa1JwT1lEUU9JTWc#gid=0">Pledge
                 Hours Table</a></li>
                 <li><a target="_blank" href="">Pledge Facebook Group</a></li>
                 <li><a href="https://docs.google.com/a/hkn.ece.utexas.edu/spreadsheets/d/1uqp3bQap72VaxhY3tu0qHuL9CN79HFQtwJ8_vP-i3XQ/edit#gid=0">Officer Office Hours</a> </li>
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