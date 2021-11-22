<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTime;
use Livewire\Component;

class Attendance extends Component
{
    public User $user;
    public DateTime $start;
    public DateTime $end;


    public function mount(User $user)
    {
        $this->start = Carbon::parse('2021-11-01 00:00');
        $this->end = Carbon::parse('2021-11-30 23:59');

        $start = $this->start;
        $end = $this->end;

        $this->user = $user->load(['attendances' => function($query) use($start, $end) {
            $query->whereBetween('created_at', [$start, $end]);
        }]);
    }

    public function render()
    {
        $period = CarbonPeriod::create($this->start, $this->end);

        $ranges = [
            'mtif' => Carbon::parse('6:00 AM')->format('H:i:s'),
            'mtis' => Carbon::parse('9:30 AM')->format('H:i:s'),
            'mtof' => Carbon::parse('11:30 AM')->format('H:i:s'),
            'mtos' => Carbon::parse('12:29 PM')->format('H:i:s'),
            'atif' => Carbon::parse('12:30 PM')->format('H:i:s'),
            'atis' => Carbon::parse('1:30 PM')->format('H:i:s'),
            'atof' => Carbon::parse('4:30 PM')->format('H:i:s'),
            'atos' => Carbon::parse('5:30 PM')->format('H:i:s')
        ];

        return view('livewire.attendance', compact('period', 'ranges'));
    }
}
