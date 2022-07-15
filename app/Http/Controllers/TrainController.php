<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;


class TrainController extends Controller
{
    public function index()
 {
    $trains = Train::where('orario_partenza', '<', 'now')->orderBy('orario_partenza', 'asc')->get();
    return view('train' , [
        'pageName' => 'Treni',
        'trains' => $trains
    ]);
 }}
