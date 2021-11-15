
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);


              

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Diagnosa', ''],
          //<?php $result = $pie_data;?>

      <?php $result = $pie_data;
     $num_results = $result->num_rows();
     if( $num_results <= 360){ ?>


        <?php
        foreach ($pie_data->result_array() as $row) {
         extract($row);
        echo "['{$diagnosa}', '{$total}'], " ;
         } ?>
        ]);

        var options = {
          title: 'Grafik Data Penyakit',
          colors: ['red','green', 'purple','pink','blue'],
          data: data,
          pieSliceText: 'diagnosa',
          chartArea:{width:'360%',height:'180%'},
          is3D: true
        };
        var chart = new google.visualization.PieChart(document.getElementById('chartoval1'));
        chart.draw(data, options);
      }
      google.setOnLoadCallback(drawVisualization);
      <?php
    }else{
        echo "Tidak ada data di database.";
    } ?>
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tahun', 'Jumlah'],
          ['2019',  <?php echo $kd2019 ?>],
          ['2018',  <?php echo $kd2018 ?>],
          ['2017',  <?php echo $kd2017 ?>],
        ]);
        var options = {
          title: 'Data Perkembangan Tahunan',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Diagnosa', 'Jumlah'],
          ['Tidak Ada', <?php echo $tidak_ada19 ?>],
          ['BFF Helminthiasis', <?php echo $bff_helmi19 ?>],
          ['Myasis', <?php echo $myasis19 ?>],
          ['Thelaziasis', <?php echo $Thelaziasis19 ?>],
          ['Anorexia', <?php echo $Anorexia19 ?>],
          ['Helminthiasis', <?php echo $Helminthiasis19 ?>],
          ['Scabies', <?php echo $Scabies19 ?>],
          ['ORF', <?php echo $ORF19 ?>],
        ]);
        var options = {
          title: 'Perkembangan Penyakit Hewan 2019',
          is3D: true
        };
        var chart = new google.visualization.PieChart(document.getElementById('2019'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Diagnosa', 'Jumlah'],
          ['Tidak Ada', <?php echo $tidak_ada18 ?>],
          ['BFF Helminthiasis', <?php echo $bff_helmi18 ?>],
          ['Myasis', <?php echo $myasis18 ?>],
          ['Thelaziasis', <?php echo $Thelaziasis18 ?>],
          ['Anorexia', <?php echo $Anorexia18 ?>],
          ['Helminthiasis', <?php echo $Helminthiasis18 ?>],
          ['Scabies', <?php echo $Scabies18 ?>],
          ['ORF', <?php echo $ORF18 ?>],
        ]);

        var options = {
          title: 'Perkembangan Penyakit Hewan 2018',
          is3D: true
        };
        var chart = new google.visualization.PieChart(document.getElementById('2018'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Diagnosa', 'Jumlah'],
          ['Tidak Ada', <?php echo $tidak_ada17 ?>],
          ['BFF Helminthiasis', <?php echo $bff_helmi17 ?>],
          ['Myasis', <?php echo $myasis17 ?>],
          ['Thelaziasis', <?php echo $Thelaziasis18 ?>],
          ['Anorexia', <?php echo $Anorexia17 ?>],
          ['Helminthiasis', <?php echo $Helminthiasis17 ?>],
          ['Scabies', <?php echo $Scabies17 ?>],
          ['ORF', <?php echo $ORF17 ?>],
        ]);
        var options = {
          title: 'Perkembangan Penyakit Hewan 2017',
          is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('2017'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis', 'Jumlah'],
          ['Sapi', <?php echo $sapi ?>],
          ['Kambing',<?php echo $kambing ?>],
        ]);
        var options = {
          title: 'Jumlah Hewan'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart22'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Hasil', 'Total'],
          //<?php $result = $pie_data;?>

     <?php $result = $pie_data1;
    $num_results = $result->num_rows();
    if( $num_results > 0){ ?>
                    <?php
                    foreach ($pie_data1->result_array() as $row) {
                        extract($row);
                        echo "['{$hasil}', '{$total}'], " ;
                    } ?>
        ]);
        var options = {
          title: 'Grafik Data Penyakit',
          colors: ['red','green', 'purple','pink','blue'],
          data: data,
          pieSliceText: 'hasil',
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart.draw(data, options);
      }
      google.setOnLoadCallback(drawVisualization);
      <?php
    }else{
        echo "Tidak ada data di database.";
    } ?>
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Hasil', 'Total'],
          //<?php $result = $pie_data;?>

     <?php $result = $pie_data2;
    $num_results = $result->num_rows();
    if( $num_results <= 10){ ?>
                    <?php
                    foreach ($pie_data2->result_array() as $row) {
                        extract($row);
                        echo "['{$hasil}', '{$total}'], " ;
                    } ?>
        ]);
        var options = {
          title: 'Grafik Data Penyakit',
          colors: ['red','green', 'purple','pink','blue'],
          data: data,
          pieSliceText: 'hasil',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
      }
      google.setOnLoadCallback(drawVisualization);
      <?php
    }else{
        echo "Tidak ada data di database.";
    } ?>
    </script>

    <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Kecamatan", "Jumlah", { role: "style" } ],
        ["Bunga Raya", <?php echo $Kec_Bunga_Raya ?>, "#b87333"],
        ["Dayun", <?php echo $Kec_Dayun ?>, "#b87333"],
        ["Kandis", <?php echo $Kec_Kandis ?>, "#b87333"],
        ["Kerinci Kanan", <?php echo $Kec_Kerinci_Kanan ?>, "#b87333"],
        ["Koto Gasip", <?php echo $Kec_Koto_Gasip ?>, "#b87333"],
        ["Siak", <?php echo $Kec_Siak ?>, "#b87333"],
        ["Sabak Auh", <?php echo $Kec_Sabak_Auh ?>, "#b87333"],
        ["Tualang", <?php echo $Kec_Tualang ?>, "#b87333"],
        ["Minas", <?php echo $Kec_Minas ?>, "#b87333"],
        ["Sungai Apit", <?php echo $Kec_Sungai_Apit ?>, "#b87333"],
        ["Pusako", <?php echo $Kec_pusako ?>, "#b87333"],
        ["Lubuk Dalam", <?php echo $Kec_lubuk_dalam ?>, "#b87333"],
        ["Mandau", <?php echo $Kec_sungai_mandau ?>, "#b87333"],
        ["Mempura", <?php echo $Kec_mempura ?>, "#b87333"],
      ]);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);
      var options = {
        title: "Jumlah Hewan Berdasarkan Daerah",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
    <div id="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>
        <h1><?= $title; ?></h1>
        <hr>
        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
            <i class="fas fa-chart-bar">Perkembangan data perdaerah</i>
            <div id="columnchart_values" width="100%" height="100"></div>
              </div>
              <div class="card-footer small text-muted"></div>
            </div>
          </div>
          <!--dua-->
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
              <i class="fas fa-chart-pie">Jenis Hewan</i>
              <div id="piechart22" width="100%" height="100"></div>
              </div>
              <div class="card-footer small text-muted"></div>
            </div>
          </div>
          </div>
  <div class="row">
          <div class="col-lg-7">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie">Jumlah Hewan Tahunan</i>
                  <div id="curve_chart" width="100%" height="100"></div>
                  </div>
              <div class="card-footer small text-muted"></div>
            </div>
          </div>
    </div>
<div class="card-header">
  <i class="fas fa-chart-pie">2019</i>
  <div id="2019" style="width: 700px; height: 300px"></div>
</div>

<div class="card-header">
  <i class="fas fa-chart-pie">2018</i>
  <div id="2018" style="width: 700px; height: 300px"></div>
</div>

<div class="card-header">
  <i class="fas fa-chart-pie">2017</i>
  <div id="2017" style="width: 700px; height: 300px"></div>
</div>
      </div>
      
