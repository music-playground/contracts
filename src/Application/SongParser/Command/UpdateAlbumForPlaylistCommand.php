<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\AlbumDTO;
use MusicPlayground\Contract\Application\SongParser\DTO\PartialTrackDTO;

final readonly class UpdateAlbumForPlaylistCommand implements CommandWithIdInterface
{
    public function __construct(
        public string $operationId,
        public string $playlistId,
        public AlbumDTO $album,
        public PartialTrackDTO $track
    ) {
    }

    public function getId(): string
    {
        return $this->album->source->id;
    }
}