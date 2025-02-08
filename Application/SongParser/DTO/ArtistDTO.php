<?php

namespace MusicPlayground\Contract\Application\DTO;

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