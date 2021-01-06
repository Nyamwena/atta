<?php

namespace Database\Seeders;

use  App\Models\studentDetails;
use Illuminate\Database\Seeder;

class CreateStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                "studentNumber" =>"m215179",
                "name"=>"Jane",
                "surname" =>"Doe",
                "placeAttached" =>"Econet",
                "programme" => "BSc in Computer Science",
                "address" =>"ECONET WIRELESS (PVT) LIMITED, No. 2 Old, Mutare Rd, Harare",
                "latitude"=>"-17.836817202718446",
                "longitude"=>"31.1023184577468",
            ],
            [
                "studentNumber" =>"m215175",
                "name"=>"Jane",
                "surname" =>"Doe",
                "placeAttached" =>"Econet",
                "programme" => "BSc in Computer Science",
                "address" =>"NetOne Shop, Shop 79 Longcheng Plaza, Belvedere Rd, Harare",
                "latitude"=>"-17.80493629268842",
                "longitude"=>"30.999461693802463",
            ],
        ];

        foreach ($user as $key => $value) {
            studentDetails::create($value);
        }
    }
}
