<?php
namespace App\Models;

use App\Contract\DatabaseHandler;
use App\Observer\UserObserver;
use App\Traits\HasRole;
use ArrayIterator;
use IteratorAggregate;
use Traversable;

class User implements IteratorAggregate
{

    protected array $users = [];
    public function __construct(array $users)
    {
        $this->users = $users;
    }
    public function getIterator():Traversable
    {
        return new ArrayIterator();
    }
}