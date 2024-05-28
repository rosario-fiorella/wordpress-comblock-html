# wordpress-comblock-html

Comblock Html is a plugin for Wordpress that provides functionality to write safe and controlled HTML code, increasing productivity. The escape is performed internally exploiting the features that Wordpress provides (link) and takes advantage of the class DOMDocument that allows the validation of the HTML code during compilation

use the html builder to create page templates in your theme or implement admin pages in your plugins.

## Example of use
```PHP
<?php 

// declares the functions to be used
use function Comblock_Html_Helper\tag;

// Instance document
$document = new Comblock_Html_Document();

// add tags to the document
$document->add(
  tag('div')
);

// add tags to document with text content
$document->add(
  tag('div')
    ->text('hello world!')
);

// add tags to document with attributes
$document->add(
  tag('div') 
    ->attr('id', 'my-id')
    ->attr('class', 'my-class')
    ->attr('style', 'margin-left:0px;margin-top:20px;')
    ->attr('onclick', 'myFunction()')
);

// add nested tags to the document
$document->add(
  tag('ul')
    ->append(tag('li')->text('element 1'))
    ->append(tag('li')->text('element 2'))
    ->append(tag('li')->text('element 3'))
);

// print document
print $document->view();
```
### Result: minified html
```HTML
<div></div><div>hello world!</div><div id="my-id" class="my-class" style="margin-left:0px;margin-top:20px;" onclick="myFunction()"></div><ul><li>element 1</li><li>element 2</li><li>element 3</li></ul>
```
### Alternative short syntax, safer, more productivity
```PHP
<?php

// declares the functions to be used
use function Comblock_Html_Helper\tag;
use function Comblock_Html_Helper\div;
use function Comblock_Html_Helper\ul;
use function Comblock_Html_Helper\li;
use function Comblock_Html_Helper\a;
use function Comblock_Html_Helper\img;

// build the html document
// each node should contain 1 component
$document = new Comblock_Html_Document();

// add list
$document->add(
  ul()
    ->style('margin', '10px')
    ->style('padding', '10px')
    ->append(li()->append(a('/my/first/link.html', 'My first link')))
    ->append(li()->append(a('/my/second/link.html', 'My second link')))
    ->append(li()->append(a('/my/third/link.html', 'My third link')))
);

// add image grid
$document->add(
  div()
    ->id('my-gallery')
    ->css('row')
    ->append(img('/my/gallery/image-1.jpg', 'My image 1')->css('col-sm-3 img-fluid'))
    ->append(img('/my/gallery/image-2.jpg', 'My image 2')->css('col-sm-3 img-fluid'))
    ->append(img('/my/gallery/image-3.jpg', 'My image 3')->css('col-sm-3 img-fluid'))
);

// ... other items

print $document->view();
```
### Result: minified html
```HTML
<ul style="margin:10px;padding:10px;"><li><a href="/my/first/link.html" target="_self">My first link</a></li><li><a href="/my/second/link.html" target="_self">My second link</a></li><li><a href="/my/third/link.html" target="_self">My third link</a></li></ul><div id="my-gallery" css="row"><img src="/my/gallery/image-1.jpg" css="col-sm-3 img-fluid" alt="My image 1"><img src="/my/gallery/image-2.jpg" css="col-sm-3 img-fluid" alt="My image 2"><img src="/my/gallery/image-3.jpg" css="col-sm-3 img-fluid" alt="My image 3"></div>
```
### Lists all available attributes
```PHP
<?php

trait Comblock_Html_Attribute {
  public function id(string $id) {}
  public function css(string $css) {}
  public function action(string $action) {}
  public function src(string $src) {}
  public function href(string $href) {}
  public function target(string $target) {}
  public function name(string $name) {}
  public function onclick(string $js) {}
  public function value(string $value) {}
  public function type(string $type) {}
  public function placeholder(string $placeholder) {}
  public function for(string $for) {}
  public function width(int $width) {}
  public function height(int $height) {}
  public function alt(string $alt) {}
  public function style(string $property, string $value) {}
  public function lang(string $lang) {}
  public function title(string $title) {}
}
```

## Tag list
List of tags implemented to improve productivity, if you need specific tags not in this list you can use ```Comblock_Html_Helper\tag``` to generate any ```HTML``` tag

### nested tag, alternative short syntax
```PHP
<?php

namespace Comblock_Html_Helper;

function a(string $href, string $label, string $target = '_self') {}
function div() {}
function p(string $text = '') {}
function img(string $src, string $alt = '') {}
function form(string $action, string $method = 'post') {}
function fieldset() {}
function legend() {}
function label(string $for) {}
function figcaption() {}
function figure() {}
function input(string $name, string $type, string $value = '') {}
function checkbox(string $name, string $value = '') {}
function radio(string $name, string $value = '') {}
function password(string $name, string $value = '', string $placeholder = '') {}
function textarea(string $name, string $placeholder, string $content = '') {}
function select(string $name) {}
function option(string $value, string $label) {}
function ul() {}
function ol() {}
function li() {}
function reset(string $label) {}
function submit(string $label) {}
```
Remember to declare the namespace before using the tag helper function, all declarations below
```PHP
<?php

use function Comblock_Html_Helper\a;
use function Comblock_Html_Helper\div;
use function Comblock_Html_Helper\p;
use function Comblock_Html_Helper\img;
use function Comblock_Html_Helper\form;
use function Comblock_Html_Helper\fieldset;
use function Comblock_Html_Helper\legend;
use function Comblock_Html_Helper\label;
use function Comblock_Html_Helper\figcaption;
use function Comblock_Html_Helper\figure;
use function Comblock_Html_Helper\input;
use function Comblock_Html_Helper\checkbox;
use function Comblock_Html_Helper\radio;
use function Comblock_Html_Helper\password;
use function Comblock_Html_Helper\textarea;
use function Comblock_Html_Helper\select;
use function Comblock_Html_Helper\option;
use function Comblock_Html_Helper\ul;
use function Comblock_Html_Helper\ol;
use function Comblock_Html_Helper\li;
use function Comblock_Html_Helper\reset;
use function Comblock_Html_Helper\submit;
```
