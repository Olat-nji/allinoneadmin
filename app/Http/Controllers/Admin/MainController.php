<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;
use App\Table;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$company = Company::find(1);
$table = Table::find(1);

if($company){
    if(!$table){


return redirect(url('admin/tables/create'));}else{
    $page=[
        'title'=> 'Dashboard'
    ];

    return view('admin.dashboard')->with('page',$page);
}
}else{
    return redirect(url('admin/company/create'));
}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.create-company');
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
            'name' => 'required|max:255',
            'email' => 'required|email',
            'logo' => 'required|image|max:5120',


  ]);



  $logo = $request->file('logo')->store(
    'logo', 'public'
);
Company::truncate();
$company = new Company;
$company->name=$request->input('name');
$company->logo=$logo;
$company->email=$request->input('email');
$company->phone=$request->input('phone');
$company->address=$request->input('address');
        $company->save();

        return redirect(url('admin'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
