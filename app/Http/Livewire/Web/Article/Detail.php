<?php

namespace App\Http\Livewire\Web\Article;

use Livewire\Component;
use App\Models\Points;

class Detail extends Component
{
    public $article;
    public $point;

    public function render() {
        return view('livewire.web.article.detail');
    }

    public function mount() {
        $this->point = rand(50,200);
    }

    public function addPoint() {
        $point = new Points;
        $point->users_id = auth()->id();
        $point->articles_id = $this->article->id;
        $point->points = $this->point;
        $point->save();

        $this->article->count += 1;
        $this->article->save();

        $this->emit('refreshPoint');
    }
}
