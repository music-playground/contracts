<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class TrackDTO
{
    public function __construct(
        public string $fileId,
        public string $name,
        public string $albumId,
        /** @var SimpleArtistDTO[] */
        public array $simpleArtists,
        public TrackSourceDTO $source
    ) {
    }
}