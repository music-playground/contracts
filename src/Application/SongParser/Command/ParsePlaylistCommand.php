<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;

final readonly class ParsePlaylistCommand implements CommandWithIdInterface
{
    public function __construct(
        public string $playlistId
    ) {
    }

    public function getId(): string
    {
        return $this->playlistId;
    }
}