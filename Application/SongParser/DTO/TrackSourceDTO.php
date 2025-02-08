<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class TrackSourceDTO
{
    public function __construct(
        public string $name,
        public string $id
    ) {
    }
}