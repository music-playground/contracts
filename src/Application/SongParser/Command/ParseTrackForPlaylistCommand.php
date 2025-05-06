<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\PartialTrackDTO;

final readonly class ParseTrackForPlaylistCommand implements CommandWithIdInterface
{
    public function __construct(
        public string $operationId,
        public string $playlistId,
        public string $albumId,
        public PartialTrackDTO $track
    ) {
    }

    public function getId(): string
    {
        return $this->track->source->id;
    }
}