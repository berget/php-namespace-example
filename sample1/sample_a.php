<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-06-27 20:27:33
 * @version $Id$
 */
//小明取名一個叫做 a 的空間，在 namespace 後面的 class 都將會被歸類在 a 底下 
namespace a\man;
 
class hello 
{
    static public function get()
    {
        return "a\man hello::get()";
    }
}
 
class byebye 
{
    static public function get()
    {
        return "a\man byebye::get()";
    }
}
 
namespace a\woman;
 
class hello 
{
    static public function get()
    {
        return "a\woman hello::get()";
    }
}
 
class byebye 
{
    static public function get()
    {
        return "a\woman byebye::get()";
    }
}