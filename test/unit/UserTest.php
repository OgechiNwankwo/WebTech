<?php

require('./classes/product_post.php');

class UserTest extends \PHPUnit\Framework\TestCase 
{

    public function test() 
    {
        $crud = new classes\Post;

        $result = $crud->addProduct('Sodium Chloride','ndnfdjfndjfgvjdgffjhgvfjgjfgh','35','It is a good chemicals','30');

        $this->assertEquals($result, true);
    }
    
    public function getallproducts()
    {
        $crud = new classes\Post;

        $result = $crud->getallproducts();

        !$this->assertCount($result, 0);
    }


}

?>