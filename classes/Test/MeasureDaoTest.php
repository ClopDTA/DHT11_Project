<?php
namespace Test;
include 'autoload.inc.php';
use PHPUnit\Framework\TestCase;
use Dao\daoMeasure;

class MeasureDaoTest extends TestCase {
    
    
    /**
     *
     * @var UserDao
     */
    private $UserDao;
    
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        
        // TODO Auto-generated UserDaoTest::setUp()
        $config = include '../../inc/config.inc.php';
        
        $this->daoMeasure = new daoMeasure($config);
    }
    
    protected function tearDown()
    {
        $this->daoMeasure = null;
    }
    
    public function testInsertMeasure()
    {
        
    }
    
}