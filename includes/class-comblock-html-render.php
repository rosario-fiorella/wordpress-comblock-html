<?php

/**
 * @since 1.0.0
 * @package comblock-html
 * @subpackage comblock-html/includes
 */
class Comblock_Html_Render
{
    /**
     * @since 1.0.0
     * @var DOMDocument $dom
     */
    public DOMDocument $dom;

    /**
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->dom = new DOMDocument();
    }

    /**
     * @since 1.0.0
     * @param Comblock_Html_Node[] $scheme
     * @param null|DOMElement $parent
     * @return void
     */
    public function process(array $scheme = [], ?DOMElement $parent = null): void
    {
        foreach ($scheme as $node) {
            /**
             * @var DOMElement $element
             */
            $element = $this->dom->createElement($node->tag, $node->value);
            foreach ($node->attributes as $name => $value) {
                $element->setAttribute($name, $value);
            }

            if ($parent) {
                /**
                 * @var null|DOMElement $child
                 */
                $child = $parent->appendChild($element);
            } else {
                /**
                 * @var null|DOMElement $child
                 */
                $child = $this->dom->appendChild($element);
            }

            if (!empty($node->children)) {
                $this->process($node->children, $child);
            }
        }
    }
}
