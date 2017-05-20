<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 18.05.2017
 * Time: 22:37
 */

namespace Infinity\Others;


use ArrayIterator;
use Countable;
use IteratorAggregate;
use Traversable;

class Collection implements Countable, IteratorAggregate
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

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
       return count($this->items);
    }
}
