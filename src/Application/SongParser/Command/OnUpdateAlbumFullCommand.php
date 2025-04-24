<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\SongParser\DTO\FullAlbumDTO;

final class OnUpdateAlbumFullCommand
{
    public function __construct(FullAlbumDTO $album) {
    }
}