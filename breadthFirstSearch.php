<?php

/**
 * Алгоритм поиска в ширину
 */

class breadthFirstSearch{
    function Search($graph){
        $queue = new SplQueue();
        $searched = [];//Массив для проверенных людей
        $this->addToQueue($queue,$graph['you']);//Добавляем в очередь

        while ($queue->count() != 0){//Пока не кончится очередь
            if (!in_array($queue->bottom(),$searched)) {//Если человек уже проверялся, пропускаем
                if ($queue->bottom() == 'thom') {//Нужный человек
                    return $queue->bottom();
                } else {
                    $searched[] = $queue->bottom();
                    $this->addToQueue($queue, $graph[$queue->bottom()]);//Если человек не подошел, добавляем в очередь его графы
                    $queue->dequeue();
                }
            }else{
                $queue->dequeue();
            }
        }

        return false;
    }

    //Метод добавления имен в очередь
    function addToQueue($queue,$graph){
        foreach($graph as $el){
            $queue->enqueue($el);
        }
        return $queue;
    }
}
//Граф
$graph = [];
$graph["you"] = ["alice", "bob", "claire"];
$graph["bob"] = ["anuj", "peggy"];
$graph["alice"] = ["peggy"];
$graph["claire"] = ["thom", "jonny"];
$graph["anuj"] = [];
$graph["peggy"] = [];
$graph["thom"] = [];
$graph["jonny"] = [];

$class = new breadthFirstSearch();
$response = $class->Search($graph);
print_r($response);
