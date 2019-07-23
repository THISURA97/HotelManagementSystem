@extends('layout')

@section('carousel1')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="pull-left">
                <br><br>
                <h2><a href="/home"><i class="fa fa-arrow-left"></i></a>&nbsp&nbsp Add Customer</h2>
                <br>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customer.store') }}" method="POST" name="add_customer">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="firstName">First Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="First Name"  name="firstName">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="lastName">Last Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  placeholder="Last Name" name="lastName">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="inputEmail">Email Address:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control"  placeholder="Email Address" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="phoneNumber">Mobile Number:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="Phone Number" name="phoneNumber">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Date of Birth:</label>
            <div class="col-sm-3">
                <select class="custom-select" name="date">
                    <option value="">Date</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <div class="col-sm-3">
                <select class="custom-select" name="month">
                    <option value="">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="col-sm-3">
                <select class="custom-select" name="year">
                    <option value="">Year</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Gender:</label>
            <div class="col-sm-9 mt-2">
            <select class="custom-select" name="gender">
                <option value="">gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary" value="Reset">
            </div>
        </div>




    </form>
    </div>
@endsection