<?php

namespace App\View\Components;

use App\Models\Jurusan;
use Illuminate\View\Component;

class dataJurusan extends Component
{
    public $jurusan;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->jurusan = Jurusan::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.data-jurusan');
    }
}
