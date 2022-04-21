<?php

namespace App\Http\Livewire;

use App\Models\Advertisement;
use App\Models\Institution;
use Livewire\Component;

class AdReport extends Component
{

    public $adType = null;
    public $byMinistry = null;
    public $sortBy = 'asc';
    public $search;


    // public function updatedAds()
    // {
    //     $this->filteredAds = Advertisement::where('ad_type', $this->adType)->get();
    // }

    public function render()
    {
        // $this->ads = Advertisement::all();
        $institutions = Institution::all();
        $ads = Advertisement::when($this->adType, function ($query) {
            $query->where('ad_type', $this->adType);
        })->when($this->byMinistry, function ($query) {
            $query->where('institution_id', $this->byMinistry);
        })
            ->search(trim($this->search))
            ->orderBy('ad_name', $this->sortBy)
            ->get();

        return view('livewire.ad-report', compact('institutions', 'ads'));
    }
}
