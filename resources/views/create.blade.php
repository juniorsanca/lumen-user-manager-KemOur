@extends('layouts.app')
@section('content')<br><br><br>
<form action="{{ ('users') }}" method="POST">
    <div class="mx-auto row">
        <div class="card" style="width: 350px;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <div class="form-group">
                    <strong>First_name:</strong>
                    <input type="text" name="first_name" class="form-control" placeholder="..." id="first_name">
                    </div>

                    <div class="form-group">
                        <strong>Last_Name:</strong>
                        <input type="text" name="last_name" class="form-control" placeholder="..." id="last_name">
                    </div>

                    <strong>Email:</strong>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">

                    <strong>Password:</strong>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-outline-info">submit</button>
                </div>
                <br>
            </div>
        </div>
    </div>

</form>
    @endsection
