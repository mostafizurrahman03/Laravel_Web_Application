@extends('layouts.app', ['customStyles' => 'css/custom-styles.css'])

@section('title')
    Dashboard
@endsection

@section('bread_controller')
    <a href="#">Dashboard</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-teal mb-3 dash_board_card">
                <div class="card-header text-center">Total Product types</div>
                <div class="card-header text-center">
                {{$totalProducts}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark-teal mb-3 dash_board_card">
                <div class="card-header text-center">
                    Total Users
                </div>
                <div class="card-header text-center">
                {{$totalUsers}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-light-teal mb-3 dash_board_card">
                <div class="card-header text-center">Total Stocks</div>
                <div class="card-header text-center">
                    {{$totalStock}}
                </div>
            </div>
        </div>
       
    </div>
@endsection
