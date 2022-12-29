<?php

/**
 * This file is part of mazarini/skeleton-bundle.
 *
 * mazarini/skeleton-bundle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * mazarini/skeleton-bundle is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
 * for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with mazarini/skeleton-bundle. If not, see <https://www.gnu.org/licenses/>.
 *
 * @package Mazarini/SkeletonBundle
 */

namespace Mazarini\SkeletonBundle\Tests;

use Mazarini\SkeletonBundle\Dummy;
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    public function testSomething(): void
    {
        $dummy = new Dummy();
        $this->assertSame(Dummy::class, (string) $dummy);
    }
}
