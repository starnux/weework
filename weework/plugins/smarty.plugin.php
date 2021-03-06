<?php
/*
    This file is part of WeeWork.

    WeeWork is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    WeeWork is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with WeeWork; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

    $Id$
 */

/* Smarty plugin */

if(!defined("SMARTY_PATH"))
	define("SMARTY_PATH", WEEWORK_PATH . "smarty/");

if(!defined("SMARTY_DEBUG"))
	define("SMARTY_DEBUG", false);

if(!defined("SMARTY_DEV"))
	define("SMARTY_DEV", false);

if(!defined("SMARTY_CACHE"))
	define("SMARTY_CACHE", false);

require_once SMARTY_PATH . "Smarty.class.php";

function smarty_plugin_init()
{
	$GLOBALS["smarty"] = new Smarty;

	if(SMARTY_DEV)
	{
		$GLOBALS["smarty"]->compile_check = true;
		$GLOBALS["smarty"]->force_compile = true;
	}

	if(SMARTY_CACHE)
	{
		$GLOBALS["smarty"]->caching = 1;
	}

        $GLOBALS["smarty"]->debugging = SMARTY_DEBUG;

    $GLOBALS["smarty"]->assign("BASE_HREF", $GLOBALS["BASE_HREF"]);
    $GLOBALS["smarty"]->assign("REQUEST_URL", $GLOBALS["REQUEST_URL"]);
    $GLOBALS["smarty"]->assign("SSL", $GLOBALS["SSL"]);
}


