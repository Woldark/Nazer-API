<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Event
 *
 * @mixin \Eloquent
 * @property-read \App\ClientUser $client_user
 * @property-read \App\User $user
 * @property int $id
 * @property int $user_id
 * @property int $user_client_id
 * @property string $create_date
 * @property string|null $update_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUserClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUserId($value)
 */
class Event extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function client_user(): BelongsTo
    {
        return $this->belongsTo(ClientUser::class, 'user_client_id');
    }
}
