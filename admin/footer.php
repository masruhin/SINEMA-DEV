<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
  <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
        class="ml-25" href="#" target="_blank">Development</a></span></p>
</footer>

<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<?php
include 'config.php';
  $sql = "SELECT MONTH(a.tanggal_awal) AS MONTH, b.id_negara, b.negara_nama, Count(b.id_negara) AS SumDataFault 
          FROM kerjasama AS a LEFT JOIN negara AS b ON (b.id_negara = a.id_negara)
          GROUP BY MONTH(a.tanggal_awal), b.id_negara";
  if ($result = mysqli_query($kon, $sql)) {
    while ($obj = mysqli_fetch_object($result)) {
      $negara_nama[] = $obj->negara_nama;
      $jml[]        = intval($obj->SumDataFault);
    }
    mysqli_free_result($result);
  }
  ?>
<!-- <script src="../plugins/jquery/jquery.min.js"></script> -->
<!-- <script src="../plugins/select2/js/select2.full.min.js"></script> -->
<script src="../vendor/app-assets/vendors/js/vendors.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="../vendor/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="../vendor/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
<script src="../vendor/app-assets/js/scripts/pages/app-ecommerce-details.js"></script>
<script src="js/vendors.min.js"></script>
<script src="../vendor/app-assets/vendors/js/charts/chart.min.js"></script>
<script src="../vendor/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="../vendor/app-assets/js/core/app-menu.js"></script>
<script src="../vendor/app-assets/js/core/app.js"></script>
<!-- <script src="../vendor/app-assets/vendors/js/forms/select/select2.full.min.js"></script> -->
<script src="../vendor/app-assets/js/scripts/charts/chart-chartjs.js"></script>
<script src="../vendor/app-assets/js/scripts/forms/form-select2.js"></script>
<script src="../vendor/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../vendor/app-assets/vendors/js/file-uploaders/dropzone.min.js"></script>
<script src="../vendor/app-assets/js/scripts/forms/form-file-uploader.js"></script>
<!-- swal -->

<!-- HIGHCHART -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="../vendor/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>

<?php 
  
$tahun_in  = [];
$tahun_out = [];

$jml_in  = [];
$jml_out = [];

$semua = mysqli_query($kon, "SELECT YEAR(tanggal_awal) as tahun FROM kerjasama GROUP BY tahun ORDER BY tahun ASC");
$empty = [
    'tahun' => 0,
    'jml' => 0
];

$arr = [];
$label = [];

while($data = mysqli_fetch_assoc($semua)) {
    $tahun = $data['tahun'];
    $label[] = $tahun;

    $get_out = mysqli_query($kon, "SELECT YEAR(tanggal_awal) as tahun, COUNT(id_kerjasama) as jml FROM kerjasama WHERE YEAR(tanggal_awal) = '$tahun' AND negara_kat = 'INTERNASIONAL' GROUP BY tahun ORDER BY tahun ASC");
    $fetch_out = mysqli_fetch_assoc($get_out);
    $data_out = $fetch_out ? $fetch_out : $empty;
    $tahun_out[] = $data_out['tahun'];
    $jml_out[] = $data_out['jml'];

    $get_in = mysqli_query($kon, "SELECT YEAR(tanggal_awal) as tahun, COUNT(id_kerjasama) as jml FROM kerjasama WHERE YEAR(tanggal_awal) = '$tahun' AND negara_kat = 'NASIONAL' GROUP BY tahun ORDER BY tahun ASC");
    $fetch_in = mysqli_fetch_assoc($get_in);
    $data_in = $fetch_in ? $fetch_in : $empty;
    $tahun_in[] = $data_in['tahun'];
    $jml_in[] = $data_in['jml'];
}

$arr = [
    'tahun' => json_encode($label),
    'in' => [
        'tahun' => json_encode($tahun_in),
        'jml' => json_encode($jml_in),
    ],
    'out' => [
        'tahun' => json_encode($tahun_out),
        'jml' => json_encode($jml_out),
    ],
];
?>

<script>
const ctx = document.getElementById('grafik_cat');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?= $arr['tahun'] ?>,
    datasets: [{
        label: 'NATIONAL',
        data: <?= $arr['in']['jml'] ?>,
        borderWidth: 1,
        backgroundColor: '#48012f'
      },
      {
        label: 'INTERNATIONAL',
        data: <?= $arr['out']['jml'] ?>,
        borderWidth: 1,
        backgroundColor: '#029d00'
      },
    ]
  },
  options: {
    maintainAspectRatio: false,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>

<?php 
  
  $jenis_mou = [];
  $jml_mou = [];

  $jenis_IA = [];
  $jml_IA = [];

  $jenis_MOA = [];
  $jml_MOA = [];

  $semua = mysqli_query($kon, "SELECT YEAR(tanggal_awal) as tahun FROM kerjasama GROUP BY tahun ORDER BY tahun ASC");
  $empty = [
      'jenis' => '-', 
      'jml' => 0
  ];

  $arr = [];
  $label = [];

  while($data = mysqli_fetch_assoc($semua)) {
      $tahun   = $data['tahun'];
      $label[] = $tahun;

      $get_mou = mysqli_query($kon, "SELECT YEAR(tanggal_awal) as tahun, COUNT(kerjasama.id_jenis_dok) as jml, jenis_ket as jenis FROM kerjasama  LEFT JOIN jenis_dok ON kerjasama.id_jenis_dok = jenis_dok.id_jenis_dok WHERE YEAR(tanggal_awal) = '$tahun' AND kerjasama.id_jenis_dok = 1 GROUP BY tahun, kerjasama.id_jenis_dok ORDER BY tahun ASC");

      $fetch_mou   = mysqli_fetch_assoc($get_mou);
      $data_mou    = $fetch_mou ? $fetch_mou : $empty;
      $label_mou   = $data_mou['jenis'];
      $jenis_mou[] = $data_mou['jenis'];
      $jml_mou[]   = $data_mou['jml'];

      $get_IA = mysqli_query($kon, "SELECT YEAR(tanggal_awal) as tahun, COUNT(kerjasama.id_jenis_dok) as jml, jenis_ket as jenis FROM kerjasama  LEFT JOIN jenis_dok ON kerjasama.id_jenis_dok = jenis_dok.id_jenis_dok WHERE YEAR(tanggal_awal) = '$tahun' AND kerjasama.id_jenis_dok = 2 GROUP BY tahun, kerjasama.id_jenis_dok ORDER BY tahun ASC");

      $fetch_IA   = mysqli_fetch_assoc($get_IA);
      $data_IA    = $fetch_IA ? $fetch_IA : $empty;
      $label_IA   = $data_IA['jenis'];
      $jenis_IA[] = $data_IA['jenis'];
      $jml_IA[]   = $data_IA['jml'];

      $get_MOA = mysqli_query($kon, "SELECT YEAR(tanggal_awal) as tahun, COUNT(kerjasama.id_jenis_dok) as jml, jenis_ket as jenis FROM kerjasama  LEFT JOIN jenis_dok ON kerjasama.id_jenis_dok = jenis_dok.id_jenis_dok WHERE YEAR(tanggal_awal) = '$tahun' AND kerjasama.id_jenis_dok = 3 GROUP BY tahun, kerjasama.id_jenis_dok ORDER BY tahun ASC");

      $fetch_MOA   = mysqli_fetch_assoc($get_MOA);
      $data_MOA    = $fetch_MOA ? $fetch_MOA : $empty;
      $label_MOA   = $data_MOA['jenis'];
      $jenis_MOA[] = $data_MOA['jenis'];
      $jml_MOA[]   = $data_MOA['jml'];
  }

  $arr2 = [
      'tahun' => json_encode($label),
      'mou' => [
          'label' => 'MEMORANDUM OF UNDERSTANDING / NOTA KESEPAHAMAN',
          'jenis' => json_encode($jenis_mou),
          'jml' => json_encode($jml_mou),
      ],
      'IA' => [
          'label' => 'IMPLEMENTATION OF AGREEMENT / PETUNJUK PELAKSANAAN TEKNIS',
          'jenis' => json_encode($jenis_IA),
          'jml' => json_encode($jml_IA),
      ],
      'MOA' => [
          'label' => 'MEMORANDUM OF AGREEMENT / PERJANJIAN KERJASAMA',
          'jenis' => json_encode($jenis_MOA),
          'jml' => json_encode($jml_MOA),
      ],
  ];
?>

<script>
const ctx2 = document.getElementById('grafik_jenis');

new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: <?= $arr2['tahun'] ?>,
    datasets: [{
        label: '<?= $arr2['mou']['label'] ?>',
        data: <?= $arr2['mou']['jml'] ?>,
        borderWidth: 1,
        backgroundColor: '#d95f02'
      },
      {
        label: '<?= $arr2['IA']['label'] ?>',
        data: <?= $arr2['IA']['jml'] ?>,
        borderWidth: 1,
        backgroundColor: '#1b9e77'
      },
      {
        label: '<?= $arr2['MOA']['label'] ?>',
        data: <?= $arr2['MOA']['jml'] ?>,
        borderWidth: 1,
        backgroundColor: '#ffe800'
      },
    ]
  },
  options: {
    maintainAspectRatio: false,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>

<script>
$(function() {
  $("#dataTables").DataTable({
    pageLength: 25,
    lengthMenu: [
      [25, 50, 75, 100 - 1],
      [25, 50, 75, 100, 'Semua']
    ],
    "responsive": true,
    "autoWidth": true,
  });
});
</script>
<script>
$(window).on('load', function() {
  if (feather) {
    feather.replace({
      width: 14,
      height: 14
    });
  }
})
</script>
<script>
$(window).on('load', function() {
  'use strict';

  var chartWrapper = $('.chartjs'),
    flatPicker = $('.flat-picker'),
    radarChartEx = $('.radar-chart-ex'),
    negara = $('.negara');

  // Color Variables
  var primaryColorShade = '#836AF9',
    yellowColor = '#ffe800',
    successColorShade = '#28dac6',
    warningColorShade = '#ffe802',
    warningLightColor = '#FDAC34',
    infoColorShade = '#299AFF',
    greyColor = '#4F5D70',
    blueColor = '#2c9aff',
    blueLightColor = '#84D0FF',
    greyLightColor = '#EDF1F4',
    tooltipShadow = 'rgba(0, 0, 0, 0.25)',
    lineChartPrimary = '#666ee8',
    lineChartDanger = '#ff4961',
    labelColor = '#6e6b7b',
    grid_line_color = 'rgba(200, 200, 200, 0.2)'; // RGBA color helps in dark layout

  // Detect Dark Layout
  if ($('html').hasClass('dark-layout')) {
    labelColor = '#b4b7bd';
  }

  // Wrap charts with div of height according to their data-height
  if (chartWrapper.length) {
    chartWrapper.each(function() {
      $(this).wrap($('<div style="height:' + this.getAttribute('data-height') + 'px"></div>'));
    });
  }

  // Init flatpicker
  if (flatPicker.length) {
    var date = new Date();
    flatPicker.each(function() {
      $(this).flatpickr({
        mode: 'range',
        defaultDate: ['2019-05-01', '2019-05-10']
      });
    });
  }

  //CHART MOU
  // Data retrieved from https://www.ssb.no/statbank/table/10467/
  google.charts.load('current', {
    'packages': ['bar']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'Sales', 'Expenses', 'Profit'],
      <?php 
      include 'config.php';

      $dok = "SELECT YEAR(a.tanggal_awal) AS tahun,
      a.id_kerjasama,
      a.id_jenis_dok,
      a.id_jenis_dok,
      b.jenis_dok as jenis,
      COUNT(b.jenis_dok) as jmljenis,
      COUNT(YEAR(a.tanggal_awal))
    FROM
      kerjasama AS a
      LEFT JOIN jenis_dok AS b ON ( b.id_jenis_dok = a.id_jenis_dok )
      GROUP BY b.jenis_dok";
        $rdok = mysqli_query($kon, $dok);
        while ($obje = mysqli_fetch_array($rdok)) {
        $j = $obje["jenis"];
        $jj = $obje["jmljenis"];
        $t = $obje["tahun"];
      ?>

      ['<?php echo $t ?>', 1000, 400, 200],
      <?php 
    }
    ?>
    ]);

    var options = {
      chart: {
        title: 'Company Performance',
        subtitle: 'Sales, Expenses, and Profit: 2014-2017',
      },
      bars: 'vertical', // Required for Material Bar Charts.
      hAxis: {
        format: 'decimal'
      },
      height: 400,
      colors: ['#1b9e77', '#d95f02', '#7570b3']
    };

    var chart = new google.charts.Bar(document.getElementById('chart_div'));

    chart.draw(data, google.charts.Bar.convertOptions(options));

    var btns = document.getElementById('btn-group');

    btns.onclick = function(e) {

      if (e.target.tagName === 'BUTTON') {
        options.hAxis.format = e.target.id === 'none' ? '' : e.target.id;
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    }
  }


  // CHART NEGARA
  if (negara.length) {
    var polarExample = new Chart(negara, {
      type: 'polarArea',
      options: {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration: 500,
        legend: {
          position: 'right',
          labels: {
            usePointStyle: true,
            padding: 25,
            boxWidth: 9,
            fontColor: labelColor
          }
        },
        layout: {
          padding: {
            top: -5,
            bottom: -45
          }
        },
        tooltips: {
          // Updated default tooltip UI
          shadowOffsetX: 1,
          shadowOffsetY: 1,
          shadowBlur: 8,
          shadowColor: tooltipShadow,
          backgroundColor: window.colors.solid.white,
          titleFontColor: window.colors.solid.black,
          bodyFontColor: window.colors.solid.black
        },
        scale: {
          scaleShowLine: true,
          scaleLineWidth: 1,
          ticks: {
            display: false,
            fontColor: labelColor
          },
          reverse: false,
          gridLines: {
            display: false
          }
        },
        animation: {
          animateRotate: false
        }
      },
      data: {
        labels: <?= json_encode($negara_nama) ?>,
        datasets: [{
          label: 'Population (millions)',
          backgroundColor: [
            primaryColorShade,
            warningColorShade,
            window.colors.solid.primary,
            infoColorShade,
            greyColor,
            successColorShade
          ],
          data: <?= json_encode($jml) ?>,
          borderWidth: 0
        }]
      }
    });
  }

});
</script>
