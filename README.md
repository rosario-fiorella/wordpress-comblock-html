# wordpress-comblock-html

use the html builder to create page templates in your theme or implement admin pages in your plugins.

Internally it uses the DOMDocument class to generate the HTML code, improving the validation of the tags to be generated

## Example of use
```PHP
use function Comblock_Html_Helper\tag;
use function Comblock_Html_Helper\view;

$schema = [
    // generic tag
    tag('div'),
    // tag with attributes
    tag('div') 
        ->attr('id', 'my-id')
        ->attr('class', 'my-class'),
    // tag value
    tag('div')
        ->value('hello world!'),
    // nested tag
    tag('ul')
        ->append(tag('li')->value('element'))
        ->append(tag('li')->value('element'))
        ->append(tag('li')->value('element'))
];

print view($schema);

```
print HTML minifier, result:
```
<div></div><div id="my-id" class="my-class"></div><div>hello world!</div><ul><li>element</li><li>element</li><li>element</li></ul>
```

## Tag list
List of tags implemented to improve productivity, if you need specific tags not in this list you can use ```Comblock_Html_Helper\tag``` to generate any ```HTML``` code

```PHP
use function Comblock_Html_Helper\a;
use function Comblock_Html_Helper\checkbox;
use function Comblock_Html_Helper\div;
use function Comblock_Html_Helper\fieldset;
use function Comblock_Html_Helper\figcaption;
use function Comblock_Html_Helper\figure;
use function Comblock_Html_Helper\form;
use function Comblock_Html_Helper\img;
use function Comblock_Html_Helper\input;
use function Comblock_Html_Helper\label;
use function Comblock_Html_Helper\legend;
use function Comblock_Html_Helper\li;
use function Comblock_Html_Helper\ol;
use function Comblock_Html_Helper\option;
use function Comblock_Html_Helper\p;
use function Comblock_Html_Helper\radio;
use function Comblock_Html_Helper\reset;
use function Comblock_Html_Helper\select;
use function Comblock_Html_Helper\submit;
use function Comblock_Html_Helper\tag;
use function Comblock_Html_Helper\textarea;
use function Comblock_Html_Helper\ul;
use function Comblock_Html_Helper\view;
```