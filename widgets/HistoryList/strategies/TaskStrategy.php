<?php

namespace app\widgets\HistoryList\strategies;

class TaskStrategy extends BasicStrategy
{
    /**
     * @return array
     */
    public function getParams(): array
    {
        $task = $this->model->task;

        return [
            'user' => $this->model->user,
            'body' => $this->getBody(),
            'iconClass' => 'fa-check-square bg-yellow',
            'footerDatetime' => $this->model->ins_ts,
            'footer' => isset($task->customerCreditor->name) ? "Creditor: " . $task->customerCreditor->name : ''
        ];
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return "{$this->model->eventText}: " . ($this->model->task->title ?? '');
    }
}