<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;

final readonly class OnUpdateTrackCommand implements CommandWithIdInterface
{
    public function __construct(
        public string $id,
        public string $name,
        public string $albumId
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }
}