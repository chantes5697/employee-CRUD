<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * 
 * @property string $dept_no
 * @property string $dept_name
 * 
 * @property Collection|DeptEmp[] $dept_emps
 * @property Collection|DeptManager[] $dept_managers
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'departments';
	protected $primaryKey = 'dept_no';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'dept_name'
	];

	public function dept_emps()
	{
		return $this->hasMany(DeptEmp::class, 'dept_no');
	}

	public function dept_managers()
	{
		return $this->hasMany(DeptManager::class, 'dept_no');
	}
}
