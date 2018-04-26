<?php

/**
 * contact.php
 * 
 * contact class file
 * @version 1.2 2018-04-19
 * @package smithsideAuction
 * 
 */
?>
<?php

// put your code here
class AboutUs {

    private $contactList;
    private $title;

    function __construct($title) {
        $this->contactList = array();
        $this->title = $title;
    }

    function addContact($contact) {
        array_push($this->contactList, $contact);
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

class ContactInfo {

    private $firstName;
    private $lastName;
    private $email;
    private $cellPhone;
    private $position;
/**
* Initialize the Contact with first name,last name,position
* email,and phone
* @param array
*/
    function __construct($input = false) {
		
		if(is_array($input)){
			foreach($input as $key=>$val){
				//Note the $key instead of key.
				//This will give the value in $key instead of 'key' itself
				$this->$key=$val;
			}
		}
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->cellPhone = $cellPhone;
        $this->position = $position;
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

    /**
     * contact_name function concatenates the first and the last names
     * @return string
     */
    function contactName(){
        $contact_name = $this->firstName.' '.$this->lastName;
        return $contact_name;
    }
}
?>

