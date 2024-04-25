<?php

namespace Comblock_Html_Helper;

use Comblock_Html_Node;
use Comblock_Html_Render;

/**
 * @since 1.0.0
 * @param string $tag
 * @return Comblock_Html_Node
 */
function tag(string $tag): Comblock_Html_Node
{
    return Comblock_Html_Node::tag($tag);
}

/**
 * @since 1.0.0
 * @param string $href
 * @param string $label
 * @return Comblock_Html_Node
 */
function a(string $href, string $label): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('a')
        ->attr('href', esc_url($href))
        ->value($label);
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Node
 */
function div(): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('div');
}

/**
 * @since 1.0.0
 * @param string $text
 * @return Comblock_Html_Node
 */
function p(string $text = ''): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('p')
        ->value($text);
}

/**
 * @since 1.0.0
 * @param string $src
 * @return Comblock_Html_Node
 */
function img(string $src): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('img')
        ->attr('src', esc_url($src));
}

/**
 * @since 1.0.0
 * @param string $action
 * @param string $method
 * @return Comblock_Html_Node
 */
function form(string $action, string $method = 'post'): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('form')
        ->attr('action', esc_url($action))
        ->attr('method', $method);
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Node
 */
function fieldset(): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('fieldset');
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Node
 */
function legend(): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('legend');
}

/**
 * @since 1.0.0
 * @param string $for
 * @return Comblock_Html_Node
 */
function label(string $for): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('label')
        ->attr('for', $for);
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Node
 */
function figcaption(): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('figcaption');
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Node
 */
function figure(): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('figure');
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $placeholder
 * @param string $value
 * @return Comblock_Html_Node
 */
function input(string $name, string $placeholder, string $value = ''): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('input')
        ->attr('type', 'text')
        ->attr('name', $name)
        ->attr('value', $value)
        ->attr('placeholder', $placeholder);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $placeholder
 * @param string $value
 * @return Comblock_Html_Node
 */
function textarea(string $name, string $placeholder, string $value = ''): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('textarea')
        ->attr('name', $name)
        ->attr('placeholder', $placeholder)
        ->value($value);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $value
 * @return Comblock_Html_Node
 */
function checkbox(string $name, string $value = ''): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('input')
        ->attr('type', 'checkbox')
        ->attr('name', $name)
        ->attr('value', $value);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $value
 * @param string $placeholder
 * @return Comblock_Html_Node
 */
function password(string $name, string $value = '', string $placeholder = ''): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('input')
        ->attr('type', 'password')
        ->attr('name', $name)
        ->attr('value', $value)
        ->attr('placeholder', $placeholder);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $value
 * @return Comblock_Html_Node
 */
function radio(string $name, string $value = ''): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('input')
        ->attr('type', 'radio')
        ->attr('name', $name)
        ->attr('value', $value);
}

/**
 * @since 1.0.0
 * @param string $name
 * @param string $value
 * @return Comblock_Html_Node
 */
function select(string $name): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('select')
        ->attr('name', $name);
}

/**
 * @since 1.0.0
 * @param string $value
 * @param string $label
 * @return Comblock_Html_Node
 */
function option(string $value, string $label): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('option')
        ->attr('value', $value)
        ->value($label);
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Node
 */
function ul(): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('ul');
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Node
 */
function ol(): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('ol');
}

/**
 * @since 1.0.0
 * @return Comblock_Html_Node
 */
function li(): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('li');
}

/**
 * @since 1.0.0
 * @param string $label
 * @return Comblock_Html_Node
 */
function reset(string $label): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('input')
        ->attr('type', 'reset')
        ->value($label);
}

/**
 * @since 1.0.0
 * @param string $label
 * @return Comblock_Html_Node
 */
function submit(string $label): Comblock_Html_Node
{
    return Comblock_Html_Node::tag('input')
        ->attr('type', 'submit')
        ->value($label);
}

/**
 * @since 1.0.0
 * @param Comblock_Html_Node[] $nodes
 * @return string
 */
function view(array $nodes = []): string
{
    $renderer = new Comblock_Html_Render();
    $renderer->process($nodes);

    return $renderer->dom->saveHTML();
}
