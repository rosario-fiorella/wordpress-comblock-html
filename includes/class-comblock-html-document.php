<?php

/**
 * @package comblock-html
 * @subpackage comblock-html/includes
 */
class Comblock_Html_Document
{
    /**
     * @since 1.0.0
     * @var DOMDocument $dom
     */
    public DOMDocument $dom;

    /**
     * @since 1.0.0
     * @access protected
     * @var ArrayObject $schema
     */
    protected ArrayObject $schema;

    /**
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->dom = new DOMDocument();

        $this->schema = new ArrayObject();
    }

    /**
     * @since 1.0.0
     * @param Comblock_Html_Dom $node
     * @return void
     */
    public function add(Comblock_Html_Dom $node): void
    {
        $this->schema->append($node);
    }

    /**
     * @since 1.0.0
     * @return string
     */
    public function view(): string
    {
        $this->process($this->schema->getArrayCopy());

        return $this->dom->saveHTML();
    }

    /**
     * @since 1.0.0
     * @access protected
     * @param Comblock_Html_Node[] $scheme
     * @param null|DOMElement $parent
     * @return void
     */
    protected function process(array $scheme = [], ?DOMElement $parent = null): void
    {
        foreach ($scheme as $node) {
            /**
             * @var Comblock_Html_Dom $node
             */
            $node;

            /**
             * @var DOMElement $element
             */
            $element = $this->dom->createElement($node->get_tag(), $node->get_value());
            foreach ($node->get_attributes() as $name => $value) {
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

            if ($node->has_children()) {
                $this->process($node->get_children(), $child);
            }
        }
    }
}
