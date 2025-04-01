<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Title
 * 
 * @property int $emp_no
 * @property string $title
 * @property Carbon $from_date
 * @property Carbon|null $to_date
 * 
 * @property Employee $employee
 *
 * @package App\Models
 */
class Title extends Model
{
	protected $table = 'titles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emp_no' => 'int',
		'from_date' => 'datetime',
		'to_date' => 'datetime'
	];

	protected $fillable = [
		'to_date'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'emp_no');
	}
}
