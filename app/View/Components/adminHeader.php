<?php

namespace App\View\Components;
use App\Models\User;
use Illuminate\View\Component;

class adminHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $details;
    public function __construct()
    {
        $this->details=User::find(session()->get('id'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-header');
    }
}
