<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $from
 * @property string $to
 * @property string $subject
 * @property string $body
 * @property bool $sent
 */
class MailQueue extends Model
{
    use HasFactory;
}
