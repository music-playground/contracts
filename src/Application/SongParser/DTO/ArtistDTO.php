<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class ArtistDTO
{
    public function __construct(
        public string $name,
        public ?string $avatarId,
        public ArtistSourceDTO $source,
        public array $genres
    ) {
    }
}