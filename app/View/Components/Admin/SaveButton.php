<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SaveButton extends Component
{

    public function __construct(){
        //
    }

    public function render(): View|Closure|string{
        return view('components.admin.save-button');
    }
}
