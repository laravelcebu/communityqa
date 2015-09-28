<?php 
/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\Lock;

use Flarum\Support\Extension as BaseExtension;
use Illuminate\Events\Dispatcher;

class Extension extends BaseExtension
{
    public function listen(Dispatcher $events)
    {
        $events->subscribe('Flarum\Lock\Listeners\AddClientAssets');
        $events->subscribe('Flarum\Lock\Listeners\AddApiAttributes');
        $events->subscribe('Flarum\Lock\Listeners\PersistData');
        $events->subscribe('Flarum\Lock\Listeners\NotifyDiscussionLocked');
        $events->subscribe('Flarum\Lock\Listeners\ConfigurePermissions');
    }
}
