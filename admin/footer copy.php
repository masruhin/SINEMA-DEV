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

  // $jenisdok = "SELECT id_jenis_dok, jenis_dok as jenis FROM jenis_dok ORDER BY id_jenis_dok";
  // if ($jdok = mysqli_query($kon, $jenisdok)) {
  //   while ($o = mysqli_fetch_object($jdok)) {
  //     $labeldok[] = $o->jenis;
  //     $total[]        = intval($obje->SumDok);
  //   }
  //   mysqli_free_result($jdok);
  // }
  // echo json_encode($labeldok, JSON_PRETTY_PRINT);
  // echo json_encode($total, JSON_PRETTY_PRINT);
  

  $dok = "SELECT YEAR(a.tanggal_awal) AS tahun,
                      a.id_kerjasama,
                      a.id_jenis_dok,
                      a.id_jenis_dok,
                      b.jenis_dok,
                      COUNT(b.jenis_dok) as jenis,
                      COUNT(YEAR(a.tanggal_awal))
                    FROM
                      kerjasama AS a
                      LEFT JOIN jenis_dok AS b ON ( b.id_jenis_dok = a.id_jenis_dok )
                      GROUP BY b.jenis_dok";
  if ($rdok = mysqli_query($kon, $dok)) {
    while ($obje = mysqli_fetch_object($rdok)) {
      // $j = $obje["jenis"];
      // $t = $obje["tahun"];
      $j[]        = intval($obje->jenis);
      $t[]        = intval($obje->tahun);
    }
    mysqli_free_result($rdok);

  }
  echo json_encode($j, JSON_PRETTY_PRINT);
  echo json_encode($t, JSON_PRETTY_PRINT);
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

<!-- <script src="../vendor/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script> -->
<!-- HIGHCHART -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<!-- HIGHCHART -->

<script src="../vendor/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script>
$(function() {
  $("#dataTables").DataTable({
    pageLength: 5,
    lengthMenu: [
      [5, 10, 20, -1],
      [5, 10, 20, 'Semua']
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
  var chart = Highcharts.chart('container', {

    chart: {
      type: 'column'
    },

    title: {
      text: 'Jumlah Dokumen Kerjasama Aktif'
    },

    // subtitle: {
    //   text: 'Resize the frame or click buttons to change appearance'
    // },

    legend: {
      align: 'right',
      verticalAlign: 'middle',
      layout: 'vertical'
    },

    xAxis: {
      categories: [
        '2019',
        '2020',
        '2021'
      ],
      labels: {
        x: -10
      }
    },

    yAxis: {
      allowDecimals: false,
      title: {
        text: 'Jumlah'
      }
    },

    series: [{
      name: '<?= json_encode($j) ?>',
      data: [38, 51, 34]
    }],

    responsive: {
      rules: [{
        condition: {
          maxWidth: 500
        },
        chartOptions: {
          legend: {
            align: 'center',
            verticalAlign: 'bottom',
            layout: 'horizontal'
          },
          yAxis: {
            labels: {
              align: 'left',
              x: 0,
              y: -5
            },
            title: {
              text: null
            }
          },
          subtitle: {
            text: null
          },
          credits: {
            enabled: false
          }
        }
      }]
    }
  });

  document.getElementById('small').addEventListener('click', function() {
    chart.setSize(400);
  });

  document.getElementById('large').addEventListener('click', function() {
    chart.setSize(600);
  });

  document.getElementById('auto').addEventListener('click', function() {
    chart.setSize(null);
  });


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
