<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Banner extends Component
{
    public $title;
    public $para1;
    public $para2;
    public $secondImage;

    // Add $para1 and $para2 to constructor
    public function __construct($title, $para1 = null, $para2 = null, $secondImage = null)
    {
        $this->title = $title;
        $this->para1 = $para1;
        $this->para2 = $para2;
        $this->secondImage = $secondImage;
    }

    public function render()
    {
        return view('components.banner');
    }
}
