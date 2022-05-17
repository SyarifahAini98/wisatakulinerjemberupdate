<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html><head><title>JEMBER</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
body{
	font-family:Calibri;
	background-color:#ebeeff;
}
#tabs{
  overflow: auto;
  width: 100%;
  list-style: none;
  margin: 0;
  padding: 0;
}

#tabs li{
    margin: 0;
    padding: 0;
    float: left;
}#tabs{
  overflow: auto;
  width: 100%;
  list-style: none;
  margin: 0;
  padding: 0;
}

#tabs li{
    margin: 0;
    padding: 0;
    float: left;
}

#tabs a{
    -moz-box-shadow: -4px 0 0 rgba(0, 0, 0, .2);
    -webkit-box-shadow: -4px 0 0 rgba(0, 0, 0, .2);
    box-shadow: -4px 0 0 rgba(0, 0, 0, .2);
    background: #bb0503;
    background:    -moz-linear-gradient(220deg, transparent 10px, #bb0503 10px);
    background:    -webkit-linear-gradient(220deg, transparent 10px, #bb0503 10px);
    background:     -ms-linear-gradient(220deg, transparent 10px, #bb0503 10px);
    background:      -o-linear-gradient(220deg, transparent 10px, #bb0503 10px);
    background:         linear-gradient(220deg, transparent 10px, #bb0503 10px);
    text-shadow: 0 1px 0 rgba(0,0,0,.5);
    color: #fff;
    float: left;
    font: bold 12px/35px 'Lucida sans', Arial, Helvetica;
    height: 35px;
	width:60;
    padding: 0 30px;
    text-decoration: none;
}

#tabs a:hover{
    background: #da0003;
    background:    -moz-linear-gradient(220deg, transparent 10px, #da0003 10px);
    background:    -webkit-linear-gradient(220deg, transparent 10px, #da0003 10px);
    background:     -ms-linear-gradient(220deg, transparent 10px, #da0003 10px);
    background:      -o-linear-gradient(220deg, transparent 10px, #da0003 10px);
    background:         linear-gradient(220deg, transparent 10px, #da0003 10px);
}

#tabs a:focus{
    outline: 0;
}

#tabs #current a{
    background: #fff;
    background:    -moz-linear-gradient(220deg, transparent 10px, #fff 10px);
    background:    -webkit-linear-gradient(220deg, transparent 10px, #fff 10px);
    background:     -ms-linear-gradient(220deg, transparent 10px, #fff 10px);
    background:      -o-linear-gradient(220deg, transparent 10px, #fff 10px);
    background:         linear-gradient(220deg, transparent 10px, #fff 10px);
    text-shadow: none;
    color: #333;
}
.img5 {
    height:auto;
    transition: all 0.5s;
    -o-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
}

.img5:hover {
    transition: all 0.3s;
    -o-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transform: scale(1.5);
    -moz-transform: scale(1.5);
    -o-transform: scale(1.5);
    -webkit-transform: scale(1.5);
    box-shadow: 2px 2px 6px rgba(0,0,0,0.5);
}

.container {
  margin: 0px auto;
  width: auto;
  text-align: center;
  background-color:#26272c;
}
.container .pagination {
  margin: 3px 0;
}

.pagination {
  padding: 8px;
  background-clip: padding-box;
  border: 1px solid;
  border-color: #070809 #0d0e0f #131517;
  border-color: rgba(0, 0, 0, 0.8) rgba(0, 0, 0, 0.65) rgba(0, 0, 0, 0.5);
  border-radius: 3px;
  display: inline-block;
  vertical-align: baseline;
  zoom: 1;
  *display: inline;
  *vertical-align: auto;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.12), rgba(0, 0, 0, 0));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.12), rgba(0, 0, 0, 0));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.12), rgba(0, 0, 0, 0));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.12), rgba(0, 0, 0, 0));
  -webkit-box-shadow: 0 1px rgba(255, 255, 255, 0.05);
  box-shadow: 0 1px rgba(255, 255, 255, 0.05);
}
.pagination > a, .pagination > span {
  float: left;
  margin-left: 5px;
  padding: 0 6px;
  min-width: 17px;
  line-height: 27px;
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: 500;
  color: #d4d4d4;
  text-align: center;
  text-decoration: none;
  border: 1px solid black;
  border-radius: 0px;
}
.pagination :first-child {
  margin-left: 0;
}
.pagination > a {
  text-decoration: none;
  text-shadow: 0 1px black;
  background-clip: padding-box;
  border-color: rgba(0, 0, 0, 0.9);
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0));
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0));
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0));
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0));
  -webkit-box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.04), inset 0 1px rgba(255, 255, 255, 0.04), inset 0 -1px rgba(0, 0, 0, 0.15), 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.04), inset 0 1px rgba(255, 255, 255, 0.04), inset 0 -1px rgba(0, 0, 0, 0.15), 0 1px 1px rgba(0, 0, 0, 0.1);
  -webkit-transition: 0.1s ease-out;
  -moz-transition: 0.1s ease-out;
  -o-transition: 0.1s ease-out;
  transition: 0.1s ease-out;
}
.pagination > a:hover {
  background-color: #333;
  background-color: rgba(255, 255, 255, 0.05);
}
.pagination > span, .pagination > a:active {
  color: #eee;
  text-shadow: 0 -1px black;
  background: #1c1c1c;
  background: rgba(255, 255, 255, 0.01);
  border-color: black rgba(0, 0, 0, 0.65) rgba(0, 0, 0, 0.6);
  -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 0 2px 2px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 0 2px 2px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);
}
.pagination .prev, .pagination .next {
  font-family: Noteworthy, Arial, sans-serif;
  font-size: 14px;
}
.pulseit{display:inline-block;-webkit-animation:pound .5s infinite;animation:pound .5s infinite;}
@keyframes pound {from {transform:none;}50% {transform:scale(1.4);}to {transform:none;}}

.warna-tulisan { 
color:#333 
}

/* CSS yang digunakan */ 
@-webkit-keyframes gantiwarna {0% {color:black}
20% {color:red}
40% {color:blue}
60% {color:green}
80% {color:gold}
100% {color:black}
}
@-moz-keyframes gantiwarna {
0% {color:black}
20% {color:red}
40% {color:blue}
60% {color:green}
80% {color:gold}
100% {color:black}
}
@-keyframes gantiwarna {
0% {color:black}
20% {color:red}
40% {color:blue}
60% {color:green}
80% {color:gold}
100% {color:black}
}

/* Penerapan efek pada element yang akan diberi efek*/ 
#warna-tulisan { 
animation: 5s infinite gantiwarna linear; /* Waktu 10 detik */
-webkit-animation: 5s infinite gantiwarna linear 
}

.box {
  background-color:#333;
  width:100px;
  height:100px;
  margin:0 auto;
  border:5px solid #FFF;
}
@-webkit-keyframes gantiwarna2 {
  0% {background-color:black}
  20% {background-color:red}
  40% {background-color:blue}
  60% {background-color:green}
  80% {background-color:gold}
  100% {background-color:black}
}
@-moz-keyframes gantiwarna2 {
  0% {background-color:black}
  20% {background-color:red}
  40% {background-color:blue}
  60% {background-color:green}
  80% {background-color:gold}
  100% {background:black}
}
@-keyframes gantiwarna2 {
  0% {background-color:black}
  20% {background-color:red}
  40% {background-color:blue}
  60% {background-color:green}
  80% {background-color:gold}
  100% {background-color:black}
}
.box {
  animation:10s infinite gantiwarna2 linear;
  -webkit-animation:10s infinite gantiwarna2 linear;
}
.mode9 {
    transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
}
.mode9:hover {
    box-shadow: 1px 1px 10px 3px rgba(0,0,0,0.5);
} 
.mode7 {
    border-radius: 30px 0 30px 0;
    -moz-border-radius: 30px 0 30px 0;
    -webkit-border-radius: 30px 0 30px 0;
    -o-border-radius: 30px 0 30px 0;
    transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
}
.mode7:hover {
    box-shadow: 1px 1px 10px 3px rgba(0,0,0,0.5);
    border-radius:0;
    -moz-border-radius:0;
    -webkit-border-radius:0;
    -o-border-radius:0;
}
img{
max-width:100%
}
.img6 {
    border-radius: 30px 0 30px 0;
    -moz-border-radius: 30px 0 30px 0;
    -webkit-border-radius: 30px 0 30px 0;
    -o-border-radius: 30px 0 30px 0;
    transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
}

.img6:hover {
    box-shadow: 1px 1px 10px 3px rgba(0,0,0,0.5);
    border-radius:0;
    -moz-border-radius:0;
    -webkit-border-radius:0;
    -o-border-radius:0;
}

a:hover {color:#0FF; background-color:blue;}

table {
	width: 75%;
}
table caption {
	font-size: 1.5em;
	margin: .25em 0 .75em;
}
table tr {
	padding: .35em;
}
table th,
table td {
	padding: 0em;
	font-size:1.2em;
}
table th {
	font-size: .85em;
	letter-spacing: .1em;
	text-transform: uppercase;
}
table td img {
	text-align: center;
}
@media screen and (max-width: 600px) {
	table {
		border: 0;
	}
	table caption {
		font-size: 1.3em;
	}
	table thead {
		display: none;
	}
	table tr {
		border-bottom: 0px solid transparent;
		display: block;
		margin-bottom: 0em;
	}
	table td {
		border-bottom: 0px solid transparent;
		display: block;
		font-size: .8em;
	}
	table td .teks{
		font-size:2em;
	}
	table td:before {
		content: attr(data-label);
		float: left;
		font-weight: bold;
		text-transform: uppercase;
	}
	table td:last-child {
		border-bottom: 0;
	}
}
.teks{
	font-family:Gabriola;
	font-size:50px;
	color:red;
}
#beritavideo{
	margin:3px;
	width:235px;
	float:left;
	height:270px;
}
</style>
<body>
<center>
<table border="0" width="1000">
<tr><td colspan="2"><img src="../images/Header Pesona Wisata Kuliner Jember.png" id="up" class="main" width="1000" alt="Header Pesona Wisata Kuliner Jember"></td></tr>
<tr><td colspan="2">
<div class="container">
<ul id="tabs">
    <li><a href="index.php" title="Beranda">Beranda</a></li>
    <li><a href="wisata.php" title="Wisata">Wisata</a></li>
    <li><a href="budaya.php" title="Budaya">Budaya</a></li>
    <li><a href="kuliner.php" title="Kuliner">Kuliner</a></li>
    <li><a href="resep.php" title="Resep">Resep</a></li>
    <li><a href="oleholeh.php" title="Oleh-Oleh">Oleh&nbsp;Oleh</a></li>
    <li><a href="berita.php" title="Berita">Berita</a></li>
    <li><a href="tambah.php" title="Tambah Data">Tambah</a></li>
    <li><a href="ubahpassword.php" title="Ubah Password">Ubah&nbsp;Password</a></li>
    <li><a href="logout.php" title="Log Out">Log&nbsp;Out</a></li>
</ul>
</div>
</td></tr>
<tr><td align="left"><script type='text/javascript'>
    <!--
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
    //-->
    </script><div id="clock"></div><script type="text/javascript">
    <!--
    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
     document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
    //-->
    </script></td><td align="right">
<a href="https://facebook.com/syarifah.aini.pelajar.Indonesia" title="Facebook"><img src="../images/Logo Facebook.png" height="50" alt="facebook"></a>
<a href="https://twitter.com/syarifah_aini98" title="Twitter"><img src="../images/Logo Twitter.png" height="50" alt="twitter"></a>
<a href="https://www.instagram.com/genius_unlimited/" title="Instagram"><img src="../images/Logo Instagram.png" height="50" alt="instagram"></a>
<a href="http://ask.fm/Syarifah_Aini98/" title="Ask.Fm"><img src="../images/Logo AskFm.png" height="50" alt="askfm"></a>
<a href="https://plus.google.com/u/0/101810821203860060479" title="Google+"><img src="../images/Logo Google.png" height="50" alt="google"></a>
<a href="https://www.youtube.com/channel/UCB_0Mt_f1lDRPR7ueWPnTMA" title="Youtube"><img src="../images/Logo Youtube.png" height="50" alt="youtube"></a></td></tr>
</table>
</center>
<div style="position:fixed; bottom: 0px; right: 10px;width:130px;height:100px;"><a href="#up"><img border="0" src="../images/Logo Ke Atas.png" title="Logo Ke Atas" alt="Logo Ke Atas" height="50" width="50" /></a></div>
</body>
</html>
<?php
}else{
	echo'<script>window.location="admin97.php"</script>';
}
?>