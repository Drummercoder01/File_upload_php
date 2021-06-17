<?php
/*
The MIT License (MIT)

Copyright (c) Wed oct 10 2018 Micky De Pauw

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORTOR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/


/**
 * Deze functie creëert een html selectie /dropdown tussen 2 
 * gegeven getallen
 * @param [string] $_name      [name en id van de selectie]
 * @param [num] $_start        [start van de opties]
 * @param [num] $_einde        [einde van de opties]
 * @param [num] [$_stap = 1]   [stappen tussen de opties]
 * @param [num] [$_select = 0] [geselecteerde optie]
 */
function nbrSelection($_name, $_start, $_einde, $_stap = 1, $_select = 0)
{
	$_output = "<select name='$_name' id= '$_name'>\n";

	for ( $_x = $_start; $_x <= $_einde; $_x = $_x + $_stap)
	{

		$_output.="<option value=$_x";
		if ($_x == $_select)
		{
			$_output.=" selected ";
		}
		$_output.=">$_x</option>\n";

	}

	$_output.="</select>\n";

	return $_output;
}
?>
