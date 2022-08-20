<?php

namespace App\Http\Livewire\Web\Reedem;

use App\Models\Points;
use Livewire\Component;

class Index extends Component
{
    public $point;

    public function mount() {
        $this->point = array_sum(Points::select('points')->where('users_id', auth()->id())->pluck('points')->toArray());
    }

    public function render()
    {
        return view('livewire.web.reedem.index');
    }
}
