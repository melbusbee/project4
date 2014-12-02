<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    
    <title>Project 4</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  
    <link href='http://fonts.googleapis.com/css?family=Ruda:400,900,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Radley' rel='stylesheet' type='text/css'>
  
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet" type="text/css" />
    <link href="css/tinyscrollbar.css" rel="stylesheet" type="text/css" />


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 
 <!--twitter API-->
<script src="js/tweetLinkIt.js"></script>
    <script>
        
        function pageComplete(){
            console.log("pageComplete")
            $('.tweet').tweetLinkify();
    }
    </script>
  </head>

  <body role="document">
    
    <div class="container">
            <div class="col-md-12 col-xs-12">
      <h1 class="jumboText">For many North Carolina families,<span id="thisText">this</span> is a good meal.</h1></div> </div>
<div class="jumbotron">
      <img class="jumbotron" src="images/EmptyPlateFinal.png" alt="EmptyPlate"></div>

      
<div class=" background">
<div class="container">
      <div class="col-md-3 col-xs-12">
  <!-- Accordion -->
  <div id="accordion">
    <h3>The Need</h3>
  <div>
    <img id="million" src="images/million.png">
     <p>In the 34-county region served by the Food Bank, more than half a million people struggle with food insecurity and hunger every day.</p>
  </div>
    <h3>The Impact of Hunger</h3>
    <div>
    <p>Children cannot learn in school because they are hungry; adults experience reduced cognitive function and poor health as they eat cheaper, high fat foods instead of healthier, often more costly options; and seniors often choose between buying medicine or food. Federal poverty guidelines do not cover the cost of living and on these incomes, hunger is a reality.</p>
    <img id="brain" src="images/brain.png">
  </div>
  <h3>Food Bank 2012-13 Reach</h3>
  <div>
   <p id="lbsText">Total lbs of food distributed in the Food Bank's 34 counties:</p>
   <p id="lbs">49.4 Million</p>
    <img id="scale" src="images/scale.png">
    <p id="lbsText"><br>Total individuals served in: <br><span id="lbsNumbers">3,609,014</span><br>Total meals provided: <br><span id="lbsNumbers">2,105,263</span></p>
  </div>
  <h3>The Power of a Dollar</h3>
  <div>
    <img id="dollar" src="images/97text.png">
     <p id="dollarText"><span id="cents">cents</span> of every dollar goes directly to food programs</p><br><br>
    <img id="plates" src="images/Plates.png"><br>
    <p id="lbsText">Each dollar donated provides five meals.</p>
  </div>
</div>
</div>
 
      <div class="col-md-9 col-xs-12">
        <div>
         <p class="mainText"><span id="bigMain">The Food Bank of Central & Eastern North Carolina is working to change that.</span><br>By collecting food items and monetary donations, the Food Bank helps families facing food insecurity by providing access to meals. This winter the Food Bank will attempt to raise $435,000 online, or 2.17 million meals before December 31st during its Holiday Meals Drive. For every dollar donated, the Food Bank can provide $10 worth of food or five meals.</p>
          </div>

        <div class="col-md-9 col-xs-12">
          <img class="county" src="images/countyHighlight.png" alt="povertyCounties">
        </div>
        
        <div class="col-md-3 col-xs-12">
            <p class="countyDescription">Counties served by the Food Bank are shown in dark gray. Highlighted in red are a sampling of some of the high poverty counties served and number of meals they received from the Food Bank in 2012-2013.</p>
        </div>
    </div>
           
</div>
</div>

<div class="apiBackground">
<div class="container api-area">
      <div class="col-md-5 col-xs-12">
          <p class="countdown-text">There's still time to give</p><br>
          <p class="minispace">The countdown has begun. The Holiday Meals Drive ends December 31, 2014.</p>
          <div id="countdownDescription">
                <ul>
                <li>DAYS</li>
                <li id="hours">HOURS</li>
                <li id="minutes">MINUTES</li>
                <li id="seconds">SECONDS</li>
                </ul>
          </div>
    <div class="wrapper">
      <div class="cell">
        <div id="holder">
          <div class="digits"></div>
        </div>
      </div>
    </div>
              <div class="branchHeader">Branch Locations</div>

          <p class="minispace">For those who wish to donate directly to a Food Bank branch, see the below map for locations.</p>
        <div id="map-canvas"></div>
      </div>
       
       <div class="col-md-4 col-xs-12">
       <div class="flickrHeader">Donors in Action</div>
        <div id="results"></div>
      </div>
       
        <div class="col-md-3 col-xs-12">
          <div class="twitterHeader">Talk of the <a href="https://twitter.com/FoodBankCENC" target="_blank">@FoodBankCENC</a></div>
<div id="scrollbar1">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                 <div class="overview">
                            
<div class="twitter_column">
            <?php
            ini_set('display_errors', 1);
            require_once('TwitterAPIExchange.php');
            
            /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
            $settings = array(
                'oauth_access_token' => "2307087446-rwpzwedwYCKV278S8gl3UgOANE3PX6xXpTnNdER",
                'oauth_access_token_secret' => "98IM4s1lIVJ0wfXR9T8CPsNKR0gA7FCZ97xxO749LH2QS",
                'consumer_key' => "cKiyYLXcfRsJbTZrmB70F0xHG",
                'consumer_secret' => "PKO1PZRD7xouq5lYcWQVn6ADnaObcOmb1VZFqdD3bzX9avAJdg"
            );
            
            /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
            $url = 'https://api.twitter.com/1.1/search/tweets.json';
            $requestMethod = 'GET';
            $getfield = "?q=@FoodBankCENC";
            
            /** POST fields required by the URL above. See relevant docs as above **/
            $postfields = array(
                'screen_name' => 'usernameToBlock', 
                'skip_status' => '1'
            );
            
            $requestMethod = 'GET';
            $twitter = new TwitterAPIExchange($settings);
            $string = json_decode ($twitter->setGetfield($getfield)
                         ->buildOauth($url, $requestMethod)
                         ->performRequest(),$assoc = TRUE);
            
            foreach($string['statuses'] as $items)
            {
                echo "<p class='date'>Post date: " . $items['created_at'] . "<br/></p>";
                echo "<p class='tweet'>" . $items['text'] . " | " . "AUTHOR: " . $items['user']['name'] . "</p>";
                echo "<hr/>";
            }
            
            echo "<script>pageComplete()</script>"
            ?>                            
                                            
            </div>
        </div>
    </div>
</div>
</div>

</div>      
</div> 
    
 <div class="footer">
  <div class="container">
     <p id="sources">Sources: <a href="http://www.foodbankcenc.org/site/PageNavigator/HolidayMeals.html">The Food Bank of Central and Eastern North Carolina</a> | <a href="www.factfinder2.census.gov">www.factfinder2.census.gov</a> |  <a href="www.ncpolicywatch.com">www.ncpolicywatch.com</a></p>
    
  </div>
</div> 

</body>
</html>
    
     <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>

    <script src="js/bootstrap.min.js"></script>

     <!-- jqueryUI accordian and countdown -->
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    
       
<!-- API google maps -->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLJYO7-HqRWnB2uAqfGmbsDdRgaYN0USE">
    </script>
    
     <script type="text/javascript"
      src="js/branchMap2.js">
    </script>
     
<script type="text/javascript"
        src="js/flickr.js"></script>


<!--Scroller plugin-->

<script type="text/javascript" src="js/jquery.tinyscrollbar.js"></script>



    <script>
        
        $( document ).ready(function() {
    console.log( "ready!" );
    setUI();
    setCountDown();
    setScroller();
    
});
        
        
    function setUI(){
    $( "#accordion" ).accordion({
      event: "click hoverintent"
    });
    }


  $.event.special.hoverintent = {
    setup: function() {
    $( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
      },
    teardown: function() {

    $( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
    },
    handler: function( event ) {

    var currentX, currentY, timeout,
    args = arguments,
    target = $( event.target ),
  previousX = event.pageX,
  previousY = event.pageY;
  
  function track( event ) {
  currentX = event.pageX;
  currentY = event.pageY;
  };

  function clear() {
  target
  .unbind( "mousemove", track )
  .unbind( "mouseout", clear );
  clearTimeout( timeout );
  }

  function handler() {
  var prop,
  orig = event;
  if ( ( Math.abs( previousX - currentX ) +
  Math.abs( previousY - currentY ) ) < 7 ) {
  clear();
  event = $.Event( "hoverintent" );

  for ( prop in orig ) {
  if ( !( prop in event ) ) {
  event[ prop ] = orig[ prop ];
  }
  }

// Prevent accessing the original event since the new event
// is fired asynchronously and the old event is no longer
// usable (#6028)
delete event.originalEvent;
target.trigger( event );
} else {
previousX = currentX;
previousY = currentY;
timeout = setTimeout( handler, 100 );
}
}
timeout = setTimeout( handler, 100 );
target.bind({
mousemove: track,
mouseout: clear
});
}
};
 
        
     function setCountDown(){
        $(".digits").countdown({
          image: "images/digits.png",
          format: "dd:hh:mm:ss",
          endTime: new Date('12/31/14 05:00:00')
        });
      }


    function setScroller(){
        $("#scrollbar1").tinyscrollbar();
        };
    
    
</script>

