# php-htmltag
a very concise HTML tag builder class with support for dynamic attributes

### include the htmlTag class
```
include('class.tags.php');
```

### Example 01:
```
echo new htmlTag('h1', null, "This is a header");
```

```
<h1>this is a header</h1>
```

### Example 02:
```
echo new htmlTag('h1', array('class'=>'border pad right'), "This is a header");
```

```
<h1 class="border pad right">this is a header</h1>
```

### Example 03:
```
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->content = "This is a header";
echo "{$foo}";
```

```
<h1 class="border pad right">this is a header</h1>
```

### Example 04:
```
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->toggle_attr('class','pad');
$foo->content = "This is a header";
echo "{$foo}";
```

```
<h1 class="border right">this is a header</h1>
```

### Example 05:
```
$foo = new htmlTag('h1');
$foo->set_attr(array('class'=>'border pad right'));
$foo->toggle_attr('class','foo');
$foo->content = "This is a header";
echo "{$foo}";
```

```
<h1 class="border pad right foo">this is a header</h1>
```

### Example 06:
```
echo new htmlTag('br', array('class','clear'));
```

```
<br class="clear" />
```

### Example 07:
```
$foo = new htmlTag('img');
$foo->set_attr('src','Example.jpg');
$foo->set_attr('alt','A picture of an Example');
$foo->toggle_attr('class','border');
echo "{$foo}";
```

```
<img src="Example.jpg" alt="A picture of an Example" class="clear foo" />
```

### Example 08:
```
$img = new htmlTag('img');
$img->set_attr('src','Example.jpg');
$img->set_attr('alt','A picture of an Example');
$img->toggle_attr('class','border');

$div = new htmlTag('div');
$div->set_attr('class','border');
$div->content = $img;

echo "{$div}";
```

```
<div class="border"><img src="Example.jpg" alt="A picture of an Example" class="clear foo" /></div>
```



