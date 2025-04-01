<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $emp_no
 * @property Carbon $birth_date
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property Carbon $hire_date
 * 
 * @property Collection|DeptEmp[] $dept_emps
 * @property Collection|DeptManager[] $dept_managers
 * @property Collection|Salary[] $salaries
 * @property Collection|Title[] $titles
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employees';
	protected $primaryKey = 'emp_no';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emp_no' => 'int',
		'birth_date' => 'datetime',
		'hire_date' => 'datetime'
	];

	protected $fillable = [
		'birth_date',
		'first_name',
		'last_name',
		'gender',
		'hire_date'
	];

	public function dept_emps()
	{
		return $this->hasMany(DeptEmp::class, 'emp_no');
	}

	public function dept_managers()
	{
		return $this->hasMany(DeptManager::class, 'emp_no');
	}

	public function salaries()
	{
		return $this->hasMany(Salary::class, 'emp_no');
	}

	public function titles()
	{
		return $this->hasMany(Title::class, 'emp_no');
	}
}
