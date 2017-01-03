<?php 
/**
 * Para gerar um Seeder
 *   php artisan make:seeder NomeDaClasse
 * 
 * Na classe DatabaseSeeder podemos criar vários entradas automaticamente procure por "factory"
 * 
 * Para chamar a classe podemos acrescentar no metodo run() da classe DatabaseSeeder
 *  $this->call(NomeClasseSeeder::class); 
 * 
 * Para executar e alimentar o banco podermos fazer de duas formas
 *  php artisan db:seed (esse irá executar todas referenciadas em DatabaseSeeders)
 *  php artisan db:seed --class=NomeClasseSeeder 
 *  
 * 
 */

?>


<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     * alimenta a tabela produtos
     *  
     */
    public function run()
    {
        DB::insert('insert into produtos (produto, descricao)'
                . 'values (?,?)',
                array('Chapa de Inox', 'Chapa de 5mm'));
        
        DB::insert('insert into produtos (produto, descricao)'
                . 'values(?,?)',
                array('Colher em inox', '20 cm'));
        
        DB::insert('insert into produtos (produto, descricao)'
                . 'values(?,?)',
                array('Grelha', '20x40 cm'));
    }
}
