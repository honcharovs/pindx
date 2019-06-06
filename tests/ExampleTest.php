<?php
/**
 * Copyright 2018 Alexey Kopytko <alexey@kopytko.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace Tests\PIndxTools;

use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
class ExampleTest extends TestCase
{
    public function testExample()
    {
        // These variables will be set inside example.php
        $office = null;
        $postalCodeValid = false;

        ob_start();
        include 'example.php';
        ob_end_clean();

        $this->assertSame(130980, $office->getIndex());
        $this->assertTrue($postalCodeValid);
    }
}
