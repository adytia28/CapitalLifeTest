<?php

namespace App\Http\Livewire\Web\Reedem;

use App\Models\Points;
use Livewire\Component;

class Index extends Component
{
    public $totalPoint;
    public $points = [];

    public function mount() {
        $this->points = Points::where('users_id', auth()->id())->orderBy('id', 'DESC')->get();
        $this->totalPoint = array_sum($this->points->pluck('points')->toArray());
    }

    public function render()
    {
        return view('livewire.web.reedem.index');
    }
}
