<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }
    
    

}
//alimenta o banco de dados estoque_sinox ***NÃO FUNCIONOU****
class ProdutoTableSeeder extends Seeder {
    
    public function run(){
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
