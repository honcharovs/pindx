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

namespace RussianPostIndex\ByCity\City420;

/**
 * @internal
 */
final class Office420315 implements \RussianPostIndex\Record
{
    use \RussianPostIndex\Util\RecordTrait;

    private $Index = 420315;
    private $OPSName = 'КАЗАНСКИЙ ЛПЦ ММПО ЦЕХ EMS';
    private $OPSType = 'Цех';
    private $OPSSubm = 420310;
    private $Region = 'ТАТАРСТАН РЕСПУБЛИКА';
    private $Autonom = '';
    private $Area = 'ЛАИШЕВСКИЙ РАЙОН';
    private $City = 'СТОЛБИЩЕ';
    private $City1 = '';
    private $ActDate = '20180427';
    private $IndexOld = '';
}
