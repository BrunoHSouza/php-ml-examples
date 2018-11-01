<?php
/**
 * Created by PhpStorm.
 * User: brunohsouza
 * Date: 28/09/18
 * Time: 14:45
 */

namespace PhpmlExercise\Sample;

use Phpml\Dataset\ArrayDataset;
use Phpml\Dataset\CsvDataset;
use tests\Phpml\Dataset\CsvDatasetTest;

class Sample extends CsvDataset
{
    protected $dataset;

    public function __construct()
    {
        $iris = parent::__construct('src/iris.csv', 4, true);
        var_dump($iris);die;
        $iris = readfile('src/iris.csv');
        $this->dataset = new ArrayDataset($iris);
    }

    public function getDataset()
    {
        var_dump($this->dataset);
    }

}




