@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 bs-success-border-subtle">
                <div class="col-sm-6 ">
                    <h1 class="m-0">{{ __('You are logged in!') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Main content -->                           
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-3">
                                  <div class="info-box">
                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                      
                                    <div class="info-box-content">
                                      <span class="info-box-text">Web Traffic</span>
                                      <span class="info-box-number">
                                        
                                        <small>%</small>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-6 col-md-3">
                                  <div class="info-box mb-3">
                                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                      
                                    <div class="info-box-content">
                                      <span class="info-box-text">Likes</span>
                                      <span class="info-box-number">100</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                      
                                <!-- fix for small devices only -->
                                <div class="clearfix hidden-md-up"></div>
                                  <div class="col-12 col-sm-6 col-md-3">            
                                    <div class="info-box mb-3">
                                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                      <div class="info-box-content">
                                      <span class="info-box-text">New Members</span>
                                      <span class="info-box-number">3</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>            
                                  <!-- /.info-box -->
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                  <div class="info-box mb-3">
                                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-eye"></i></span>
                      
                                    <div class="info-box-content">
                                      <span class="info-box-text">Visits</span>
                                      <span class="info-box-number">35</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-6 col-md-3">
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                              </div>
                            <!---->
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card">
                                      <div class="card-body">                                       
              
                                          <div class="justify-content-center d-inline-flex col">
                                              <div class="row-gx-5 px-3">
                                                  <div class="card" style="width: 18rem;">
                                                      <img src="{{ asset('images/content/property/property-12.jpg') }}" class="card-img-top" alt="...">                        
                                                  </div>
                                              </div>
              
                                              <div class="row-gx-5 px-3">           
                                                  <div class="card" style="width: 18rem;">
                                                      <img src="{{ asset('images/content/property/property-10.jpeg') }}" class="card-img-top" alt="...">                                                      
                                                  </div>
                                              </div>                    
                                              <div class="row-gx-5 px-3">
                                                  <div class="card" style="width: 18rem;">
                                                      <img src="{{ asset('images/content/property/property-4.jpg') }}" class="card-img-top" alt="...">                                                      
                                                  </div>
                                              </div>              
                                          </div>                                          
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
            
                                        <div class="justify-content-center d-inline-flex col">
                                            <div class="row-gx-5 px-3">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('images/content/property/property-14.jpg') }}" class="card-img-top" alt="...">                        
                                                </div>
                                            </div>
            
                                            <div class="row-gx-5 px-3">           
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('images/content/property/property-16.jpg') }}" class="card-img-top" alt="...">                                                      
                                                </div>
                                            </div>                    
                                            <div class="row-gx-5 px-3">
                                                <div class="card" style="width: 18rem;">
                                                    <img src="{{ asset('images/content/property/property-17.jpg') }}" class="card-img-top" alt="...">                                                      
                                                </div>
                                            </div>              
                                        </div>                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                            <!-- jQuery -->
                            <script src="plugins/jquery/jquery.min.js"></script>
                            <!-- jQuery UI 1.11.4 -->
                            <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
                            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                            <script>
                            $.widget.bridge('uibutton', $.ui.button)
                            </script>
                            <!-- Bootstrap 4 -->
                            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                            <!-- ChartJS -->
                            <script src="plugins/chart.js/Chart.min.js"></script>
                            <!-- Sparkline -->
                            <script src="plugins/sparklines/sparkline.js"></script>
                            <!-- JQVMap -->
                            <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
                            <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
                            <!-- jQuery Knob Chart -->
                            <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
                            <!-- daterangepicker -->
                            <script src="plugins/moment/moment.min.js"></script>
                            <script src="plugins/daterangepicker/daterangepicker.js"></script>
                            <!-- Tempusdominus Bootstrap 4 -->
                            <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
                            <!-- Summernote -->
                            <script src="plugins/summernote/summernote-bs4.min.js"></script>
                            <!-- overlayScrollbars -->
                            <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                            <!-- AdminLTE App -->
                            <script src="dist/js/adminlte.js"></script>

                            <!--chart using Chart.js by initializing a new chart object and passing in the data and options for the chart.-->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection