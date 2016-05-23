@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as admin! Welcome 
                    <?php $name=Auth::User()->name; echo $name;// welcome $name! Biodata ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
