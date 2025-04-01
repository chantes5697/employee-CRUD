<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Salary
 * 
 * @property int $emp_no
 * @property int $salary
 * @property Carbon $from_date
 * @property Carbon $to_date
 * 
 * @property Employee $employee
 *
 * @package App\Models
 */
class Salary extends Model
{
	protected $table = 'salaries';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emp_no' => 'int',
		'salary' => 'int',
		'from_date' => 'datetime',
		'to_date' => 'datetime'
	];

	protected $fillable = [
		'salary',
		'to_date'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'emp_no');
	}
}
