<?php
    $host='localhost';
    $username='student_12002476';
    $password='-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------NfgutGrzwj2g';
    $dbname = "student_12002476";

    // create connection with Databasetable
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }


        include_once 'db.php'; // mogelijk niet nodig wanneer database connectie samen in de totale PHP-code zit
 
        //insert data from table (manueel via code data toevoegen, nog niet via de webpagina) LOOK UP
        $firstname = 'Hello';
        $lastname = 'Test';
        $mobile = '9874561230';
    
        $sql = "INSERT INTO users (firstname,lastname,mobile)
        VALUES ('$name','$email','$mobile')";
    
        if (mysqli_query($conn, $sql)) 
        {
           echo "New record has been added successfully !";
        } 
        else 
        {
           echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);


        // select data from table
        $sql = "SELECT * FROM users";
         
        $query = mysqli_query($conn,$sql);
         
        if(!$query)
        {
            echo "Query does not work.".mysqli_error($conn);die;
        }
         
        while($data = mysqli_fetch_array($query))
        {
            echo "Id = ".$data['id']."<br>";
            echo "Firstname = ".$data['firstname']."<br>";
            echo "Lastname = ".$data['lastname']."<br>";
            echo "Mobile = ".$data['mobile']."<br><hr>";
        }  


        // update data from table
        $sql = "UPDATE users SET firstname = 'Hello',lastname = 'Test',mobile = '9874561230' WHERE id=1 ";
 
        $query = mysqli_query($conn,$sql);
        if(!$query)
            {
                echo "Query does not work.".mysqli_error($conn);die;
            }
            else
            {
                echo "Data successfully updated";
            }


        //delete data from table
        $sql = "DELETE FROM users WHERE userid='" . $_GET["userid"] . "'";
 
        if (mysqli_query($conn, $sql)) 
            {
                echo "Record deleted successfully";
            } 
            else 
            {
                echo "Error deleting record: " . mysqli_error($conn);
            }
            mysqli_close($conn);

?>