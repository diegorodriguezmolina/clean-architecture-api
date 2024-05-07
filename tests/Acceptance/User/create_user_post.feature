Feature: Create user endpoint
  In order to create a new user
  As a client
  I want to be able to send a POST request with a user's name and create the user

  Scenario: Create a new user with a valid name
    Given I have a user name "John Doe"
    When I send a POST request to "/user/create" with body:
      """
      {
        "name": "John Doe"
      }
      """
    Then the response status code should be 200
    And the response should contain JSON:
      """
      {
        "created":"ok"
      }
      """
