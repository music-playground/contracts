<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

final readonly class OnUpdateTrackCommand
{
    public function __construct(
        public string $id,
        public string $name,
        public string $albumId
    ) {
    }
}