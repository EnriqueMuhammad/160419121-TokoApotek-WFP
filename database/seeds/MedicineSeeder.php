<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'medicine_name' => 'fentanil',
            'medicine_form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'medicine_formula' => '5 amp/kasus.',
            'medicine_price' => 75000,
            'description' => 'Sebuah obat',
            'faskes_1' => false,
            'faskes_2' => true,
            'faskes_3' => true,
            'category_id' => 1
        ]);

        DB::table('medicines')->insert([
            'medicine_name' => 'hidromorfon',
            'medicine_form' => 'tab lepas lambat 8 mg',
            'medicine_formula' => '30 tab/bulan',
            'medicine_price' => 80000,
            'description' => 'Sebuah obat',
            'faskes_1' => false,
            'faskes_2' => true,
            'faskes_3' => true,
            'category_id' => 1
        ]);

        DB::table('medicines')->insert([
            'medicine_name' => 'kodein',
            'medicine_form' => 'tab 10 mg',
            'medicine_formula' => '30 tab/bulan',
            'medicine_price' => 100000,
            'description' => 'Sebuah obat',
            'faskes_1' => true,
            'faskes_2' => true,
            'faskes_3' => true,
            'category_id' => 1
        ]);
    }
}
