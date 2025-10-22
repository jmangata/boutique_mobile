<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class categories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
            
    { // recuperer la liste de toute les category a l'aide du modèle
        $categories = Category::limit(5)->get();
        //dd($categories);
        return view('components.categories', compact("categories"));
    }
}
