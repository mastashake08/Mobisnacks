@extends('layouts.app')

@section('content')
@if(Auth::user()->verified === true)
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Orders</div>

                <div class="panel-body">
                    List of orders
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Balance</div>

                <div class="panel-body">
                    User balance
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Before you can begin, you must verify your account by <a href="account/bank/update">adding banking details</a>. After details are verified, you will recieve an
                    email and will be ready to begin making money with MobiSnacks!
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
