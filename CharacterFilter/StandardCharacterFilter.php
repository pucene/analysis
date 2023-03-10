<?php

/*
 * This file is part of Pucene.
 *
 * (c) asapo.at
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Pucene\Analysis\CharacterFilter;

class StandardCharacterFilter implements CharacterFilterInterface
{
    public function filter(string $input): string
    {
        return $input;
    }
}
