<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final class PreviewArtistDTO
{
    public function __construct(
        public ?string $id,
        public string $name,
        public ArtistSourceDTO $source,
        public ?string $avatarId
    ) {
    }
}