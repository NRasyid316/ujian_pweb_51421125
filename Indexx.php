<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>ABSEN MAHASISWA</title>
 <link rel="stylesheet" href="def.css">
</head>
<body>
<nav class="navtop">
    	<div>
    		<h1><b>PENDATAAN MAHASISWA</h1><br>
            <a ><i class="fas fa-home"></i>Help!</a>
    		<a ><i class="fas fa-address-book"></i>Asisten</a>
    	</div>
		
    </nav>

 <div class="content">
<link rel="stylesheet" href="def.css">
  <form class="form1">
  <h1>Silahkan input data Anda</h1>
  </form>
  <form action="data.php" method="post">
    <table>
     <tr>
      <td>NPM</td>
      <td><input type="text" name="npm"></td>
     </tr>
     <tr>
      <td>NAMA</td>
      <td><input type="text" name="nama"></td>
     </tr>
     <tr>
      <td>Jenis Kelamin</td>
      <td><input type="text" name="jkel"></td>
     </tr>
     <tr>
      <td></td>
      <td class="sbmt"><input type="submit" value="SIMPAN"></td>
     </tr>
    </table>
  </form> 
</div>

<div class="data-container">
<link rel="stylesheet" href="det.css">  
    <h2 style="color: wheat;">Data Mahasiswa</h2>
      <table class="tbl2">
      
        <thead>
          <tr>
            <th>NPM</th>
            <th>NAMA</th>
            <th>Jenis Kelamin</th>
          </tr >
        </thead>
        <tbody >
          <!-- Placeholder row for demonstration purposes -->
          <tr style="color: whitesmoke;">
            <td>123456</td>
            <td>John Doe</td>
            <td>Male</td>
          </tr>
          <!-- Add more rows dynamically when data is available -->
        </tbody>
      </table>
    </div>

    <button class="open-button" onclick="openForm()">Ngobrol Yuk!</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1 style="color: rebeccapurple;">Welcome to ChatBox</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

