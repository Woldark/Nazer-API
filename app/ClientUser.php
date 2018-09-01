<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\ClientUser
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @mixin \Eloquent
 * @property int $id
 * @property string $uid
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $phone
 * @property int|null $age
 * @property string|null $sex
 * @property string|null $description
 * @property string $create_date
 * @property string|null $update_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ClientUser whereUpdatedAt($value)
 */
class ClientUser extends Model
{
    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'user_client_id');
    }
}
