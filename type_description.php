<?php
    $type_id = $_POST['type'];
    //database operation

    if ( $type_id == 1){
        $select = array(
            'img1' => 'images/1.jpg',
            'img2' => 'images/4.jpg',
            'img3' => 'images/3.jpg',
            'style' => 'style',
            'scene' => 'scene',
            'age' => 'age',
            'shape' => 'shape',
            'color' => 'color',
            'cloth' => 'cloth',
            'hairstyle' => 'hair style',
            'jewelry' => 'jewelry'
        );
    }
    else {
        $select = array(
            'img1' => 'images/1.jpg',
            'img2' => 'images/2.jpg',
            'img3' => 'images/3.jpg',
            'style' => 'xxx',
            'scene' => 'xxx',
            'age' => 'xxx',
            'shape' => 'xxx',
            'color' => 'xxx',
            'cloth' => 'xxx',
            'hairstyle' => 'xxx',
            'jewelry' => 'xxx'
        );
    }
    
    echo json_encode($select);