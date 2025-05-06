<?php

namespace MusicPlayground\Contract\Application\SongParser\DTO;

final class PartialTrackDTO
{
    public function __construct(
        public string $name,
        /** @var SimpleArtistDTO[] */
        public array $artists,
        public TrackSourceDTO $source
    ) {
    }
}