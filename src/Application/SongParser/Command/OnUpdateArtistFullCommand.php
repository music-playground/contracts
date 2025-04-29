<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\SongParser\DTO\ArtistDTO;

final readonly class OnUpdateArtistFullCommand
{
    public function __construct(
        public ArtistDTO $artist,
        public array $containsAlbums
    ) {
    }
}