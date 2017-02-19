<?php

// include the htmlTag class
include('class.tags.php');

// ---- EXAMPLE 01:
echo new htmlTag('h1', null, "example 01");
echo "\n";
// <h1>example 01</h1>

// ---- EXAMPLE 02:
echo new htmlTag('h1', array('class'=>'border pad right'), "example 02");
echo "\n";
// <h1 class="border pad right">example 02</h1>

// ---- EXAMPLE 03:
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->content = "example 03";
echo "{$foo}";
echo "\n";
// <h1 class="border pad right">example 03</h1>

// ---- EXAMPLE 04:
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->toggle_attr('class','pad');
$foo->content = "example 04";
echo "{$foo}";
echo "\n";
// <h1 class="border right">example 04</h1>

// ---- EXAMPLE 05:
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->toggle_attr('class','foo');
$foo->content = "example 05";
echo "{$foo}";
echo "\n";
// <h1 class="border pad right foo">example 05</h1>

// ---- EXAMPLE 06:
echo new htmlTag('br', array('class'=>'clear'));
echo "\n";
// <br class="clear" />

// ---- EXAMPLE 07:
$foo = new htmlTag('img');
$foo->set_attr('src','example.jpg');
$foo->set_attr('alt','an abstract image');
$foo->toggle_attr('class','border');
echo "{$foo}";
echo "\n";
// <img src="example.jpg" alt="an abstract image" class="border" />

// ---- EXAMPLE 07:
$img = new htmlTag('img');
$img->set_attr('src','example.jpg');
$img->set_attr('alt','an example img');
$img->toggle_attr('class','border');

$div = new htmlTag('div');
$div->set_attr('class','pad');
$div->content = $img;

echo "{$div}";
echo "\n";
// <div class="pad"><img src="example.jpg" alt="an example img" class="border" /></div>



