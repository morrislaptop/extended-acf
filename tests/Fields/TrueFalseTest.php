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

use Extended\ACF\Fields\TrueFalse;
use PHPUnit\Framework\TestCase;

class TrueFalseTest extends TestCase
{
    public function testType()
    {
        $field = TrueFalse::make('True False')->get();
        $this->assertSame('true_false', $field['type']);
    }

    public function testStylisedUi()
    {
        $field = TrueFalse::make('UI')->stylisedUi('Wax on', 'Wax off')->get();
        $this->assertTrue($field['ui']);
        $this->assertEquals($field['ui_on_text'], 'Wax on');
        $this->assertEquals($field['ui_off_text'], 'Wax off');
    }
}
