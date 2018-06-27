<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-06-27 20:28:18
 * @version $Id$
 */

//小華取名一個叫做 b 的空間，在 namespace 後面的 class 都將會被歸類在 b 底下 
namespace b\man;
 
class hello 
{
    static public function get()
    {
        return "b\man hello::get()";
    }
}
 
class byebye 
{
    static public function get()
    {
        return "b\man byebye::get()";
    }
}
 
namespace b\woman;
 
class hello 
{
    static public function get()
    {
        return "b\woman hello::get()";
    }
}
 
class byebye 
{
    static public function get()
    {
        return "b\woman byebye::get()";
    }
}