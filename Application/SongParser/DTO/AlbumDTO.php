<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class AlbumDTO
{
    public function __construct(
        public string $name,
        public \DateTimeImmutable $releaseDate,
        public ?string $cover,
        public AlbumSourceDTO $source,
        public SimpleArtistDTO $artist
    ) {
    }
}