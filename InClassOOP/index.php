<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        class AboutUs{
            private  $contactList;
            private  $title;
            function __construct( $title) {
                $this->contactList = array();
                $this->title = $title;
            }
            function addContact($contact){
                array_push($this->contactList,$contact);
            }
            function getContactList() {
                return $this->contactList;
            }

            function getTitle() {
                return $this->title;
            }

            function setContactList($contactList) {
                $this->contactList = $contactList;
            }

            function setTitle($title) {
                $this->title = $title;
            }

        }
        class ContactInfo{
            private  $firstName;
            private  $lastName;
            private  $email;
            private  $cellPhone;
           
            function __construct($firstName, $lastName, $email, $cellPhone) {
                $this->firstName = $firstName;
                $this->lastName = $lastName;
                $this->email = $email;
                $this->cellPhone = $cellPhone;
            }
            function getFirstName() {
                return $this->firstName;
            }

            function getLastName() {
                return $this->lastName;
            }

            function getEmail() {
                return $this->email;
            }

            function getCellPhone() {
                return $this->cellPhone;
            }

            function setFirstName($firstName) {
                $this->firstName = $firstName;
            }

            function setLastName($lastName) {
                $this->lastName = $lastName;
            }

            function setEmail($email) {
                $this->email = $email;
            }

            function setCellPhone($cellPhone) {
                $this->cellPhone = $cellPhone;
            }

                }
        ?>
    </body>
</html>
