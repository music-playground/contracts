<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class ArtistSourceDTO
{
    public function __construct(
        public string $name,
        public string $id
    ) {
    }
}