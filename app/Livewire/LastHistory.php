<?php

namespace App\Livewire;

use App\History;
use Livewire\Component;

class LastHistory extends Component
{
    public $history = null;

    public function mount()
    {
        $this->loadHistory();
    }

    public function loadHistory()
    {
        $record = History::orderBy('created_at', 'desc')->first();
        $this->history = $record ? $record->toArray() : null;
    }

    public function render()
    {
        return view('livewire.last-history');
    }
}
