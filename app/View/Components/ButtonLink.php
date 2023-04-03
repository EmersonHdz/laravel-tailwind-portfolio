<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonLink extends Component
{
    
 /**
 * Create a new component instance.
 *
 * @param string $href The URL to link to.
 * @param string $target The target attribute of the link.
 * @param string $variant The variant of the button (default: primary).
 */
    public function __construct(public string $href, public string $target='_self', public string $variant = 'primary')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-link');
    }
}
