<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
       // $this->call(AdminSeeder::class);
        $district = array('Bagerhat', 'Bandarban', 'Barguna', 'Barisal', 'Bhola', 'Bogra', 'Brahmanbaria', 'Chandpur', 'Chittagong', 'Chittagong-01', 'Chittagong-02', 'Chuadanga', 'Comilla', 'Comilla-01', 'Comilla-02', 'Cox\'s Bazar', 'Dhaka', 'Dhaka 1', 'Dhaka 2', 'Dhaka 3', 'Dinajpur', 'Faridpur', 'Feni', 'Gaibandha', 'Gazipur', 'Gazipur-01', 'Gazipur-02', 'Gopalganj', 'Habiganj', 'Jamalpur', 'Jessore', 'Jhalokati', 'Jhenaidah', 'Joypurhat', 'Khagrachari', 'Khulna', 'Kishoreganj', 'Kurigram', 'Kushtia', 'Lakshmipur', 'Lalmonirhat', 'Madaripur', 'Magura', 'Manikganj', 'Maulvibazar', 'Meherpur', 'Munshiganj', 'Mymensingh', 'Naogaon', 'Narail', 'Narayanganj', 'Narayanganj-01', 'Narayanganj-02', 'Narsingdi', 'Natore', 'Nawabganj', 'Netrokona', 'Nilphamari', 'Noakhali', 'Pabna', 'Panchagarh', 'Patuakhali', 'Pirojpur', 'Rajbari', 'Rajshahi', 'Rangamati', 'Rangpur', 'Satkhira', 'Shariatpur', 'Sherpur', 'Sirajgonj', 'Sunamganj', 'Sylhet', 'Tangail', 'Thakurgaon');
       foreach($district as $dis){
           DB::table('districts')->insert([
               'name' => $dis,
               'slug' => Str::slug($dis),
               'created_at' => date('Y-m-d H:i:s',time()),
               'updated_at' => date('Y-m-d H:i:s',time()),
           ]);
       }

    }
}
