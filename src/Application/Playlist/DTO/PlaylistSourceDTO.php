<?php

namespace MusicPlayground\Contract\Application\Playlist\DTO;

class PlaylistSourceDTO
{
    public function __construct(
        public string $id,
        public string $name
    ) {
    }
}