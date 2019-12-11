<?php

use App\Record;
use Illuminate\Database\Seeder;

class RecordsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = factory(Record::class, 10)->create();
    }
}