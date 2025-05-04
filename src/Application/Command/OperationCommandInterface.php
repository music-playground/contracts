<?php

namespace MusicPlayground\Contract\Application\Command;

interface OperationCommandInterface
{
    public function getOperationId(): string;
}