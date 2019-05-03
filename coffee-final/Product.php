
<?php

class Product
{

    public $productArray = array(
        "001" => array(
            'id' => '1',
            'name' => 'Caramel Machiatto (C)',
            'code' => '001',
            'image' => 'images/coffee1.jpg',
            'price' => '1.70'
        ),
        "002" => array(
            'id' => '2',
            'name' => 'Caffe Latte (C) ',
            'code' => '002',
            'image' => 'images/coffee2.jpg',
            'price' => '1.48'
        ),
        "003" => array(
            'id' => '3',
            'name' => 'Cappucino (C) ',
            'code' => '003',
            'image' => 'images/coffee5.jpg',
            'price' => '1.48'
        ),
		
		 "004" => array(
            'id' => '4',
            'name' => 'Asian Dolce Latte (C) ',
            'code' => '004',
            'image' => 'images/coffee7.jpg',
            'price' => '1.62'
        ),
		
		"005" => array(
            'id' => '5',
            'name' => 'COLD BREWED ICED TEA  (T) ',
            'code' => '005',
            'image' => 'images/tea3.jpg',
            'price' => '1.41'
        ),
		"006" => array(
            'id' => '6',
            'name' => 'OOLONG MILK TEA  (T) ',
            'code' => '006',
            'image' => 'images/tea4.jpg',
            'price' => '1.55'
        ),
		"007" => array(
            'id' => '7',
            'name' => 'MATCHA LATTE (T) ',
            'code' => '007',
            'image' => 'images/tea1.jpg',
            'price' => '1.62'
        ),
			"008" => array(
            'id' => '8',
            'name' => 'HOKKAIDO PEARL MILK TEA  (T) ',
            'code' => '008',
            'image' => 'images/tea5.jpg',
            'price' => '1.55'
        ),
		
		
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
