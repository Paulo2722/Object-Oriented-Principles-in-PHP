<?php

class User{

}

class Newsletter{

    public function __construct(public NewsletterProvider $provider){
        //
    }

    public function subscribe(User $user){
        $this->provider->addToList('default', $user->email);

        //Update the user and mark them as suscribed
        $user->update(['subscribed' => true]);

        return true;
    }
}

interface NewsletterProvider{
    public function addToList(string $list, string $email): void;
}

class PostmarkProvider implements NewsletterProvider{
    public function addToList(string $list, string $email): void{
        //Interact with CompaignMonitor
        $cm = new PostmarkAPI('dabhubafbuab');

        $list = $cm->addToDefaultList($email);
    }
}

$newsletter = new Newsletter(
    new PostmarkProvider()
);

$newsletter->subscribe(new User);