<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 29/10/2017
 * Time: 20:17
 */
include "../init.php";
class UpdatePhoneController extends AddPhoneController{
    private $id_to_update;

    public function setIdToUpdate($id_to_update)
    {
        $this->id_to_update = $id_to_update;
    }

    public function getIdToUpdate()
    {
        return $this->id_to_update;
    }
}

if(isset($_POST['updatePhone'])){
    $server = new Server();
    $connection = $server->connect();
    $updatePhone = new UpdatePhoneController();

    $updatePhone->setIdToUpdate($_POST['id_to_update']);
    $updatePhone->setAmountCharged($_POST['amount_charged']);
    $updatePhone->setAmountPaid($_POST['amount_paid']);
    $updatePhone->setContact($_POST['contact']);
    $updatePhone->setCustomerName($_POST['customer_name']);
    $updatePhone->setDate($_POST['date']);
    $updatePhone->setPhoneModel($_POST['phone_model']);
    $updatePhone->setPhoneFault($_POST['phone_fault']);

    $id_to_update = $updatePhone->getIdToUpdate();
    $amount_charged = $updatePhone->getAmountCharged();
    $amount_paid = $updatePhone->getAmountPaid();
    $contact = $updatePhone->getContact();
    $customer_name = $updatePhone->getCustomerName();
    $dates = $updatePhone->getDate();
    $phone_model = $updatePhone->getPhoneModel();
    $phone_fault = $updatePhone->getPhoneFault();

    $query = "UPDATE records(customer_name, phone_model, phone_fault, amount_charged, amount_paid, dates, contact)
VALUES('$customer_name', '$phone_model', '$phone_fault', '$amount_charged', '$amount_paid', '$dates', '$contact')";
    $query = "UPDATE records SET
                customer_name = '$customer_name',
                phone_model = '$phone_model',
                phone_fault = '$phone_fault',
                amount_charged = '$amount_charged',
                amount_paid = '$amount_paid',
                dates = '$dates',
                contact = '$contact'
                WHERE id = '$id_to_update'
              ";
    $output = DbOperations::insert($connection , $query);
    if($output){
        print("Record Updated Successfully");
    }else{
        print $connection->error;
    }

}
?>