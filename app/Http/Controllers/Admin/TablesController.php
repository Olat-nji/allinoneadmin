<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $page=[
            'title'=> 'Tables',
            'subtitle'=> 'Create New Table'

        ];

        return view('admin.generator', compact('page'));
    }
    public function create2(Request $request,$name)
    {
        if($name==2){
            $page=[
                'title'=> 'Tables',
                'subtitle'=> 'Generate Fields'

            ];
$name= $request->input('name');
$fields=[];
switch($request->input('auto-generate')){
case 'none':
    $fields1=['name'=>'name',
    'type'=>'name',
    'required'=>'yes'];
    array_push($fields1,$fields);

break;
case 'newsletter':
    $fields1=['name'=>'email',
'type'=>'email',
'required'=>'yes'];
$fields2=['name'=>'message',
'type'=>'text',
'required'=>'yes'];

array_push($fields1,$fields2,$fields);
break;
case 'sms':
    $fields1=['name'=>'phone_number',
'type'=>'text',
'required'=>'yes'];
$fields2=['name'=>'message',
'type'=>'text',
'required'=>'yes'];
$fields3=['name'=>'name',
'type'=>'text',
'required'=>'no'];

array_push($fields1,$fields2,$fields3,$fields);
break;
case 'contact':
    $fields1=['name'=>'name',
    'type'=>'text',
    'required'=>'yes'];
    $fields2=['name'=>'message',
    'type'=>'text',
    'required'=>'yes'];
    $fields3=['name'=>'email',
    'type'=>'text',
    'required'=>'no'];
    $fields4=['name'=>'phone',
    'type'=>'text',
    'required'=>'no'];
    $fields5=['name'=>'subject',
    'type'=>'text',
    'required'=>'no'];

    array_push($fields1,$fields2,$fields3,$fields4,$fields5,$fields);
break;
default:
$fields1=['name'=>'name',
'type'=>'name',
'required'=>'yes'];
array_push($fields1,$fields);

break;
};
            return view('admin.generator-2', compact('page','name','fields'));
        }else{
            return abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
