<?php

namespace Database\Seeders;

use App\Models\MailQueue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailQueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailQueue::factory()
            ->count(10)
            ->create();
    }
}
