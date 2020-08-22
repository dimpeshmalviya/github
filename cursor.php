<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		// $('#numOne').keypress(
  //   function(e){
  //       if (e.which == 45) {
  //           $(this).next('input:text').focus();
  //           return false; // prevents the '-' being entered.
  //       }
  //   });
		function dash() {
			if (maxlenghth==4) {

			}

		}
	</script>
  <style type="text/css">
    div{
    width:100px;
    height: 100px;
    position:relative;
    background-image:url(http://24.media.tumblr.com/tumblr_m2scelXYGA1qbmtexo1_500.jpg);
    /*background-size:cover;*/
    /*background-position:50%;*/
}
div:before{
    content:'';
    position: absolute;
    /*left: 2%;*/
    top: 2%;
    width: 95%;
    height: 95%;
    border: 1px solid white;
}
  </style>
</head>
<body>
<form action="#" method="post">
    <fieldset>
        <label for="numOne">Number:</label>
        <input type="text" id="numOne" name="numOne"/><!--  
        <input type="text" id="numTwo" name="numTwo" maxlength="4" />
        <input type="text" id="three" name="numThree" maxlength="4" />  -->        
    </fieldset>
</form>

<form>
	<input type="text" id="first" size="4" onkeyup="movetoNext(this, 'second')" maxlength="3" />
<input type="text" id="second" size="4" onkeyup="movetoNext(this, 'third')" maxlength="3" />
<input type="text" id="third" size="5" maxlength="4" />
</form>
<div>
  scd
</div>

</body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyD5Q-YiqrVg0aF9umHSN74aVuCDrCTTxUI",
    authDomain: "techdeck-59421.firebaseapp.com",
    databaseURL: "https://techdeck-59421.firebaseio.com",
    projectId: "techdeck-59421",
    storageBucket: "techdeck-59421.appspot.com",
    messagingSenderId: "420011317236",
    appId: "1:420011317236:web:206e080697aa2b55560ba1",
    measurementId: "G-TV6SPFR9B2"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

</html>