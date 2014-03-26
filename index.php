<?php    
    /**
    *The front page to 1294's website
    *
    *@author Alex Friedberg <blueal22@hotmail.com>
    *@link https://github.com/blueal/FRC-Team-1294
    */
    
    /*Use $ExtraTags to add additional scripts or CSS files for specific pages
    *Use $title to set the title of the webpage
    *In this instance, the extra header tags are for the WOWSlider
    */
    $ExtraHeaderTags='<link rel="stylesheet" type="text/css" href="engine1/style.css" />
      <script type="text/javascript" src="engine1/jquery.js"></script>';
    $title='1294: Top Gun Robotics';
    require'/includes/header.php'; 
 ?>

	<!-- Start WOWSlider.com BODY section -->
  <!--The WOWSlider MUST be created using the program available at Wowslider.com, simple editing though may be done here-->
	<div id="wowslider-container1">
	    <div class="ws_images">
            <ul>
                <li><img src="data1/images/big_header.jpg" alt="The Team" title="The Team" id="wows1_0"/></li>
                <li><img src="data1/images/img_0131.jpg" alt="Professionialism" title="Professionialism" id="wows1_1"/></li>
                <li><img src="data1/images/img_0158.jpg" alt="Precision and Execution" title="Precision and Execution" id="wows1_2"/></li>
                <li><img src="data1/images/img_0206.jpg" alt="We strive for the best" title="We strive for the best" id="wows1_3"/>Even if it means destroying the competition, we'll do it.</li>
                <li><img src="data1/images/img_0217.jpg" alt="Collaboration" title="Collaboration" id="wows1_4"/></li>
                <li><img src="data1/images/img_0226.jpg" alt="Speed and Efficency" title="Speed and Efficency" id="wows1_5"/></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title="The Team"><img src="data1/tooltips/big_header.jpg" alt="The Team"/>1</a>
                <a href="#" title="Professionialism"><img src="data1/tooltips/img_0131.jpg" alt="Professionialism"/>2</a>
                <a href="#" title="Precision and Execution"><img src="data1/tooltips/img_0158.jpg" alt="Precision and Execution"/>3</a>
                <a href="#" title="We strive for the best"><img src="data1/tooltips/img_0206.jpg" alt="We strive for the best"/>4</a>
                <a href="#" title="Collaboration"><img src="data1/tooltips/img_0217.jpg" alt="Collaboration"/>5</a>
                <a href="#" title="Speed and Efficency"><img src="data1/tooltips/img_0226.jpg" alt="Speed and Efficency"/>6</a>
            </div>
        </div>
        <span class="wsl"><a href="http://wowslider.com">Gallery Script</a> by WOWSlider.com v5.2</span>
	    <div class="wdss_shadow"></div>
	</div>
  <!--These script tags must be placed near the WOWSlider html to make it work correctly-->
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>

    <!--End of WOWSlider Body Section-->

    </div>
    <div class="body-container">
        <!-- Main jumbotron-->
        <div class="jumbotron">
            <div class="container">
            <img class="img-responsive" id="eastlake-logo" alt="Eastlake Logo" src="/img/Eastlake-Logo.png"/>
            <h1>We are Top Gun Robotics</h1>
            <p>We are a High School Robotics club/team located at <a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School</a> in Sammamish Washington that has been playing in FRC since 2004. </p>
            <p><a class="btn btn-primary btn-lg learn-more" href="/about/team">Learn more &raquo;</a></p>
            </div>
        </div>
        <!--Begin Live Event Streaming Block. This block can be commented out during the off-season-->
        <div class="live-stream-container">
            <h1 id="live-stream-title">Live Stream our Event!</h1>
            <p class="lead">We will be live streaming for the <a class="event-link" href="http://oregonfirst.org/events/pnw-frc-championship/">Autodesk PNW FRC Championship 2014</a> which will be airing from</p>
            <p class="event-times">April 10th 5pm to April 12th 5pm

            </p>

        <iframe id="Live-Stream" class="img-responsive" src="http://www.ustream.tv/embed/17281416?v=3&amp;wmode=direct" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
            <?php
            /*The following code is to get ride of the calendar button when the event is in progress or when the event has passed*/
            $eventDate='25-03-2014';
            if(!strtotime($eventDate) >= strtotime('today')){
                /*Its not passed the event date, show the button*/ ?>
                <a href="http://www.thebluealliance.com/event/2014pncmp" title="Add to Calendar" class="addthisevent" >
                    Add to Calendar
                    <span class="_start">10-04-2014 9:00:00</span>
                    <span class="_end">11-04-2014 17:00:00</span>
                    <span class="_zonecode">6</span>
                    <span class="_summary">Autodesk PNW FRC Championship</span>
                    <span class="_description">PNW Regional Championship</span>
                    <span class="_location">300 North Winning Way Portland, OR 97227</span>
                    <span class="_organizer">Oregon First Robotics</span>
                    <span class="_organizer_email">Organizer e-mail</span>
                    <span class="_all_day_event">false</span>
                    <span class="_date_format">DD/MM/YYYY</span>
                </a>
            <?php
                }
                else
                {
                    /*It has passed the event date*/
                    echo'something else';
                }
            ?>
            <a href="http://www.thebluealliance.com/event/2014pncmp" title="Go to Ustream" class="go-to-scores" >
                <span class="glyphicon glyphicon-list-alt"></span> Get Scores
            </a>
        </div>
        <!--End of Live Stream Block-->
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
            <div class="col-lg-4">
                <h2>News/Announcments</h2>
                <p>INSERT RSS FEED HERE!</p>
                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Facebook</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            </div>
        </div>
<?php 
    $ExtraFooterTags='<script type="text/javascript" src="http://js.addthisevent.com/atemay.js"></script>';
    require'/includes/footer.php';
?>