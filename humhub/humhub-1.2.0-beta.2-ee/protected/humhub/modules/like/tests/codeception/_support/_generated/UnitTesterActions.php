<?php  //[STAMP] e93907d5924b39a3cd4134cc6a6ea3a3
namespace like\_generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

use tests\codeception\_support\CodeHelper;

trait UnitTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \tests\codeception\_support\CodeHelper::assertContainsError()
     */
    public function assertContainsError($model, $message) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertContainsError', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \tests\codeception\_support\CodeHelper::assertNotContainsError()
     */
    public function assertNotContainsError($model, $message) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotContainsError', func_get_args()));
    }
}
