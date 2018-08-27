<?php
/*
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

namespace RussianPostIndex\ByCity\City140;

class Office140130 implements \RussianPostIndex\Record
{
    use \RussianPostIndex\Util\RecordTrait;

    private $Index = 140130;
    private $OPSName = 'КРАТОВО';
    private $OPSType = 'О';
    private $OPSSubm = 140079;
    private $Region = 'МОСКОВСКАЯ ОБЛАСТЬ';
    private $Autonom = '';
    private $Area = 'РАМЕНСКИЙ РАЙОН';
    private $City = 'КРАТОВО';
    private $City1 = '';
    private $ActDate = '20100721';
    private $IndexOld = '';
}