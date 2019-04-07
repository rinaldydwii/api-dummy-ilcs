<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MVessel;
use App\Http\Resources\MVessel as MVesselResource;


class MVesselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true, 
            'message' => 'Get all of M Vessel data successfully',
            'data' => MVesselResource::collection(MVessel::all())
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTerminal()
    {
        $terminal = MVessel::select('terminal')->groupBy('terminal')->get();
        return response()->json([
            'success' => true, 
            'message' => 'Get all of Terminal Data successfully',
            'data' => $terminal
        ]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByTerminal($terminal)
    {
        $m_vessels = MVessel::where('terminal', rawurldecode($terminal))->get();
        return response()->json($response = [
            'success' => true, 
            'message' => 'Get all of M Vessel Data by Terminal successfully',
            'data' => MVesselResource::collection($m_vessels)
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexName()
    {
        $name = MVessel::select('name')->groupBy('name')->first();
        return response()->json([
            'success' => true, 
            'message' => 'Get name successfully',
            'data' => $name
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'vessel_name' => "required|string|max:50",
            'voyage_in' => "string|max:5",
            'voyage_out' => "string|max:5",
            'eta' => "required|date",
            'etb' => "required|date",
            'etd' => "date",
            'terminal' => "required|string|max:250",
            'name' => "required|string|max:50",
        ]);
        $m_vessel = MVessel::create([
            'vessel_name' => $request -> vessel_name, 
            'voyage_in' => $request -> voyage_in, 
            'voyage_out' => $request -> voyage_out,
            'eta' => $request -> eta,
            'etb' => $request -> etb,
            'etd' => $request -> etd,
            'terminal' => $request -> terminal,
            'name' => $request -> name
        ]);
        return response()->json([
            'success' => true, 
            'message' => 'Create M Vessel data successfully',
            'data' => $m_vessel
        ]);
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
