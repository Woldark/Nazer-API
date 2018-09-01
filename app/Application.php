<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Application
 *
 * @property int $id
 * @property int $project_id
 * @property string|null $uid
 * @property string $name
 * @property string $create_date
 * @property string|null $update_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property-read \App\Project $project
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Application whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Application whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Application whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Application whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Application whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Application whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Application extends Model
{
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'application_id');
    }
}
