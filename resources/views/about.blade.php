@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Free Consultation') }}</h1>
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

                            <div class="justify-content-center d-inline-flex col">
                                <div class="row-gx-5 px-3">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/content/realstate.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary col">Search Home</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-gx-5 px-3">           
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/content/realstate.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary col">Apartment rental</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row-gx-5 px-3">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/content/realstate.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary col">Buy Property</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection