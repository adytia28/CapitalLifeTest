<?php

namespace App\Http\Livewire\Web\Point;

use App\Models\Points;
use Livewire\Component;

class Index extends Component
{
    public $point = 0;

    protected $listeners = ['refreshPoint'];

    public function mount() {
        $this->point = array_sum(Points::select('points')->where('users_id', auth()->id())->pluck('points')->toArray());
    }

    public function refreshPoint() {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.web.point.index');
    }
}
