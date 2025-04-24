<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\FullAlbumDTO;

final class OnUpdateAlbumFullCommand implements CommandWithIdInterface
{
    public function __construct(public FullAlbumDTO $album) {
    }

    public function getId(): string
    {
        return $this->album->id;
    }
}