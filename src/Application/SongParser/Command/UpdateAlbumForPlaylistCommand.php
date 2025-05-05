<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\AlbumDTO;
use MusicPlayground\Contract\Application\SongParser\DTO\TrackDTO;

final readonly class UpdateAlbumForPlaylistCommand implements CommandWithIdInterface
{
    public function __construct(
        public string $operationId,
        public AlbumDTO $album,
        public TrackDTO $track
    ) {
    }

    public function getId(): string
    {
        return $this->album->source->id;
    }
}