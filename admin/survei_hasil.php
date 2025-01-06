<?php 
include "header.php";
include "config.php";

?>
<!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Informasi</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="faq-search-filter">
        <div class="card faq-search" style="background-image: url('../../../app-assets/images/banner/banner.png')">
          <div class="card-body text-center">
            <h2 class="text-primary">Informasi Hasil Responden</h2>
          </div>
        </div>
      </section>
    </div>


    <?php
		error_reporting(1);
		$result=mysqli_query($kon, "SELECT groupId from tgroup group by groupId ");
		$kolom = 2;
		$array=array();
		while ($sql=mysqli_fetch_array($result)) 
		{
			array_push($array, $sql);
		}
		$chunks=array_chunk($array, $kolom);

			foreach ($chunks as $chunk) {
			    foreach ($chunk as $data) {
			        echo "<div class='col-md-6'style='padding-left:0px;padding-right:0px;'>";
			        $data2=mysqli_fetch_array(mysqli_query($kon, "SELECT *from tgroup where groupId='$data[groupId]' group by groupId "));
			        ?>
    <div class="panel panel-primary" style='margin-left:10px'>
      <div class="panel-heading">
        <div class="panel-title"><?php echo $data2['groupName']; ?></div>
      </div>
      <div class="panel-body">
        <table id="myHTMLTable<?php echo $data2['groupId']; ?>" border="0" cellpadding="5" class="table table-striped">
          <tr>
            <th>
              <font size=2 face=tahoma>Data</font>
            </th>
            <th style="text-align: center;">
              <font size=2 face=tahoma >Tidak Puas <br>(Unsatisfied)</font>
            </th>
            <th style="text-align: center;">
              <font size=2 face=tahoma>Kurang Puas <br>(Less Satisfied</font>
            </th>
            <th style="text-align: center;">
              <font size=2 face=tahoma>Puas <br>(Satisfied)</font>
            </th>
            <th style="text-align: center;">
              <font size=2 face=tahoma>Sangat Puas <br>(Very Satisfied)</font>
            </th>
            <!-- <th>
              <font size=2 face=tahoma>Jawaban E</font>
            </th> -->
          </tr>
          <?php
include 'config.php';
							$sql = mysqli_query($kon, "SELECT SUM(jawabanA) As TotalA,
													SUM(jawabanB) As TotalB,
													SUM(jawabanC) As TotalC,
													SUM(jawabanD) As TotalD,
													SUM(jawabanE) As TotalE
													FROM tanswer where groupId='$data2[groupId]' ");
							$nom = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM tanswer where groupId='$data2[groupId]'"));
							
							$noo=1;
							$oke = mysqli_fetch_array($sql);
								$d = $oke['TotalD'];
								$c = $oke['TotalC'];
								$b = $oke['TotalB'];
								$a = $oke['TotalA'];
								$e = $oke['TotalE'];
								$tot = $a+$b+$c+$d+$e;
								
								$pd = ROUND(($d / $tot) * 100);
								$pc = ROUND(($c / $tot) * 100);
								$pb = ROUND(($b / $tot) * 100);
								$pa = ROUND(($a / $tot) * 100);
								$pe = ROUND(($e / $tot) * 100);
									echo "<tr >
										<td><font size=3 face=tahoma>Jumlah Jawaban</font></td>
										<td><font size=2 face=tahoma>$d</font></td>
										<td><font size=2 face=tahoma>$c</font></td>
										<td><font size=2 face=tahoma>$b</font></td>
										<td><font size=2 face=tahoma>$a</font></td>
									  </tr>
									  <tr >
										<td><font size=3 face=tahoma>Prosentase</font></td>
										<td><font size=2 face=tahoma>$pd%</font></td>
										<td><font size=2 face=tahoma>$pc%</font></td>
										<td><font size=2 face=tahoma>$pb%</font></td>
										<td><font size=2 face=tahoma>$pa%</font></td>
									  </tr>
									  ";	 
							?>

        </table>
        <script type="text/javascript">
        $('#myHTMLTable<?php echo $data2['groupId']; ?>').convertToFusionCharts({
          swfPath: "fusion/Charts/",
          type: "MSColumn3D",
          data: "#myHTMLTable",
          dataFormat: "HTMLTable",
          width: 500,
          height: 300,
        });
        </script>
      </div>
    </div>
    <?php
			        echo '</div>';
			    }
			    
			}
			
		?>
  </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<?php include "footer.php";?>

</body>

</html>
