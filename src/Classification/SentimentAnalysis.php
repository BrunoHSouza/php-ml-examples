<?php
namespace PhpmlExercise\Classification;
use Phpml\Classification\NaiveBayes;

/**
 * Class SentimentAnalysis
 * @package PhpmlExercise\Classification
 */
class SentimentAnalysis {
    protected $classifier;

    public function __construct()
    {
        $this->classifier = new NaiveBayes();
    }

    public function train($samples, $labels)
    {
        $this->classifier->train($samples, $labels);
    }

    public function predict($samples)
    {
        return $this->classifier->predict($samples);
    }
}