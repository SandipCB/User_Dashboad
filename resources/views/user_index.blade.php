<!DOCTYPE html>
<html lang="en">

<head>
  @include('user_css')
</head>

<body>
  <!-- user Page Header/Hero area bar code -->
  @include('user_header')

  <!-- user Side bar Navigation -->
  @include('sidebar_navigation')

  <!-- user Dashboard title start  -->
  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <a text-algin="center">User Dashboard</a>
      </div>
    </div>
    <!-- user Dashboard title End  -->

    <!-- Others Section start-->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="stats-with-chart-2 block">
              <div class="title"><strong class="d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong><span class="d-block">Lorem ipsum dolor
                  sit</span></div>
              <div class="piechart chart">
                <canvas id="pieChartHome1"></canvas>
                <div class="text"><strong class="d-block">$2.145</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur,</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="stats-with-chart-2 block">
              <div class="title"><strong class="d-block">Lorem ipsum dolor sit amet consectetur adipisicing </strong><span class="d-block">Lorem ipsum dolor
                  sit</span></div>
              <div class="piechart chart">
                <canvas id="pieChartHome2"></canvas>
                <div class="text"><strong class="d-block">$7.784</strong><span class="d-block">Sales</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="stats-with-chart-2 block">
              <div class="title"><strong class="d-block">Direct Sales</strong><span class="d-block">Lorem ipsum dolor
                  sit</span></div>
              <div class="piechart chart">
                <canvas id="pieChartHome3"></canvas>
                <div class="text"><strong class="d-block">$4.957</strong><span class="d-block">Sales</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__block block no-margin-bottom">
        <div class="container-fluid text-center">
          <p class="no-margin-bottom">Copyright 2024 Campus360, all rights reserved. <br>Developed by Campus Dot Crew.
          </p>
        </div>
      </div>
    </footer>
  </div>
  </div>
  <!-- Others Section End-->

  <!-- JavaScript files-->
  @import(user_js)
</body>

</html>