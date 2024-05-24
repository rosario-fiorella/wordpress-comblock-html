<?php

/**
 * @since 1.0.0
 * @package comblock-html
 * @subpackage comblock-html/includes
 */

namespace Comblock_Html_Helper;

use \Comblock_Html_Dom;

/**
 * @since 1.0.0
 * @param string $tag
 * @return Comblock_Html_Dom
 */
function tag(string $tag): Comblock_Html_Dom
{
    return new Comblock_Html_Dom($tag);
}

/**
 * @since 1.0.0
 * @param string $href
 * @param string $label
 * @param string $target
 * @return Comblock_Html_Dom
 */
function a(string $href, string $label, string $target = '_self'): Comblock_Html_Dom
{
    return tag('a')->href($href)->target($target)->text($label);
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Dom
 */
function div(): Comblock_Html_Dom
{
    return tag('div');
}

/**
 * @since 1.0.0
 * @param string $text
 * @return Comblock_Html_Dom
 */
function p(string $text = ''): Comblock_Html_Dom
{
    return tag('p')->text($text);
}

/**
 * @since 1.0.0
 * @param string $src
 * @return Comblock_Html_Dom
 */
function img(string $src): Comblock_Html_Dom
{
    return tag('img')->src($src);
}

/**
 * @since 1.0.0
 * @param string $action
 * @param string $method
 * @return Comblock_Html_Dom
 */
function form(string $action, string $method = 'post'): Comblock_Html_Dom
{
    return tag('form')->action($action)->attr('method', $method);
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Dom
 */
function fieldset(): Comblock_Html_Dom
{
    return tag('fieldset');
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Dom
 */
function legend(): Comblock_Html_Dom
{
    return tag('legend');
}

/**
 * @since 1.0.0
 * @param string $for
 * @return Comblock_Html_Dom
 */
function label(string $for): Comblock_Html_Dom
{
    return tag('label')->for($for);
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Dom
 */
function figcaption(): Comblock_Html_Dom
{
    return tag('figcaption');
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Dom
 */
function figure(): Comblock_Html_Dom
{
    return tag('figure');
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $type
 * @param string $value
 * @return Comblock_Html_Dom
 */
function input(string $name, string $type, string $value = ''): Comblock_Html_Dom
{
    return tag('input')->type($type)->name($name)->value($value);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $value
 * @return Comblock_Html_Dom
 */
function checkbox(string $name, string $value = ''): Comblock_Html_Dom
{
    return input($name, 'checkbox', $value);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $value
 * @return Comblock_Html_Dom
 */
function radio(string $name, string $value = ''): Comblock_Html_Dom
{
    return input($name, 'radio', $value);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $value
 * @param string $placeholder
 * @return Comblock_Html_Dom
 */
function password(string $name, string $value = '', string $placeholder = ''): Comblock_Html_Dom
{
    return input($name, 'password', $value)->placeholder($placeholder);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $placeholder
 * @param string $content
 * @return Comblock_Html_Dom
 */
function textarea(string $name, string $placeholder, string $content = ''): Comblock_Html_Dom
{
    return tag('textarea')->name($name)->textarea($content)->placeholder($placeholder);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $value
 * @return Comblock_Html_Dom
 */
function select(string $name): Comblock_Html_Dom
{
    return tag('select')->name($name);
}

/**
 * @since 1.0.0
 * @param string $value
 * @param string $label
 * @return Comblock_Html_Dom
 */
function option(string $value, string $label): Comblock_Html_Dom
{
    return tag('option')->value($value)->text($label);
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Dom
 */
function ul(): Comblock_Html_Dom
{
    return tag('ul');
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Dom
 */
function ol(): Comblock_Html_Dom
{
    return tag('ol');
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Dom
 */
function li(): Comblock_Html_Dom
{
    return tag('li');
}

/**
 * @since 1.0.0
 * @param string $label
 * @return Comblock_Html_Dom
 */
function reset(string $label): Comblock_Html_Dom
{
    return tag('button')->type('reset')->text($label);
}

/**
 * @since 1.0.0
 * @param string $label
 * @return Comblock_Html_Dom
 */
function submit(string $label): Comblock_Html_Dom
{
    return tag('button')->type('submit')->text($label);
}
