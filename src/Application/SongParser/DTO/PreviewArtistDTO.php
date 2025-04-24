<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final class PreviewArtistDTO
{
    public function __construct(
        public string $name,
        public string $avatar
    ) {
    }
}