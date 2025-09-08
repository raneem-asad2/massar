<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Robot;
use App\Models\Task;
use App\Models\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $robots = Robot::all();

        $tasksCompletedPerDay = [10, 15, 12, 18, 20, 25, 22];

        $robotStatusCounts = Robot::select('robot_status', \DB::raw('count(*) as count'))
            ->groupBy('robot_status')
            ->pluck('count', 'robot_status')
            ->toArray();
        
        $systemAlerts = [
            ['robot_id' => 'R-001', 'title' => 'Low Battery', 'details' => 'Robot needs charging immediately.', 'level' => 'Critical', 'icon' => 'fas fa-battery-empty'],
            ['robot_id' => 'R-003', 'title' => 'GPS Error', 'details' => 'GPS signal lost, awaiting reconnect.', 'level' => 'High', 'icon' => 'fas fa-satellite-dish'],
            ['robot_id' => 'R-002', 'title' => 'Stuck', 'details' => 'Obstacle detected, robot is stuck.', 'level' => 'Medium', 'icon' => 'fas fa-traffic-light'],
        ];

        return view('admin.dashboard', compact('robots', 'tasksCompletedPerDay', 'robotStatusCounts', 'systemAlerts'));
    }
}