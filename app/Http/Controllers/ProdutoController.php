<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * Classe para gerenciar os produtos 
 */

namespace sinox\Http\Controllers;

use Illuminate\Support\Facades\DB;
use sinox\Produto;

class ProdutoController extends Controller {
    public function lista(){
                
        $produtos = DB::select('select * from produtos');
               
        return view('listagem')->with('produtos', $produtos);
        //outras formas de passar parametros
        //view('listagem')->withProdutos($protudos);
        //view('listagem', ['produtos' => $produtos]);  
        //$data = ['protudos' => $produtos]; => return view('listagem', $data);
    }
}