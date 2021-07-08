<?php
namespace ohbusy\contracts;

/**
 * 为了约束我们先定义一个消息接口
 * Interface Message
 */
interface Message
{
    public function send();
}