
@extends('layouts.app')
@section('content')
    <style>
        *{
        padding: 20px;
        padding-top: 1px;
        }
        h1{
        font-style: italic;
        text-align: center;
        }
        table{
        border-collapse: collapse;
        text-align: center;
        width: 100%;
        font-style: italic;

        }
        th{
        background-color: #d6a5c2 ;
        color: white;


        }
        th, td{
        border: 2px solid #ddd;
        padding: 15px;
        }

    </style>

{{--    @if($message = create::get ('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            <p>{{$message}}</p>--}}
{{--        </div>--}}
{{--        @endif--}}
    <div class="res-tab">
        <h5>Users</h5>
        <p> <a href="{{('create')}}" type="button" class="btn btn-info">Ajouter</a>
        </p>
        <table>
            <tbody>
            <tr>
                <th>#</th>
                <th>first_name</th>
                <th>Last_name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
            @foreach ($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    <button type="button" class="btn btn-light">Show</button>
                    <br>
                    <br>
                    <button type="button" class="btn btn-warning">update</button>
                    <br>
                    <br>
                    <a type="button" class="btn btn-danger">delete</a>
                </td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
