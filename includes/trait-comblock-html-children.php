<?php

trait Comblock_Html_Children
{
    /**
     * @since 1.0.0
     * @access protected
     * @var self[] $children
     */
    protected array $children = [];

    /**
     * @since 1.0.0
     * @param self $node
     * @return self
     */
    public function append(self $node): self
    {
        $this->children[] = $node;

        return $this;
    }

    /**
     * @since 1.0.0
     * @return bool
     */
    public function has_children(): bool
    {
        return empty($this->children) ? false : true;
    }

    /**
     * @since 1.0.0
     * @return self[]
     */
    public function get_children(): array
    {
        return $this->children;
    }
}
