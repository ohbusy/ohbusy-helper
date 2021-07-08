<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021-07-08
 * Time: 16:22
 */

namespace ohbusy\message;


use ohbusy\contracts\Message;

class SendEmail implements Message
{
    public function send()
    {
        // TODO: Implement send() method.
        return 'send email';
    }

}