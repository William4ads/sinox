<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * Classe para gerenciar os produtos 
 */
//realiza todo o controle referente a produtos
namespace sinox\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request; //é quem pega os dados da requisição

class ProdutoController extends Controller {
    
    //lista todos os produtos
    public function lista(){
                
        $produtos = DB::select('select * from produtos');
               
        return view('produto.listagem')->with('produtos', $produtos);
        //outras formas de passar parametros
        //view('listagem')->withProdutos($protudos);
        //view('listagem', ['produtos' => $produtos]);  
        //$data = ['protudos' => $produtos]; => return view('listagem', $data);
    }
    
    //mostra os detalhes do produto selecionado
    public function mostra(){
        $id = Request::route('id','0'); //pega o valor do id no link
        
        $resposta = DB::select('select * from produtos where id= ?', [$id]);
        
        if(empty($resposta)){
            return "Esse produto não existe";
        }else{
            return view('produto/detalhes')->with('p', $resposta[0]); //passando a posição no array
        }
    }
    
    //retorna a view com o formulário para cadastrar um produto novo
    public function novo(){
        return view('produto/formulario');
    }
    
    //método para efetivamente adicionar um produto novo ao banco
    public function adiciona(){
        //pegando os dados do formulário, podemos usar os parametros 'all' e 'only'
        $produto = Request::input('produto');
        $descricao = Request::input('descricao');
                      
        //para testar as variáveis que retornaram
        //return implode(', ', array($produto, $descricao));       
       
        //para inserir no banco de dados
        DB::insert('insert into produtos (produto, descricao) '
                . 'values (?,?)', array($produto, $descricao));
        
        //antes redirecionavamos a saida para o view adicinado
        //return view('produto/adicionado')->with('produto', $produto);
        
        /* redirecionamos para produtos e passamos o valor de produto, se quiser passar todos os valores
         * de input é so deixar o usar o ->withInput() sem parametros
         * Redirecionar usando a URI
         * return redirect('/produtos')->withInput(Request::only('produto'));
         * Abaixo redirecionando usando uma action
         */
        return redirect()
                ->action('ProdutoController@lista')
                ->withInput(Request::only('produto'));
    }
}