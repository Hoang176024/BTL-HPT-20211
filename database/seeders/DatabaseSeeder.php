<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // $this->call(UsersTableSeeder::class);
       // Role comes before User seeder here.
   	$this->call(RoleTableSeeder::class);
   	 // User seeder will use the roles above created.
   	$this->call(UserSeeder::class);
    $this->call(BillerSeeder::class);
    $this->call(BrandSeeder::class);
    $this->call(CategorySeeder::class);
    $this->call(CustomerSeeder::class);
    $this->call(CustomerGroupSeeder::class);
    $this->call(ProductSeeder::class);
    $this->call(QuotationSeeder::class);
    $this->call(SaleSeeder::class);
    $this->call(StoreSeeder::class);
    $this->call(SupplierSeeder::class);
    $this->call(TaxRateSeeder::class);
    $this->call(TransferSeeder::class);
    $this->call(WarehouseSeeder::class);
    $this->call(WarehouseProductSeeder::class);

    }
}
