<?php
namespace Afonso\Goodies\Database;

use Closure;
use Illuminate\Database\Migrations\Migration as IlluminateMigration;
use Illuminate\Database\Schema\Builder;

class Migration extends IlluminateMigration
{
	public function createIfNotExists($table, Closure $callback, Builder $builder)
	{
		if (! $builder->hasTable($table)) {
			$builder->create($table, $callback);
		}
	}
}