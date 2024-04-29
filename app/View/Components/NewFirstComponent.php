<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewFirstComponent extends Component
{
    public $name;
    public $classe;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $classe)
    {
        $this->name = $name;
        $this->classe= $classe;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new-first-component',[
            'tags'=>$this->getTags()
        ]);
    }

    private function getTags()
    {
        return [
            'passable',
            'bien',
            'tres bien'
        ];
    }
}
