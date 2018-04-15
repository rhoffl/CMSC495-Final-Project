<?php
Class Customer {
    
    protected $custId;
    protected $name;
    protected $password;
    
    public static $number_of_customers = 1;
    
    function __construct(){
        $this->custId = rand(100,1000000);
     }
    
    function getCustId(){ return $this->custId; }
    function getName(){ return $this->name; }
    function getPassword(){ return $this->password; }
    
    function setCustId($custId, $value) {$this->custId= $value; }
    function setName($name, $value) {$this->name= $value; }    
    function setPassword($password, $value) {$this->password= $value; }
 
 function insertCust($custid )
 {
     
 }
    
    }  
    
Class Items {
    protected $itemId;
    protected $name;
    protected $price;
    protected $catId;
    
    function __construct(){
         $this->itemId = rand(100,1000000);
    }
    
    function getItemId(){ return $this->itemId; }
    function getName(){ return $this->name; }
    function getPrice(){ return $this->price; }
    function getPriceCatId(){ return $this->catId; }
    
    function setItemId($itemId, $value) {$this->itemId = $value; }
    function setName($name, $value) {$this->name= $value; }    
    function setPrice($price, $value) {$this->price= $value; }
    function setPriceCatId($catId, $value) {$this->catId= $value; }
  
    
}

Class Categories {
    protected $catId;
    protected $name;
    
    function __construct(){
         $this->catId = rand(100,1000000);
    }
    
    function getCatId(){ return $this->catId; }
    function getName(){ return $this->name; }
    
    function setCatId($catId, $value) {$this->catId = $value; }
    function setName($name, $value) {$this->name= $value; }    
        
}

Class Orders {
    protected $orderId;
    protected $ItemId;
    protected $price;
    
    function __construct(){
         $this->orderId = rand(100,1000000);
    }
    
    function getOrderId(){ return $this->orderId; }
    function getOrderItemId(){ return $this->orderItemId; }
    function getOrderPrice(){ return $this->price; }
    
    function setOrderId($orderId, $value) {$this->orderId= $value; }
    function setItemId($ItemId, $value) {$this->ItemId= $value; }    
    function setPassword($price, $value) {$this->price = $value; }
    
    
}

Class Payments{ 
    
    protected $payId;
    protected $custId;
    protected $itemId;
    protected $catID;
    protected $tot_price;
    
    function getPayId(){ return $this->payId; }
    function getCustId(){ return $this->custId; }
    function getItemId(){ return $this->itemId; }
    function getCatId() { return $this->catId; }
    function getTotPrice(){ return $this->tot_pirce; }
    
    
    function setPayId($payId, $value){$this->payId=$value;}
    function setCustId($custId, $value){$this->custId=$value;}
    function setItemId($ItemId, $value){$this->ItemId=$value;}
    function setCatId($catId, $value){$this->catId=$value;}
    function setTotPrice($tot_price, $value){$this->tot_price=$value;}
    
}

Class Feedback{
    
    
    protected $feedId;
    protected $custid;
    protected $message;
    
    function getFeedId(){ return $this->feedId; }
    function getCustId(){ return $this->custId; }
    function getMessageId(){ return $this->message; }
    
    function setFeedId($payId, $value){$this->feedId=$value;}
    function setCustId($custId, $value){$this->custId=$value;}
    function setMessage($messageId, $value){$this->message=$value;}
    
    
}

Class Account_Information{
    
    protected $acctId;
    protected $custId;
    protected $address;
    protected $city;
    protected $state;
    protected $cellNo;
    protected $workNo;
    
    function getAcctId(){ return $this->acctId; }
    function getCustId(){ return $this->custId; }
    function getAddress(){ return $this->address; }
    function getCity(){ return $this->city; }
    function getState(){ return $this->state; }
    function getCellNo(){ return $this->cellNo; }
    function getWorkNo(){ return $this->WorkNo; }
         
    function setAcctId($acctId, $value){$this->acctId=$value;}
    function setCustId($custId, $value){$this->custId=$value;}
    function setAddress($address, $value){$this->address=$value;}
    function setCityId($city, $value){$this->city=$value;}
    function setState($state, $value){$this->state=$value;}
    function setCellNo($cellNo, $value){$this->cellNo=$value;}
    function setWorkNo($workNo, $value){$this->workNo=$value;}
    
    
    
    
    
    
    
}

$customer = new Customer();
$item = new Items();
$category = new Categories();
$order = new Orders();
$payment = new Payments();
$feedback = new Feedback();
$accountInformation = new Account_Information();

//$customer->name="Ralph Jones";
$name = "Customer";
$customer->setName($name, "Ralph Jones");


//
//$item->name="Candy";
echo $customer->getName() . " is my name " ; //. $item->name . " is what I bought ";
 

?>

