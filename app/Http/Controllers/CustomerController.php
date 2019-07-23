<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['customer'] = customer::paginate(10);

        return view('customer.List',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|max:100',
            'lastName' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'phoneNumber'=>'required|min:10|numeric',
            'date'=>'required',
            'month'=>'required',
            'year'=>'required',
            'gender'=>'required|in:male,female',
        ]);

        customer::create($request->all());

        return Redirect::to('customer')
            ->with('success','Great! customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['customer_info'] = customer::where($where)->first();

        return view('customer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstName' => 'required|max:100',
            'lastName' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'phoneNumber'=>'required|min:10|numeric',
            'date'=>'required',
            'month'=>'required',
            'year'=>'required',
            'gender'=>'required|in:male,female',
        ]);

        $update = ['firstName' => $request->firstName, 'lastName' => $request->lastName,'email'=>$request->email,'phoneNumber'=>$request->phoneNumber,'date'=>$request->date,'month'=>$request->month,'year'=>$request->year,'gender'=>$request->gender];
        customer::where('id',$id)->update($update);

        return Redirect::to('customer')
            ->with('success','Great! customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        customer::where('id',$id)->delete();

        return Redirect::to('customer')->with('success','customer deleted successfully');
    }
}
