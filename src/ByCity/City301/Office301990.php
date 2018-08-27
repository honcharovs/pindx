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

namespace RussianPostIndex\ByCity\City301;

class Office301990 implements \RussianPostIndex\Record
{
    use \RussianPostIndex\Util\RecordTrait;

    private $Index = 301990;
    private $OPSName = 'АРХАНГЕЛЬСКОЕ';
    private $OPSType = 'О';
    private $OPSSubm = 301859;
    private $Region = 'ТУЛЬСКАЯ ОБЛАСТЬ';
    private $Autonom = '';
    private $Area = 'КАМЕНСКИЙ РАЙОН';
    private $City = 'АРХАНГЕЛЬСКОЕ';
    private $City1 = '';
    private $ActDate = '20020701';
    private $IndexOld = '';
}