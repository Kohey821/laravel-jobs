<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $from
 * @property string $to
 * @property string $subject
 * @property string $body
 * @property bool $sent
 */
class Mail extends Model
{
    use HasFactory;
}
