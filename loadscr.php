<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mohon Tunggu...</title>
  <style>
    body {
      background-color: #ffdb58; /* Warm yellow color for sunrise vibe */
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    #loader {
      position: absolute;
      left: 50%;
      top: 50%;
      z-index: 1;
      width: 120px;
      height: 120px;
      margin: -76px 0 0 -76px;
      border: 16px solid #191919;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .animate-bottom {
      position: relative;
      -webkit-animation-name: animatebottom;
      -webkit-animation-duration: 1s;
      animation-name: animatebottom;
      animation-duration: 1s;
      text-align: justify;
    }

    @-webkit-keyframes animatebottom {
      from { bottom: -100px; opacity: 0; } 
      to { bottom: 0px; opacity: 1; }
    }

    @keyframes animatebottom { 
      from { bottom: -100px; opacity: 0; } 
      to { bottom: 0; opacity: 1; }
    }

    #myDiv {
      display: none;
      text-align: center;
    }
  </style>
</head>
<body onload="myFunction()">

  <div id="loader"></div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
    <h2>Mohon Tunggu</h2>
    <p>Sebentar lagi Anda akan masuk...</p>
  </div>

  <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 5000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";

      setTimeout(function() {
        window.location.href = "logpage.php";
      }, 5000);
    }
  </script>

</body>
</html>
