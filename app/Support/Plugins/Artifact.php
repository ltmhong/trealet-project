<?php
namespace Vanguard\Support\Plugins;

use Vanguard\Plugins\Plugin;
use Vanguard\Support\Sidebar\Item;

class Artifact extends Plugin
{
    public function sidebar()
    {
        return Item::create(__('Artifact'))
            ->route('artifact')
            ->icon('fas fa-users')
            ->active("artifact*");
//            ->permissions('users.manage');
    }
}