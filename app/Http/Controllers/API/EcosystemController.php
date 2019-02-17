<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EcosystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'vue-router' => 'https://router.vuejs.org/',
            'vuex' => 'https://vuex.vuejs.org/',
            'vue-devtools' => 'https://github.com/vuejs/vue-devtools#vue-devtools',
            'vue-loader' => 'https://vue-loader.vuejs.org/',
            'awesome-vue' => 'https://github.com/vuejs/awesome-vue'
        ]);
    }
}
