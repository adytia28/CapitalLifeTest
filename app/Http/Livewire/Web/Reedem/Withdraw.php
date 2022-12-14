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
    public $message = '';
    public $pointId = [];

    public function mount() {
        $this->points = array_sum(Points::select('points')->where('users_id', auth()->id())->pluck('points')->toArray());
        $this->minPoint = 100000 / 0.002;
    }

    public function withdraw($value) {
        if($this->points < $value)
        return $this->message = 'Point yang kamu withdraw tidak bisa melebihi dari yang kamu miliki. Anda tidak diperbolehkan melakukan kecurangan';

        if($value < $this->minPoint)
        return $this->message = 'Point kamu tidak mencukupi untuk melakukan withdraw. Silahkan tambah point anda untuk memenuhi syarat withdraw';

        $this->setBalance($value);
        $this->clearPoint();

        $rupiahConvert = number_format($value, 0, ',', '.');
        $totalConvertion = number_format($value * 0.002, 3, ',', '.') ;
        session()->flash('success', "Selamat, anda berhasil menukar {$rupiahConvert} point anda dengan uang sebesar {$totalConvertion}.");
        return redirect()->route('balance');
    }

    public function setBalance($value) {
        $balance = new CreditBalance();
        $balance->users_id = auth()->id();
        $balance->amount = $value * 0.002;
        $balance->save();
    }

    public function clearPoint() {
        Points::where('users_id', auth()->id())->whereIn('id', $this->pointId)->delete();
    }

    public function render() {
        return view('livewire.web.reedem.withdraw');
    }
}
