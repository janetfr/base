@user.login
Feature: Login a user
  Scenario: Check if the login user is ok
    Given I send a POST request to "/user" with body:
    """
    {
      "id": "99d5459f-ddef-4f79-8f6f-7d3faaa66799",
      "username": "alex.icasuriaga@gmail.com",
      "password": "123"
    }
    """
    Given I send a POST request to "/user/auth" with body:
    """
    {
      "username": "alex.icasuriaga@gmail.com",
      "password": "123"
    }
    """
    Then the response status code should be 200
    And the response content should be:
    """
    {
      "id": "99d5459f-ddef-4f79-8f6f-7d3faaa66799",
      "username": "alex.icasuriaga@gmail.com",
      "token": "821080e139a14345214c225013143aa406c6e938"
    }
    """
