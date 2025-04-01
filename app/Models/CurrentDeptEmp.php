<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CurrentDeptEmp
 * 
 * @property int $emp_no
 * @property string $dept_no
 * @property Carbon|null $from_date
 * @property Carbon|null $to_date
 *
 * @package App\Models
 */
class CurrentDeptEmp extends Model
{
	protected $table = 'current_dept_emp';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emp_no' => 'int',
		'from_date' => 'datetime',
		'to_date' => 'datetime'
	];

	protected $fillable = [
		'emp_no',
		'dept_no',
		'from_date',
		'to_date'
	];
}
