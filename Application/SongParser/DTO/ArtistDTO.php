<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class ArtistDTO
{
    public function __construct(
        public string $name,
        public ?string $avatarUrl,
        public ArtistSourceDTO $source,
        public array $genres
    ) {
    }
}