<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 20.09.2018
 * Time: 14:23
 */

class Model
{
    /**
     * @var mixed
     */
    protected $v;

    /**
     * add
     */
    public function add($v)
    {
        $this->v = $v;
    }

    /**
     * get
     */
    public function get()
    {
        return $this->v;
    }
}