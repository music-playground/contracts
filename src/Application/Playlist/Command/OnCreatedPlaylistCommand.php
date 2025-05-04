<?php

namespace MusicPlayground\Contract\Application\Playlist\Command;

use MusicPlayground\Contract\Application\Playlist\DTO\PlaylistSourceDTO;

final readonly class OnCreatedPlaylistCommand
{
    public function __construct(
        public string $id,
        public PlaylistSourceDTO $source
    ) {
    }
}