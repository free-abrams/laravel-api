<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AdminToRole
 *
 * @property int $id
 * @property int $admin_id
 * @property int $role_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AdminToRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminToRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminToRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminToRole whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminToRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminToRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminToRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminToRole whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AdminToRole extends Model
{
    use HasFactory;
}
