<?php
class Client
{
    private ?int $id = null;
    private ?string $lastName = null;
    private ?string $firstName = null;
    private ?string $address = null;
    private ?string $dob = null;
    private ?string $password = null;
    private ?string $Role= null;

    public function __construct($id = null, $n, $p, $a, $d, $password, $R)
    {
        $this->id = $id;
        $this->lastName = $n;
        $this->firstName = $p;
        $this->address = $a;
        $this->dob = $d;
        $this->password = $password;
        $this->Role= $R;
    }

    /**
     * Get the value of idClient
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function setpassword($password)
    {
        $this->password= $password;
        return $this;
    }
    public function getRole()
    {
        return $this->Role;
    }
    public function setRole($Role)
    {
        $this->Role= $Role;
        return $this;
    }
}
