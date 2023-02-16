<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $school=array(
            'Student'=>array(
                    '123'=>array(
                        'name'=>'Nguyễn Văn A',
                        'gender'=>'M',
                        'birth'=>'02/09/2003'
                    ),
                    '345'=>array(
                        'name'=>'Nguyễn Văn B',
                        'gender'=>'M',
                        'birth'=>'05/07/2003'
                    ),
                    '567'=>array(
                        'name'=>'Nguyễn Văn C',
                        'gender'=>'M',
                        'birth'=>'07/12/2003'
                    ),
                    '789'=>array(
                        'name'=>'Nguyễn Văn D',
                        'gender'=>'M',
                        'birth'=>'28/01/2003'
                    )

                    ),

            'Teacher'=>array(
                '321'=>array(
                    'name'=>'Nguyễn Tú A',
                    'gender'=>'M',
                    'birth'=>'02/09/2003'
                ),
                '543'=>array(
                    'name'=>'Nguyễn Tú B',
                    'gender'=>'M',
                    'birth'=>'05/07/2003'
                ),
                '765'=>array(
                    'name'=>'Nguyễn Tú C',
                    'gender'=>'M',
                    'birth'=>'07/12/2003'
                ),
                '987'=>array(
                    'name'=>'Nguyễn Tú D',
                    'gender'=>'M',
                    'birth'=>'28/01/2003'
                )

        )
        )
    
    
    ?>

    <div id="content">
        <?php 
            foreach($school as $k => $v){
            ?>
                <h1 class="list_title"> <?php echo  $k ?> </h1>
                <ul>
                  <?php foreach($v as $k1=>$v1) {
                    ?>
                    <li>
                        <p><span>MaDD:</span><?php echo $k1  ?></p>
                        <p><span>Name:</span><?php echo $v1['name'] ?></p>
                        <p><span>Gender:</span><?php echo $v1['gender']  ?></p>
                        <p><span>Birth:</span><?php echo $v1['birth']  ?></p>
                    </li>
                    <?php }
                    ?>
                </ul>
                <?php
            }
            ?>
           
    </div>
</body>
</html>