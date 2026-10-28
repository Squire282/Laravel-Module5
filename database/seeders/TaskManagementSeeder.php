<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TaskManagementSeeder extends Seeder
{
    public function run(): void
    {
        $today = now()->toDateString();
        $yesterday = now()->subDay()->toDateString();
        $tomorrow = now()->addDay()->toDateString();
        $twoDaysLater = now()->addDays(2)->toDateString();

        Task::create([
            'title' => 'Finish Web Systems assignment',
            'status' => 'pending',
            'task_date' => $today,
        ]);

        Task::create([
            'title' => 'Review Laravel routes',
            'status' => 'completed',
            'task_date' => $today,
        ]);

        Task::create([
            'title' => 'Study MVC concepts',
            'status' => 'pending',
            'task_date' => $today,
        ]);

        Task::create([
            'title' => 'Prepare project documentation',
            'status' => 'pending',
            'task_date' => $yesterday,
        ]);

        Task::create([
            'title' => 'Update GitHub repository',
            'status' => 'completed',
            'task_date' => $yesterday,
        ]);

        Task::create([
            'title' => 'Review database models',
            'status' => 'pending',
            'task_date' => $tomorrow,
        ]);

        Task::create([
            'title' => 'Practice SQL queries',
            'status' => 'pending',
            'task_date' => $tomorrow,
        ]);

        Task::create([
            'title' => 'Check project requirements',
            'status' => 'completed',
            'task_date' => $twoDaysLater,
        ]);

        User::create([
            'username' => 'demo_user',
            'full_name' => 'Juan Dela Cruz',
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}