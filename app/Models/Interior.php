<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use OpenApi\Annotations as OA;

/**
 * Class Interior
 * 
 * @author Kenlie <kenlie.422023014@civitas.ukrida.ac.id>
 * 
 * @OA\Schema(
 *      description="interior model",
 *      title="interior model",
 *      required={"name","type"},
 *      @OA\Xml(
 *              name="interior"
 *              )
 *          )
 */

class Interior extends Model
{
    //use HasFactory;
    use SoftDeletes;
    protected $table = 'home_interior';
    protected $fillable = [
        'id',
        'name',
        'producer',
        'type',
        'year_produced',
        'image',
        'description',
        'price',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function data_adder(){
        return $this->belongsTo(User::class,'created_by','id');
    }
}
