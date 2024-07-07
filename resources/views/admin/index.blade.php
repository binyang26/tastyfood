@extends('components.dashboard')
@section('konten')
        <div class="right_col" role="main">
          <div class="">
            <div class="row" style="display: inline-block;">
            <div class="top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"></i></div>
                  <div class="count">{{ $totalBerita}}</div>
                  <h3>Total Berita</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"></i></div>
                  <div class="count">{{ $totalGaleri}}</div>
                  <h3>Total Galeri</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"></div>
                  <div class="count">{{$percentageBerita}}%</div>
                  <h3>Persentase Berita</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"></i></div>
                  <div class="count">{{$percentageGaleri}}%</div>
                  <h3>Persentase Galeri</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
            </div>
          </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Keseluruhan</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12 col-sm-12 ">
                      <div class="demo-container" style="height:280px">
                        <canvas id="dataChart" height="300"></canvas>
                      </div>

                    </div>


                  </div>
                </div>
              </div>
            </div>





          </div>
        </div>
        <!-- /page content -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('dataChart').getContext('2d');
    var dataChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Berita', 'Galeri'],
            datasets: [{
                label: 'Persentase Data',
                data: [{{ $percentageBerita }}, {{ $percentageGaleri }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true
        }
    });
</script>
 
@endsection
