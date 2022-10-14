<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RoleToRule
 *
 * @property int $id
 * @property int $role_id
 * @property int $rule_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RoleToRule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleToRule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleToRule query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleToRule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleToRule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleToRule whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleToRule whereRuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleToRule whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RoleToRule extends Model
{
    use HasFactory;
}
