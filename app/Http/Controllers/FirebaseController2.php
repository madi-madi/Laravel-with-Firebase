<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;



class FirebaseController2 extends Controller
{
    //
    public function index(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravel6-94e18-firebase-adminsdk-op5mw-3ed8810bee.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://laravel6-94e18.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('blog/posts');
   $key =  $ref->push()->getKey();     
  $new =  $ref->getChild($key)->set([

   	'title'=>"forsan Technology ..,,,",
   	'name'=>"Forsan Ibrahim S. Madi"
   ]);

  return $new->getvalue();


    }
}
