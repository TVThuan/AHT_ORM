<?php
namespace AHT_ORM\Controllers;

use AHT_ORM\Core\Controller;
use AHT_ORM\Models\Task;
use AHT_ORM\Models\TaskRepository;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = new TaskRepository();
        $d['tasks'] = $tasks->getAll();
        $this->set($d);
        $this->render("index");
    }

    public function create()
    {
        if (isset($_POST["title"]))
        {
            $taskRpt= new TaskRepository;
            $task = new Task;
            $task->setTitle($_POST["title"]);
            $task->setDescription($_POST["description"]);
            $task->setCreatedAt(date("Y-m-d H-i-s"));
            $task->setUpdatedAt(date("Y-m-d H-i-s"));
            $taskRpt->add($task);
           
            header("Location: " . WEBROOT . "task/index");
        }
        $this->render("create");
    }

    public function edit($id)
    {
        $task = new TaskRepository();
        $d["task"] = $task->get($id);
        if (isset($_POST["title"]))
        {
            $objTask = new Task();
            $objTask->setId($id);
            $objTask->setTitle($this->convertToString($_POST["title"]));
            $objTask->setDescription($this->convertToString($_POST["description"]));
            $objTask->setCreatedAt($this->convertToString($d['task']['created_at']));
            $objTask->setUpdatedAt($this->convertToString(date("Y-m-d H-i-s")));
            $task->edit($objTask);
            header("Location: " . WEBROOT . "task/index");        
        }
        $this->set($d); 
        $this->render("edit");
    }

    public function delete($id)
    {
        $task = new TaskRepository();
        $task->delete($id);
        header("Location: " . WEBROOT . "task/index");
    }
}
?>