<?php

namespace FitnessApi\Tests\Acceptance\User;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use PHPUnit\Framework\Assert;
use Symfony\Component\HttpClient\HttpClient;

class UserContext implements Context
{
    private $httpClient;
    private $response;

    public function __construct()
    {
        $this->httpClient = HttpClient::create();
    }

    /**
     * @Given I have a user name :name
     */
    public function iHaveAUserName($name)
    {
        // No es necesario hacer nada aquí
    }

    /**
     * @When I send a POST request to :url with body:
     */
    public function iSendAPostRequestToWithBody($url, PyStringNode $body)
    {
        $this->response = $this->httpClient->request('POST', $url, [
            'body' => $body->getRaw(),
        ]);
    }

    /**
     * @Then the response status code should be :statusCode
     */
    public function theResponseStatusCodeShouldBe($statusCode)
    {
        Assert::assertEquals($statusCode, $this->response->getStatusCode());
    }

    /**
     * @Then the response should contain JSON:
     */
    public function theResponseShouldContainJson(PyStringNode $json)
    {
        $responseData = json_decode($this->response->getBody()->getContents(), true);
        $expectedData = json_decode($json->getRaw(), true);
        Assert::assertEquals($expectedData, $responseData);
    }
}
