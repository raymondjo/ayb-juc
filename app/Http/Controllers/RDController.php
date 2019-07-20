<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\rd;
class RDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('rd.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('rd.create');

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
        //return $request;
        $newRD = new rd();

        $newRD->responsible_name = $request->input('responsible_name');
        $newRD->address = $request->input('address');
        $newRD->husband_name = $request->input('husband_name');
        $newRD->husband_age = $request->input('husband_age');
        $newRD->husband_mobile = $request->input('husband_mobile');
        $newRD->husband_work = $request->input('husband_work');
        $newRD->husband_national_id = $request->input('husband_national_id');
        $newRD->wife_name = $request->input('wife_name');
        $newRD->wife_age = $request->input('wife_age');
        $newRD->wife_mobile = $request->input('wife_mobile');
        $newRD->wife_work = $request->input('wife_work');
        $newRD->wife_national_id = $request->input('wife_national_id');

        if ($request->input('cp') !== null ){
            $newRD->cp = $request->input('cp') === "true"? true : false;
        }

        if ($request->input('ep') !== null ){
            $newRD->ep = $request->input('ep') === 'true'? true : false;
        }
        if ($request->input('clc') !== null ){
            $newRD->clc = $request->input('clc') === 'true'? true : false;
        }
        if ($request->input('ie') !== null ){
            $newRD->ie = $request->input('ie') === 'true'? true : false;
        }
        if ($request->input('joined') !== null ){
            $newRD->joined = $request->input('joined') === 'true'? true : false;
        }
        if ($request->input('expire_date') !== null ){
            $newRD->expire_date = $request->input('expire_date');
        }
        if ($request->input('need_or_not') !== null ){
            $newRD->need_or_not = $request->input('need_or_not');
        }
        $newRD->save();
return $request;
        // return $request;

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
