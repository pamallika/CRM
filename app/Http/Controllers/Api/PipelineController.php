<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PipelineRequest;
use App\Http\Resources\PipelineResource;
use App\Models\Pipeline;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PipelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PipelineResource::Collection(Pipeline::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PipelineRequest $request)
    {
        $created_pipeline = Pipeline::create($request->validated());
        return new PipelineResource($created_pipeline);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pipeline $pipeline)
    {
        return new PipelineResource($pipeline);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PipelineRequest $request, Pipeline $pipeline)
    {
        $pipeline->update($request->validated());
        return new PipelineResource($pipeline);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pipeline $pipeline)
    {
        $pipeline->delete($pipeline);
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
