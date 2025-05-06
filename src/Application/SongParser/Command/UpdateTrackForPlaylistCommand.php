<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\SongParser\DTO\TrackDTO;

final readonly class UpdateTrackForPlaylistCommand
{
    public function __construct(
        public string $operationId,
        public string $playlistId,
        public TrackDTO $track
    ) {
    }
}