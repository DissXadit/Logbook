@extends('app')
@section('content')
<div class="container-fluid">
    <div class="app-content content">
        <div class="content-overlay"></div>
        <br>
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center">Dashboard</h1>
        <br>
    </div>


    <div class="row">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
            <div class="card bg-info custom-card">
                <div class="card-body">
                <h3 class="card-title text-white">Date</h3>
                <strong>
                    <span class="d-block text-white" style="font-size: 16px">
                        {{ now()->format('l, d-M-Y') }}</span>
                </strong>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
