<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final readonly class FullAlbumDTO
{
    public function __construct(
        public string $id,
        public string $name,
        /** @var string[] */
        public array $genres,
        public string $cover,
        /** @var PreviewArtistDTO[] */
        public array $artists
    ) {
    }
}