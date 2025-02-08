<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class SimpleArtistDTO
{
    public function __construct(
        public string $name,
        public ArtistSourceDTO $source
    ) {
    }
}