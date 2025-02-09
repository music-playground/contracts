<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class TrackDTO
{
    public function __construct(
        public string $fileId,
        public string $name,
        public SimpleArtistDTO $artist,
        public TrackSourceDTO $source,
        public AlbumSourceDTO $album
    ) {
    }
}