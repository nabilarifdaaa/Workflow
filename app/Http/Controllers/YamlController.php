<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WMS\src\Services\Parser;
use Yaml;

class YamlController extends Controller
{
    public function getAll(){
        $flowClasses = new Parser();
        $flow = $flowClasses->parseYaml();
        return $flow;
    }
}
?>