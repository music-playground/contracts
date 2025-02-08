<?php

namespace Contract\Application\Command;

interface CommandWithIdInterface
{
    public function getId(): string;
}