<?php
include_once "databaseConnection.php";
?>

<?php
class Queries extends database
{
    // get query
    public function get_data($tableName, $fields = "*")
    {
        $sql = "SELECT $fields FROM $tableName order by user_id desc ";
        $result = $this->connect()->query($sql);
        return $result;
    }
    // insert query
    public function insert_data($tableName, $data)
    {
           //split with coma ","
        $fields = implode(',',array_keys($data));
        // count values in query with "?"
        $values = implode(', ', array_fill(0, count($data), "?"));

         $sql = "INSERT INTO $tableName ($fields)  VALUES ($values)";

        $result = $this->connect()->prepare($sql);
    //    
        $strtype = "";
        foreach ($data as  $value) {
          $strtype .= is_int($value)?"i": "s";
        }
       
        
        // passing the values
        $result->bind_param($strtype,...array_values($data));
        $result->execute();
    }
}
// object creation
$obj = new Queries();

$data = array(
    'userName'=> 'Amir khan',
    'password'=> 'pass1234'
);

$obj->insert_data("users", $data);









// calling get query 
$res = $obj->get_data("users");
if ($res->num_rows > 0) {
    while ($user = $res->fetch_assoc()) {
        echo "<pre>";
        print_r($user);
    }
}

?>