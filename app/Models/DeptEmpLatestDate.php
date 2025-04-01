<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DeptEmpLatestDate
 * 
 * @property int $emp_no
 * @property Carbon|null $from_date
 * @property Carbon|null $to_date
 *
 * @package App\Models
 */
class DeptEmpLatestDate extends Model
{
	protected $table = 'dept_emp_latest_date';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emp_no' => 'int',
		'from_date' => 'datetime',
		'to_date' => 'datetime'
	];

	protected $fillable = [
		'emp_no',
		'from_date',
		'to_date'
	];
}
