<?php

// include the htmlTag class
include('class.tags.php');

// ---- EXAMPLE 01:
echo new htmlTag('h1', null, "This is a header");
// <h1>this is a header</h1>

// ---- EXAMPLE 02:
echo new htmlTag('h1', array('class'=>'border pad right'), "This is a header");
// <h1 class="border pad right">this is a header</h1>

// ---- EXAMPLE 03:
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->content = "This is a header";
echo "{$foo}";
// <h1 class="border pad right">this is a header</h1>

// ---- EXAMPLE 04:
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->toggle_attr('class','pad');
$foo->content = "This is a header";
echo "{$foo}";
// <h1 class="border right">this is a header</h1>

// ---- EXAMPLE 05:
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->toggle_attr('class','foo');
$foo->content = "This is a header";
echo "{$foo}";
// <h1 class="border pad right foo">this is a header</h1>

// ---- EXAMPLE 05:
echo new htmlTag('br')->toggle_attr('class','clear');
// <br class="clear" />

// ---- EXAMPLE 06:
$foo = new htmlTag('img');
$foo->set_attr('src','example.jpg');
$foo->set_attr('alt','A picture of an example');
$foo->toggle_attr('class','border');
echo "{$foo}";
// <img src="example.jpg" alt="A picture of an example" class="clear foo" />

// ---- EXAMPLE 07:
$img = new htmlTag('img');
$img->set_attr('src','example.jpg');
$img->set_attr('alt','A picture of an example');
$img->toggle_attr('class','border');

$div = new htmlTag('div');
$div->set_attr('class','border');
$div->content = $img;

echo "{$div}";
// <div class="border"><img src="example.jpg" alt="A picture of an example" class="clear foo" /></div>



