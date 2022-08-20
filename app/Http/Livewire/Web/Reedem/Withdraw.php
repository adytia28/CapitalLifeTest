<?php

namespace App\Http\Livewire\Web\Reedem;

use App\Models\CreditBalance;
use Livewire\Component;
use App\Models\Points;
use Illuminate\Support\Facades\Route;

class Withdraw extends Component
{
    public $points;
    public $minPoint;
    public $alert = false;
    public $message = '';

    public function mount() {
        $this->points = array_sum(Points::select('points')->where('users_id', auth()->id())->pluck('points')->toArray());
        $this->minPoint = 100000 / 0.002;
    }

    public function withdraw($value) {
        // if($this->points < $value) {
        //     $this->alert = true;
        //     return $this->message = 'Point yang kamu withdraw tidak bisa melebihi dari yang kamu miliki';
        // }

        // if($value > $this->minPoint) {
        //     $this->alert = true;
        //     return $this->message = 'Point kamu tidak mencukupi untuk melakukan withdraw';
        // }

        $this->setBalance($value);
        $this->clearPoint();

        $totalConvetion = $value * 0.002;
        session()->flash('success', "Selamat, anda berhasil menukar point anda dengan uang sebesar .");

        return redirect()->route('balance');
    }

    public function setBalance($value) {
        $balance = new CreditBalance();
        $balance->users_id = auth()->id();
        $balance->amount = $value * 0.002;
        $balance->save();
    }

    public function clearPoint() {
        Points::where('users_id', auth()->id())->delete();
    }

    public function render() {
        return view('livewire.web.reedem.withdraw');
    }
}
