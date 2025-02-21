<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/extended-acf
 */

declare(strict_types=1);

namespace Extended\ACF\Tests\Fields;

use Extended\ACF\Fields\Relationship;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class RelationshipTest extends TestCase
{
    public function testType()
    {
        $field = Relationship::make('Relationship')->get();
        $this->assertSame('relationship', $field['type']);
    }

    public function testPostStatus()
    {
        $field = Relationship::make('Relationship Post Status')->postStatus(['publish'])->get();
        $this->assertSame(['publish'], $field['post_status']);

        $this->expectException(InvalidArgumentException::class);
        Relationship::make('Relationship Invalid Post Status')->postStatus(['invalid'])->get();
    }

    public function testElements()
    {
        $field = Relationship::make('Relationship Elements')->elements(['featured_image'])->get();
        $this->assertSame(['featured_image'], $field['elements']);
    }

    public function testFilters()
    {
        $field = Relationship::make('Relationship Filters')->filters(['search'])->get();
        $this->assertSame(['search'], $field['filters']);
    }
}
