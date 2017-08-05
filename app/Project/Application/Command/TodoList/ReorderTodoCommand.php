<?php
declare(strict_types=1);

namespace Teamo\Project\Application\Command\TodoList;

class ReorderTodoCommand
{
    private $projectId;
    private $todoListId;
    private $todoId;
    private $teamMemberId;
    private $position;

    public function __construct(string $projectId, string $todoListId, string $todoId, string $teamMemberId, int $position)
    {
        $this->projectId = $projectId;
        $this->todoListId = $todoListId;
        $this->todoId = $todoId;
        $this->teamMemberId = $teamMemberId;
        $this->position = $position;
    }

    public function projectId(): string
    {
        return $this->projectId;
    }

    public function todoListId(): string
    {
        return $this->todoListId;
    }

    public function todoId(): string
    {
        return $this->todoId;
    }

    public function teamMemberId(): string
    {
        return $this->teamMemberId;
    }

    public function position(): int
    {
        return $this->position;
    }
}
