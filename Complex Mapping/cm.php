//In PHP Complex Mapping is known as Mapping of one set of data onto another set<br>
//Often involving arrays or objects with nested structures<br>
//This could involve tasks like transforming data from one formate to another<br>
//Filtering Specific Element <br>
//Combining Multiple dataset<br>

$users=[
        [
        'id'=>1,
        'name'=>'John',
        'age'=>25, 
        ],
        [
        'id'=>1,
        'name'=>'John',
        'age'=>25,
        ],
];
//Mapping of Original array into new array
$userNames = array_map(function($user))
{
    return $user['name'];

},$uers);

print_r($userNames);
