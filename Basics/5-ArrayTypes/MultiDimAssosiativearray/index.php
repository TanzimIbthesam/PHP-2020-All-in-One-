<?php
$fruits = [
    "Jamal"=>[
        'id'=>1,
        'marks'=>50,
        'Course'=>'React101'
    ],
    "Kamal"=>[
        'id'=>2,
        'marks'=>40,
        'Course'=>'React101'
    ],
    "Rahim"=>[
        'id'=>3,
        'marks'=>40,
        'Course'=>'React101'
    ],

];
echo "<table border='2px'>";
echo "
    <tr>
       <th>Id</th>
       <th>Marks</th>
       <th>Course</th>
    </tr>
    ";
foreach ($fruits as $key => $value) {
   
   
//    echo $key,"<br>";
   foreach ($value as $valuetwo) {
    //    echo $valuetwo,"<br>";
    echo "
      <tr>
       
      <td>{$valuetwo}</td>
      
    </tr>
    ";
   }
    
}
echo "</table>";

