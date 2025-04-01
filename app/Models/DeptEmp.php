<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DeptEmp
 * 
 * @property int $emp_no
 * @property string $dept_no
 * @property Carbon $from_date
 * @property Carbon $to_date
 * 
 * @property Employee $employee
 * @property Department $department
 *
 * @package App\Models
 */
class DeptEmp extends Model
{
	protected $table = 'dept_emp';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emp_no' => 'int',
		'from_date' => 'datetime',
		'to_date' => 'datetime'
	];

	protected $fillable = [
		'from_date',
		'to_date'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'emp_no');
	}

	public function department()
	{
		return $this->belongsTo(Department::class, 'dept_no');
	}
}
