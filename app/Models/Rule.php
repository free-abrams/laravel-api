<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Rule
 *
 * @property int $id
 * @property string $name
 * @property string $rule
 * @property string $route
 * @property int $is_menu 1 是菜单 2不是菜单
 * @property int $status 1 正常 2禁用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Rule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rule query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereIsMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereRule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Rule extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'rule',
        'route',
        'is_menu',
        'status',
    ];
}
