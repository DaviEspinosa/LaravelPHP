<?php

namespace Database\Seeders;

use App\Models\Produtos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //faz uma solicitação ao banco e inseri o dado ao banco
        $faker = Faker::create();

        //Gerando 50 produtos
        for ($i = 1; $i <= 50; $i++){
            Produtos::create([
                'nome' => 'Produto' . $i,
                'descricao' => $faker->sentence,
                'produto' => $faker->randomFloat(2,1,1000),
                'quantidade' => $faker->numberBetween(1,1000)
            ]);
        }


    }
}
