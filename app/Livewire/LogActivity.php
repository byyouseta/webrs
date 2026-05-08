<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class LogActivity extends Component
{
    public function render()
    {
        $logs = Activity::latest()
            ->paginate(20);

        return view('livewire.log-activity', compact('logs'));
    }
}
