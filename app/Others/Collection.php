<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 18.05.2017
 * Time: 22:37
 */

namespace Infinity\Others;


use ArrayIterator;
use IteratorAggregate;
use Traversable;

class Collection implements IteratorAggregate
{

    protected $items;

    function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}
