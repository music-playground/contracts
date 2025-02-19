<?php

namespace MusicPlayground\Contract\Application\Command;

interface CommandWithIdInterface
{
    public function getId(): string;
}