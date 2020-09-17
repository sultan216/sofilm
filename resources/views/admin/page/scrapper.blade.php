@extends('admin.layouts.app')
@section('content')
    @include('admin.layouts.headers.normal')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">pantek</h3>
                    </div>
                    <div class="card-body">
                        @include('admin.layouts.headers.sc')
                    </div>
                    @foreach ($punten as $ancok)
                    <div class="row">
                        <div class="card-body row">
                            <div class="col-md-2 ml-4 mb-1" style="width: 12rem;">
                                <img class="card-img-top" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/dKSN0oZCUSNcEd39MnySLYmpUiJ.jpg">
                                    <h3 class="title">{{$ancok["title"]}}</h3>
                                    <h3 class="date">Sep 19, 2020</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth')

    </div>
    
@endsection