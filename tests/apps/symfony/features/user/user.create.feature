@user.create
Feature: Create a new user

  Scenario: Check the user post its ok
    Given I send a POST request to "/user" with body:
    """
    {
      "id": "99d5459f-ddef-4f79-8f6f-7d3faaa66799",
      "username": "alex.icasuriaga@gmail.com",
      "password": "123"
    }
    """
    Then the response status code should be 201
    And the response should be empty
