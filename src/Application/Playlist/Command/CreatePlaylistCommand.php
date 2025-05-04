<?php

namespace MusicPlayground\Contract\Application\Playlist\Command;

use MusicPlayground\Contract\Application\Playlist\DTO\PlaylistDTO;

final readonly class CreatePlaylistCommand
{
    public function __construct(public PlaylistDTO $playlist)
    {
    }
}