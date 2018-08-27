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

namespace RussianPostIndex\ByCity\City130;

class Office130214 implements \RussianPostIndex\Record
{
    use \RussianPostIndex\Util\RecordTrait;

    private $Index = 130214;
    private $OPSName = 'МР ЛЦ ВНУКОВО ЦЕХ EMS УО';
    private $OPSType = 'Участок';
    private $OPSSubm = 130210;
    private $Region = 'МОСКВА';
    private $Autonom = '';
    private $Area = '';
    private $City = '';
    private $City1 = '';
    private $ActDate = '20180228';
    private $IndexOld = '';
}