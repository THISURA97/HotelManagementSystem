@extends('layout')

@section('carousel1')
    <div class="container">
    <div class="row mt40">
        <div class="col-md-10">
            <br><br>
            <h2><a href="/home"><i class="fa fa-arrow-left"></i></a>&nbsp&nbspCustomers</h2>
        </div>

        <br><br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class="table table-bordered" id="laravel_crud">
            <thead>
            <tr>
                <th>Id</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>email</th>
                <th>phoneNumber</th>
                <th>date</th>
                <th>month</th>
                <th>year</th>
                <th>gender</th>
                <th>Created at</th>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($customer as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->firstName }}</td>
                    <td>{{ $customer->lastName }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phoneNumber }}</td>
                    <td>{{ $customer->date }}</td>
                    <td>{{ $customer->month }}</td>
                    <td>{{ $customer->year }}</td>
                    <td>{{ $customer->gender }}</td>
                    <td>{{ date('d m Y', strtotime($customer->created_at)) }}</td>
                    <td><a href="{{ route('customer.edit',$customer->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('customer.destroy', $customer->id)}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    @endsection
    </div>
    </div>