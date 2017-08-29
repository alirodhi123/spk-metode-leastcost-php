<?php
ini_set('display_errors', '0');
?>
<html>
	<head>
		<title>SPK Least Cost</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
	</head>

<body>

<!-- Navbar -->
 <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a href="#home" class="navbar-brand page-scroll">Sistem Pendukung Keputusan</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
          <li><a href="#input_biaya" class="page-scroll"> Input Biaya </a></li>
          <li><a href="#form_biaya" class="page-scroll"> Biaya Transportasi </a></li>
          <li><a href="#kebutuhan_tujuan" class="page-scroll"> Kebutuhan Tujuan </a></li>
          <li><a href="#stok_sumber" class="page-scroll"> Stok Sumber </a></li>
          <li><a href="#profil" class="page-scroll"> Developers </a></li>
          <li><a href="index.php" class="page-scroll"> Refresh</a></li>
         </ul>
      </div>
    </div>
  </nav>
<!-- Akhir Navbar -->



<!-- Jumbotron -->
  <div style="background-image: url('img/background1.jpg'); height: 500px;" class="jumbotron text-center" >
      <h1 style="margin-top: 140px; color: #eaeaea; text-shadow: 2px 2px 10px rgba(0,0,0,0.9);">Leastcost Method</h1>
      <p>Teknik Informatika | Politeknik Elektronika Negeri Surabaya</p>

 </div>
<!-- Akhir Jumbotron -->




<!-- Input Biaya -->
<form method="get" action="" required class="form-horizontal">
 <section class="about" id="input_biaya">
	 <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Input Biaya</h2>
            <hr style="width: 200px; border: 2px solid">
          </div>
        </div>

        <!-- Kolom Biaya sumber -->
		<div class="form-group">
			<div class="col-sm-4 col-sm-offset-4">
				<input class="form-control" id="jmlsumber" name="jmlsumber" type="number" value="" placeholder="Input Sumber" />
			</div>
		</div>


		<!-- Kolom Biaya Tujuan -->
		<div class="form-group">
			<div class="col-sm-4 col-sm-offset-4"> 
				<input class="form-control" id="jmltujuan" name="jmltujuan" type="number" value="" placeholder="Input Tujuan" />
			</div>
		</div>


		<!-- Button Input -->
		 <div class="row">
          <div class="col-sm-7 col-sm-offset-5">
            <div class="col-sm-5">
               <a class="btn btn-primary" href="#form_biaya" id="klikbiaya">Inputkan Biaya</a>
            </div>
          </div>
        </div>
    </div>
 </section>
 <!-- Akhir Input Biaya -->

 
  <!-- Form Biaya transportasi -->
    <section  style="background-color: #eee; margin-top: 100px" class="formbiaya" id="form_biaya">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Biaya Transportasi</h2>
            <hr style="width: 300px; border: 2px solid">
          </div>
        </div>

        <!-- Tampilan Kolom -->
        <div class="row">
             <div class="col-sm-10 col-sm-offset-1">
               	 <div  id="viewbiaya"></div>
             </div>
        </div>
        <!-- Akhir Tampilan kolom -->


        <!-- Tampilan Button -->
        <div class="row">
          <div class="col-sm-10 col-sm-offset-4">
            <div class="col-sm-5">
               <a style="margin: 30px;" class="btn btn-primary" href="javascript:;" id="klikdem">Inputkan Kebutuhan Tujuan</a>
            </div>
          </div>
        </div>
        <!-- Akhir Tampilan button -->
      </div>
    </section>
  <!-- Akhir form biaya transportasi -->


  
  <!-- Form kebutuhan tujuan -->
     <section  style="margin-top: 80px" class="kebutuhantujuan" id="kebutuhan_tujuan">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Kebutuhan Tujuan</h2>
            <hr style="width: 250px; border: 2px solid">
          </div>
        </div>

        <!-- Tampilan Kolom -->
        <div class="row">
             <div class="col-sm-8 col-sm-offset-4">
               	 <div  id="viewdem"></div>
             </div>
        </div>
        <!-- Akhir Tampilan kolom -->


        <!-- Tampilan Button -->
        <div class="row">
          <div class="col-sm-10 col-sm-offset-4">
            <div class="col-sm-5">
               <a style="margin: 30px;" class="btn btn-primary" href="javascript:;" id="kliksup">Inputkan Stok Sumber</a>
            </div>
          </div>
        </div>
        <!-- Akhir Tampilan button -->
      </div>

    </section>
  <!-- Akhir form kebutuhan tujuan -->

		
  
    <!-- Form stok sumber -->
    <section  style="background-color: #eee; margin-top: 70px" class="formbiaya" id="stok_sumber">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Stok Sumber</h2>
            <hr style="width: 200px; border: 2px solid">
          </div>
        </div>

        <!-- Tampilan Kolom -->
        <div class="row">
             <div class="col-sm-8 col-sm-offset-4">
               	 <div  id="viewsup"></div>
             </div>
        </div>
        <!-- Akhir Tampilan kolom -->
      </div>
    </section>
  <!-- Akhir form stok sumber -->
		

		 <div class="row">
          <div class="col-sm-10 col-sm-offset-4">
            <div class="col-sm-5">
               <button style="margin: 30px;" type="submit" class="btn btn-success" name="btnHitung" id="btnHitung">Hitung Sekarang !!!</button>
            </div>
          </div>
        </div>
		
	</form>


<!-- Isi Hasil Perhitungan-->
<div class="container-fluid">
	
	<?php
	if($_GET['jmlsumber'] != null && $_GET['jmltujuan'] != null){
		//inisialisasi
		$m = $_GET['jmlsumber']; $n = $_GET['jmltujuan'];
		$ambiltuj = $m; $ambilsmb = $n;
		$c[20][20] = array(); $dem[20] = array(); $sup[20] = array();
		$rf[20] = array(); $cf[20] = array(); $cc[20][20] = array();
		$sum = 0; $min = 0; $b = 0; $d = 0; $c1 = 0; $c2 = 0; $p = 0; $q = 0; $i = 0; $j = 0;

		//inputan
		for($i=0; $i<$m; $i++){
			for($j=0; $j<$n; $j++){
				$c[$i][$j] = $_GET['s'.$i.'t'.$j];
			}
		}

		for($i=0; $i<$m; $i++) $dem[$i] = $_GET['dem'.$i];
		for($j=0; $j<$n; $j++) $sup[$j] = $_GET['sup'.$j];

		//perhitungan
		for($j=0; $j<$m; $j++) $rf[$j] = 0;
		for($j=0; $j<$n; $j++) $cf[$j] = 0;
		$b = $m; $d = $n;
		
		echo "<h3>Gambar Model Transport</h3>";
		while($b>0 and $d>0){
			$min = 1000;
			for($i=0; $i<$m; $i++){
				if($rf[$i] != 1){
					for($j=0; $j<$n; $j++){
						if($cf[$j] != 1){
							if($min > $c[$i][$j]){
								$min = $c[$i][$j];
								$p = $i;
								$q = $j;
							}
						}
					}
				}
			}

			if($sup[$p] < $dem[$q])
				$c1 = $sup[$p];
			else
				$c1 = $dem[$q];

			for($i=0; $i<$m; $i++){
				if($rf[$i] != 1){
					for($j=0; $j<$n; $j++){
						if($cf[$j] != 1){
							if($min == $c[$i][$j]){
								if($sup[$i] < $dem[$j])
									$c2 = $sup[$i];
								else
									$c2 = $dem[$j];

								if($c2 > $c1){
									$c1 = $c2;
									$p = $i;
									$q = $j;
								}
							}
						}
					}
				}
			}
			
			if($sup[$p] < $dem[$q]){
				$sum = $sum + $c[$p][$q] * $sup[$p];
				$dem[$q] = $dem[$q] - $sup[$p];
				$rf[$p] = 1;
				$b = $b-1;
				echo " Sumber ".$p." ---------- ".$sup[$p]." ----------> Tujuan ".$q."<br>";
				$cc[$p][$q] = $sup[$p];
			}elseif($sup[$p] > $dem[$q]){
				$sum = $sum + $c[$p][$q] * $dem[$q];
				$sup[$p] = $sup[$p] - $dem[$q];
				$cf[$q] = 1;
				$d = $d-1;
				echo "Sumber ".$p." ---------- ".$dem[$q]." ----------> Tujuan ".$q."<br>";
				$cc[$p][$q] = $dem[$q];
			}elseif($sup[$p] == $dem[$q]){
				$sum = $sum + $c[$p][$q] * $sup[$p];
				$rf[$p] = 1;
				$cf[$q] = 1;
				$b = $b-1;
				$d = $d-1;
				echo " Sumber ".$p." ---------- ".$sup[$p]." ----------> Tujuan ".$q."<br>";
				$cc[$p][$q] = $sup[$p];
			}else{
				$cc[$p][$q] = 0;
			}
		}
		
	?>
		<h3>Gambar Tabel</h3>
		<table class="table">
			<tr>
				<td></td>
				<?php for($i=0; $i<$ambiltuj; $i++){
					echo "<td align='center'>Tujuan ".$i."</td>";
				} ?>
			</tr>

			<?php for($i=1; $i<=$ambilsmb+1; $i++){ ?>
				<tr>
					<td><?php echo ($i-1 == $ambilsmb)? "" :"Sumber ".($i-1);?></td>
					<?php for($j=1; $j<=$ambiltuj+1; $j++){ ?>
						<td>
							<?php							
							if($i-1 == $ambilsmb && $j-1 == $ambiltuj){
								echo "";
							}else{
								if($j == $ambiltuj+1){
									$namavariabel = 'sup'.($i-1); ?>
									<a href="#" class="btn btn-default"><?php echo $_GET[$namavariabel];?></a>
								<?php }else if($i == $ambilsmb+1){
									$namavariabel = 'dem'.($j-1); ?>
									<a href="#" class="btn btn-default"><?php echo $_GET[$namavariabel];?></a>
								<?php }else{
									$namavariabel = "s".($i-1)."t".($j-1);  ?>
									<a href="#" class="btn btn-default"><?php echo $_GET[$namavariabel];?></a>
									<a href="#" class="btn btn-default"><?php echo ($cc[($i-1)][($j-1)] == null) ? " - " : $cc[$i-1][$j-1];?></a>
								<?php } ?>
							<?php }?>
						</td>
					<?php } ?>
				</tr>
			<?php } ?>
		</table>
		<h3>Perhitungan </h3>
		<?php
		for($i=0; $i<$m; $i++){
			for($j=0; $j<$n; $j++){
				if($cc[$i][$j] == 0) $ccc = 0; else $ccc = $cc[$i][$j];
				if(($i+1) == $m && ($j+1) == $n) $op = " = "; else $op = " + ";
				echo "(".$c[$i][$j]." * ".$ccc.") ".$op;
			}
		}
		echo $sum;
		?>
		<h3>Total Seluruh Biaya Rp <?php echo $sum;?></h3>
	<?php } ?>
</div>
<!-- Akhir Isi Web -->




<!-- POPUP peringatan -->
<div id="myPopUp" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Warning !</h4>
      </div>
      <div class="modal-body">
        <p id="echocek"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir POPUP peringatan -->




<!-- Pfrofil -->
    <section class="profil" id="profil">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2  class="text-center">Developers</h2>
            <hr style=" width: 200px; border: 2px solid">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3"><img src="img/1.JPG" class="img-thumbnail"> <p class="text-center">Kila Kiantari Katasya</p></div>
          <div class="col-sm-3"><img src="img/0.JPG" class="img-thumbnail"> <p class="text-center">Muhammad Ali Rodhi</p></div>
          <div class="col-sm-3"><img src="img/3.JPG" class="img-thumbnail"> <p class="text-center">Lina Meritha</p></div>
          <div class="col-sm-3"><img src="img/4.JPG" class="img-thumbnail"> <p class="text-center">Ahmad Ardiansyah</p></div>
        </div>
      </div>
    </section>
  <!-- Akhir Profil -->


		<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="../bootstrap/js/script.js"></script>


<!-- Perhitungan Script -->
<script>
	$(function(){
		var smb = $("#jmlsumber").val();
		var tuj = $("#jmltujuan").val();
		
		$("#form_biaya").hide();
		$("#kebutuhan_tujuan").hide();
		$("#stok_sumber").hide();
		$("#klikdem").hide();
		$("#kliksup").hide();
		
		$("#klikbiaya").click(function(){
			var tambahan = "<br>Form Biaya Transportasi<br>";
			var sumber = $("#jmlsumber").val();
			var tujuan = $("#jmltujuan").val();
			for(i=0; i<sumber; i++){
				for(j=0; j<tujuan; j++){
                    tambahan += "S "+i+" T "+j+" : <input name='s"+i+"t"+j+"' type='number' />";
				}
				tambahan += "<br>";
			}
			$("#viewbiaya").html(tambahan);
			$("#form_biaya").show();
			$("#klikdem").show();
		});
		
		$("#klikdem").click(function(){
			var tambahan = "<br>Form Kebutuhan Tujuan<br>";
			var sumber = $("#jmlsumber").val();
			var tujuan = $("#jmltujuan").val();			
			for(i=0; i<sumber; i++){
                tambahan += "Total Tujuan "+i+" <input id='dem"+i+"' name='dem"+i+"' type='number' /><br>";
			}
			$("#viewdem").html(tambahan);
			$("#kebutuhan_tujuan").show();
			$("#kliksup").show();
		});

        $("#kliksup").click(function(){
            var tambahan = "<br>Form Stok Sumber<br>";
			var ch = "";
            var sumber = $("#jmlsumber").val();
            var tujuan = $("#jmltujuan").val();
            for(i=0; i<tujuan; i++){
                tambahan += "Total Sumber "+i+" <input id='sup"+i+"' name='sup"+i+"' type='number' /><br>";
            }
            tambahan += "<br><a href='javascript:;' onClick='hitung()' id='cekTotal' class='btn btn-default'>Cek Inputan</a>"
            $("#viewsup").html(tambahan);
            $("#stok_sumber").show();
        });
		
	});
	
	$("#btnHitung").hide();
	
	function hitung(){
		var totdem = new Number(0); var totsup = new Number(0);
		for(i=0; i<$("#jmlsumber").val(); i++) totdem =  totdem + new Number($("#dem"+i).val());
		for(i=0; i<$("#jmltujuan").val(); i++) totsup =  totsup + new Number($("#sup"+i).val());
		if(totdem == totsup){
			$("#echocek").html("Total Sumber dan Tujuan <b>Sama</b>.");
			$("#myPopUp").modal("show");
			$("#btnHitung").show();
			$("#cekTotal").hide();
		}else{
			$("#echocek").html("Total Sumber dan Tujuan <b>Tidak  Sama</b>.");
			$("#myPopUp").modal("show");
			$("#btnHitung").hide();
			$("#cekTotal").show();
		}
	}
	
	$("#aboutus").click(function(){
		$("#myAboutUs").modal("show");
	});

</script>
<!-- Akhir Perhitungan Script -->

<script type="text/javascript">
	$(window).scroll(function(){
	if ($(document).scrollTop() > 50) {
		$('nav').addClass('shrink');
	}
	else{
		$('nav').removeClass('shrink');
	}
});
</script>

</body>
</html>
