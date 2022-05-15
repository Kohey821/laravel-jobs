<?php

namespace Tests\Feature;

use App\Mail\TestMail;
use App\Models\Mail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Tests\TestCase;

class MailTest extends TestCase
{
    use RefreshDatabase;

    public function testMail()
    {
        $mail = new Mail();
        $mail->from = 'from@from.com';
        $mail->to = 'to@to.com';
        $mail->subject = 'タイトルです。';
        $mail->body = <<<MAIL
        ボディーです。
        ボディーです。
        ボディーです。
        ボディーです。
        ボディーです。
        ボディーです。
        ボディーです。
        ボディーです。
        ボディーです。
        ボディーです。
        ボディーです。
        MAIL;
        $mail->sent = false;
        $mail->save();

        FacadesMail::to($mail->to)
            ->send(new TestMail($mail));

        $mail->sent = true;
        $mail->save();
    }
}
