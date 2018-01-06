<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 28/10/2017
 * Time: 11:57
 */
include "../init.php";
class AddPhoneController{

    private $customer_name;
    private $phone_model;
    private $phone_fault;
    private $amount_charged;
    private $amount_paid;
    private $date;
    private $contact;

    public function getAmountCharged()
    {
        return $this->amount_charged;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function getAmountPaid()
    {
        return $this->amount_paid;
    }

    public function getCustomerName()
    {
        return $this->customer_name;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getPhoneFault()
    {
        return $this->phone_fault;
    }

    public function getPhoneModel()
    {
        return $this->phone_model;
    }

    public function setAmountCharged($amount_charged)
    {
        $this->amount_charged = $amount_charged;
    }

    public function setAmountPaid($amount_paid)
    {
        $this->amount_paid = $amount_paid;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setPhoneFault($phone_fault)
    {
        $this->phone_fault = $phone_fault;
    }

    public function setPhoneModel($phone_model)
    {
        $this->phone_model = $phone_model;
    }

}

if(isset($_POST['addPhone'])){
    $server = new Server();
    $connection = $server->connect();
    $addPhone = new AddPhoneController();

    $addPhone->setAmountCharged($_POST['amount_charged']);
    $addPhone->setAmountPaid($_POST['amount_paid']);
    $addPhone->setContact($_POST['contact']);
    $addPhone->setCustomerName($_POST['customer_name']);
    $addPhone->setDate($_POST['date']);
    $addPhone->setPhoneModel($_POST['phone_model']);
    $addPhone->setPhoneFault($_POST['phone_fault']);

    $amount_charged = $addPhone->getAmountCharged();
    $amount_paid = $addPhone->getAmountPaid();
    $contact = $addPhone->getContact();
    $customer_name = $addPhone->getCustomerName();
    $dates = $addPhone->getDate();
    $phone_model = $addPhone->getPhoneModel();
    $phone_fault = $addPhone->getPhoneFault();

    $query = "INSERT INTO records(customer_name, phone_model, phone_fault, amount_charged, amount_paid, dates, contact)
VALUES('$customer_name', '$phone_model', '$phone_fault', '$amount_charged', '$amount_paid', '$dates', '$contact')";

    $output = DbOperations::insert($connection , $query);
    if($output){
        print("Record Added Successfully");
    }else{
        print $connection->error;
    }

}

?>