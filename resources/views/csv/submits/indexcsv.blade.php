<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>


<div class="container">
  {{$filename='ftp/AN20030600-logger1-2020-11-19T00-00-00+0700-1min-backup.csv'}}
  {{-- @if(auth()->user()->role == 'admin')
    <a href="{{url('/products/create')}}" class="btn btn-success my-2">Add Products</a>
    <a href="{{url('/brand')}}" class="btn btn-success my-2 ml-2">Brand</a>
    <a href="{{url('/procategorie')}}" class="btn btn-success my-2 ml-2">Categories</a>
  @endif --}}
</div>

<?php


// The nested array to hold all the arrays
$the_big_array = []; 

// Open the file for reading
if (($h = fopen("{$filename}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($data = fgetcsv($h, 10000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $the_big_array[] = $data;		
  }

  // Close the file
  fclose($h);
}

// Display the code in a readable format

?>
<div>
    <table>
    
    </table>
</div>
<?php
$build = '<table><tbody>';
foreach($the_big_array as $row)
{
$build .= '<tr>';
foreach($row as $item)
{
$build .= "<td>{$item}</td>";
}
$build .= '</tr>';
}
$build .= '</tbody></table>';

echo $build;

?>
<!-- echo "<pre>";
var_dump($the_big_array);
echo "</pre>"; -->
  
</body>
</html>



