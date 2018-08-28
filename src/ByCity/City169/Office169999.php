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

namespace RussianPostIndex\ByCity\City169;

/**
 * @internal
 */
final class Office169999 implements \RussianPostIndex\Record
{
    use \RussianPostIndex\Util\RecordTrait;

    private $Index = 169999;
    private $OPSName = 'ВОРКУТА ПОЧТАМТ';
    private $OPSType = 'П';
    private $OPSSubm = 167700;
    private $Region = 'КОМИ РЕСПУБЛИКА';
    private $Autonom = '';
    private $Area = 'ВОРКУТИНСКИЙ РАЙОН';
    private $City = 'ВОРКУТА';
    private $City1 = '';
    private $ActDate = '20080114';
    private $IndexOld = '';
}
