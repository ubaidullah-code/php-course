<?php
include_once "databaseConnection.php";
?>

<?php
class Queries extends database
{
    // get query
    public function get_data($tableName, $id = null , $fields = "*", $id_field = "user_id")
    {
        $sql =  $id? "SELECT $fields FROM $tableName WHERE $id_field = $id" : "SELECT $fields FROM $tableName";
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
         //checking datatype of values
        $strtype = "";
        foreach ($data as  $value)
        {
          $strtype .= is_int($value)?"i": "s";
        }
       
        
        // passing the values
        $result->bind_param($strtype,...array_values($data));
        $result->execute();
    }

    // DELETE QUERY
      public function delete_data($tableName, $id_field = "user_id", $id)
    {
        $sql = "DELETE FROM $tableName WHERE $id_field = ?";
        $result = $this->connect()->prepare($sql);
        $result->bind_param('i', $id);
          $result->execute();
        
    }
}


?>