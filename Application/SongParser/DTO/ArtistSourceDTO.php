<?php

namespace Contract\Application\DTO;

final readonly class ArtistSourceDTO
{
    public function __construct(
        public string $name,
        public string $id
    ) {
    }
}