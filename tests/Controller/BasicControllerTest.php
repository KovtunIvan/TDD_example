<?php
namespace App\Tests\Controller;

use App\Controller\BasicController;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

class BasicControllerTest extends TestCase
{
    /**
     * @var BasicController
     */
    public $basicController;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->basicController = new BasicController();
        parent::__construct($name, $data, $dataName);
    }

    /**
     * Ответ метода print
     */
    public function testPrintResponse()
    {
        $this->assertTrue($this->basicController->print() instanceof Response);
    }

    /**
     * Метод print возвращает строку
     */
    public function testPrintResponseString()
    {
        $this->assertTrue(is_string($this->basicController->print()->getContent()));
    }

}