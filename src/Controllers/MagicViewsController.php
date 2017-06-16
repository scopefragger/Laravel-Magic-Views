<?php
namespace Scopefragger\MagicViews\Controllers;

use App\Http\Controllers\Controller;

/**
 * Class MagicRoutesController
 *
 * The direct controller hit by all {path}/{slug} views
 * Will attempt to return a view if there is one named
 * the same as the {slug} provided
 *
 * @package Scopefragger\MagicRoutes\Controllers
 */
class MagicViewsController extends Controller
{

    /**
     * Returns view
     *
     * Returns a view file is one is available with the name provided
     * in the folder specified in the config file
     */
    public function handle($slug)
    {
        return view(config(['magic-routes.path']) . '' . $slug);
    }
}