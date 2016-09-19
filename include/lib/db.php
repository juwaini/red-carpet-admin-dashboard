<?php
    ///////////////////////////////
    // Create a Mongo connection //
    /////////////////////////////// 
    $mongo = new MongoClient();

    /////////////////////////
    // Choose the database //
    /////////////////////////
    //option 1 to select database "redcarpet"
    //$redcarpet = $mongo->redcarpet; //    
    //option 2 to select database "redcarpet"
    $db = 'redcarpet';
    $redcarpet = $mongo->selectDB($db);

    ///////////////////////////
    // Choose the collection //
    ///////////////////////////
    //option 1 to select collection named "promo"
    //$promo = $redcarpet->promo; 
    //option 2 to select collection named "promo"
    //$collection = "promo";
    //$promo = new MongoCollection($redcarpet, $collection);

    ///////////////////////////////////////
    // Save a document to the collection //
    ///////////////////////////////////////
    //$collection->save(
    //array(
            //"name" => "Jack Sparrow",
            //"age" => 34,
            //"occupation" => "Pirate"
    //));

    /////////////////////////
    // Delete the document //
    ////////////////////////
    // $criteria = array('_id' => new MongoId('xxxx'));
    // $addresses->($criteria, array("justOne" => true));

    // ///////////////////////////////////////								 
    // Retrieve the document and display it //
    //////////////////////////////////////////
    //$item = $coll->findOne();
    //echo "Category:" . $item['category_id'] . ".";
    
    ////////////////////////////////
    // Retrieve ALL the documents //
    ////////////////////////////////
    //$item = $coll->find();
    
?>
