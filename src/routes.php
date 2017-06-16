<?php
Route::get(config(['magic-routes.path']) . '/{slug}', 'Scopefragger\MagicViews\Controllers\MagicViewsController@handle');