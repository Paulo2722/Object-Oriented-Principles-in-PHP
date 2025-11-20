<?php

class Subscription{
    public function __construct(
        protected BillingPortal $billingPortal
    ){
    }
    protected function create(){
        $this->billingPortal->getCustomer();
    }

    public function cancel(){
    
    }
    public function swap(string $newPlan){
    
    }
    
    public function invoice(){
    
    }
}

interface BillingPortal{
    public function getCustomer();
    public function getSubscription();
}

class StripeBillingPortal implements BillingPortal{
    public function getCustomer(){
        //TODO: Implement getCustomer() method.
    }

    public function getSubscription(){
        //TODO: Implement getSubscription() method.
    }
}

$subscription = new Subscription(
    new StripeBillingPortal()
);

$subscription->create();