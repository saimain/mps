@extends('dashboard.layouts.master')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <p>To make your dashboard layout horizontal, please go to <code>gleek.js</code> file and
                        make sure <code>layout: "horizontal"</code> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
@endsection