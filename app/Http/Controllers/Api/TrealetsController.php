<?php

namespace Vanguard\Http\Controllers\Api;

use Vanguard\Http\Controllers\Controller;
use Vanguard\Http\Resources\StepQuestResource;
use Vanguard\Http\Resources\ArtifactResource;
use Vanguard\Trealets;

class TrealetsController extends Controller
{
    public function index()
    {
        return StepQuestResource::collection(Trealets::where('type', Trealets::STEPQUEST_TYPE)->get());
        return ArtifactResource::collection(Trealets::where('type', Trealets::ARTIFACT_TYPE)->get());
    }

    public function show($id)
    {
        return new StepQuestResource(Trealets::find($id));
        return new ArtifactResource(Trealets::find($id));
    }
}
