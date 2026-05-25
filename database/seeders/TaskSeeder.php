<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
           'title' => 'Task 2',
            'description' => 'This is the description for Task 2.',
            'is_completed' => true
            
        ]);
        Task::create([
           'title' => 'Task 3',
            'description' => 'Build tasks For Task 3.',
            'is_completed' => true
        ]);
        Task::create([
           'title' => 'Task 4',
            'description' => 'Send work to supervisor for Task 4.',
            'is_completed' => false
        ]);
    }
}
