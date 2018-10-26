<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<title>Datumbox Twitter Sentiment Analysis Demo</title>
</head>
<body>
<!-- <h1>Datumbox Twitter Sentiment Analysis</h1>
<p>Type your keyword below to perform Sentiment Analysis on Twitter Results:</p>
<form method="GET">
    <label>Keyword: </label> <input type="text" name="q" />
    <input type="submit" />
</form> -->

<?php

if(isset($_GET['q']) && $_GET['q']!='') {
    include_once(dirname(__FILE__).'/config.php');
    include_once(dirname(__FILE__).'/lib/TwitterSentimentAnalysis.php');
    $datumbox = '6cf96970b2175640bdb3b55e7855d130';
   define('DATUMBOX_API_KE','6cf96970b2175640bdb3b55e7855d130');
   define('CONSUMER_KEY', '0XkHJqqcVPlMdwRusMIJtOsKm');
   define('CONSUMER_SECRET', 'w5hI49LAGABPcwtf4LxYHIdgB7BgDeE0qHkbnRPVYPGP8IsM7R');
   define('ACCESS_TOKEN', '902436734494883840-0oxDhUsDKl6YSBrpkWK7UAZKVv4FlXB');
   define('ACCESS_TOKEN_SECRET', 'FncrfVC0pZ56vi0uMq2v5pTs7zl7SjdxdDpNalGHhOpnz');

    $TwitterSentimentAnalysis = new TwitterSentimentAnalysis(DATUMBOX_API_KE,CONSUMER_KEY,CONSUMER_SECRET,ACCESS_TOKEN,ACCESS_TOKEN_SECRET);

    //Search Tweets parameters as described at https://dev.twitter.com/docs/api/1.1/get/search/tweets
    $twitterSearchParams=array(
        'q'=>$_GET['q'],
        'lang'=>'en',
        'count'=>50,


    );
    $results=$TwitterSentimentAnalysis->sentimentAnalysis($twitterSearchParams);


    ?>
        <?php
        $positive = 0;
        $negative = 0;
        $neutral = 0;
        foreach($results as $tweet) {

            $color=NULL;
            if($tweet['sentiment']=='positive') {
                $color='#00FF00';
                $positive++;
            }
            else if($tweet['sentiment']=='negative') {
                $color='#FF0000';
                $negative++;
            }
            else if($tweet['sentiment']=='neutral') {
                $color='#FFFFFF';
                $neutral++;
            }
          }
          $dataPoints = array(
                       array("y" => $positive, "label" => "Positive" ),
                       array("y" => $negative, "label" => "negative"  ),
                       array("y" => $neutral, "label" => "neutral"  )
                            );
        }
            ?>


  <div id="chartContainer" style="height: 370px; width: 100%;"></div><br><br>

  <script>
  window.onload = function() {
  var chart = new CanvasJS.Chart("chartContainer", {
  	animationEnabled: true,
  	theme: "light2",
  	title:{
  		text: "<?php echo $_GET['q']?>"
  	},
  	axisY: {
  		title: "Sentiments"
  	},
  	data: [{
  		type: "column",
  		yValueFormatString: "#,##0.## Sentiments",
  		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  	}]
  });
  chart.render();
  }
  </script>

</body>
</html>
