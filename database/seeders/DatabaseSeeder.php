<?php

namespace Database\Seeders;
use \App\Models\Product;
use \App\Models\Category;
use \App\Models\Unit;
use \App\Models\Room;
use \App\Models\Asset;
use \App\Models\Inventory;
use \App\Models\Department;
use App\Models\Floor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        Product::create([
            'code_product' => "AC01",
            'name' => 'AC Panasonic 1PK',
            'brand' => 'PANASONIC',
            'specification' => 'AC Splite 1PK 18.000 btu eco smart',
            'summary' => '',
            'category_id' => 1,
        ]);
        
        Product::create([
            'code_product' => "AC02",
            'name' => 'AC SHARP 1PK',
            'brand' => 'SHARP',
            'specification' => 'AC Splite 1PK 18.000 btu',
            'summary' => '',
            'category_id' => 1,
        ]);
        
        Product::create([
            'code_product' => "LT01",
            'name' => 'Laptop LENOVO core i5',
            'brand' => 'LENOVO',
            'specification' => 'Core i5 14 inchi',
            'summary' => '',
            'category_id' => 2,
        ]);
        
        Product::create([
            'code_product' => "LT02",
            'name' => 'Laptop ASUS core i5',
            'brand' => 'LENOVO',
            'specification' => 'Core i5 14 inchi',
            'summary' => '',
            'category_id' => 2,
        ]);
        
        Product::create([
            'code_product' => "PC01",
            'name' => 'PC AIO ASUS core i5',
            'brand' => 'LENOVO',
            'specification' => 'Core i5 20 inchi',
            'summary' => '',
            'category_id' => 2,
        ]);
       
        Product::create([
            'code_product' => "PRT01",
            'name' => 'PRINTER EPSON L3110',
            'brand' => 'EPSON',
            'specification' => 'COLOR INJECTION',
            'summary' => '',
            'category_id' => 2,
        ]);

        // $units = ['RA', 'SD', 'SMP', 'SMA', 'TAHFIZH', 'YAYASAN' ];

        // for($i = 0; $i < count($units); $i++) {
        //     Unit::create([
        //         'name' => $units[$i]
        //     ]);

        // }
        
        $departments = ['RA', 'SD', 'SMP', 'SMA', 'TAHFIZH', 'YAYASAN' ];

        for($i = 0; $i < count($departments); $i++) {
            Department::create([
                'name' => $departments[$i]
            ]);

        }

        $floors = ['I', 'II', 'III', 'IV'];
        for($i = 0; $i < count($floors); $i++) {
            Floor::create([
                'name' => $floors[$i]
            ]);
        }

        // Asset::create([
        //     'code_asset' => 'JS-I-01-AC01',
        //     'purchased_in' => "2021-01-01",
        //     'product_id' => 1,
        //     'room_id' => 1
        // ]);
        
        // Asset::create([
        //     'code_inventory' => 'JS-I-01-AC02',
        //     'purchased_in' => "2022-01-01",
        //     'product_id' => 1,
        //     'room_id' => 1
        // ]);
        
        Inventory::create([
            'code_inventory' => 'EIE-AC01-JS3/32-01',
            'purchased_in' => "2021-01-01",
            'product_id' => 1,
            'room_id' => 1
        ]);
        
        Inventory::create([
            'code_inventory' => 'EIE-AC01-JS3/32-02',
            'purchased_in' => "2022-01-01",
            'product_id' => 1,
            'room_id' => 1
        ]);
        
        Inventory::create([
            'code_inventory' => 'ICT-PC01-JS1/06-01',
            'purchased_in' => "2022-01-01",
            'product_id' => 5,
            'room_id' => 1
        ]);

        $categories = [
            'Eletrical Installation & Equipment', 
            'Internet & Computer Technologi', 
            'Audio Visual Equipment'];
        $categories_code = [
            'EIE', 
            'ICT', 
            'AVE'];
        
            for ($i = 0; $i < count($categories); $i++) {
                Category::create([
                    'name' => $categories[$i],
                    'code' => $categories_code[$i]
                ]);
            }
        

        Room::create([
            'name' => 'I/01',
            'unit_id' => 3
        ]);

    }
}
