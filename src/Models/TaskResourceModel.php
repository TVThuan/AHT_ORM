<?php 
namespace AHT_ORM\Models;

use AHT_ORM\Core\ResourceModel;

class TaskResourceModel extends ResourceModel
{
	public function __construct()
	{
		self::_init('tasks', uniqid(), new Task());
	}
}
