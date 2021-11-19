<?php 
    require_once 'dbcon.php';
    session_start();

    if(isset($SESSION["admin_login"]))
    {
        header("location:admin/VehicleRecord.php");
            }
    if(isset($SESSION["user_login"])){
        header("location: user/index.php");
    }

    if(isset($_REQUEST['Login']))
    {
        $userN=$_REQUEST["username"];
        $password=$_REQUEST["Pass"];
        $types=null;

if(empty($userN)){
    $errorMsg[]="please enter username";
}
else if(empty($password)){
 $errorMsg[]="please enter password";
}
 else if($userN AND $password){
    try
    {
        $selection=$conn->prepare("SELECT userName,userPass,userType FROM  usermtrpl WHERE userName=:Auser AND userPass=:uPassword AND userType=:uType");

        $selection->bindParam(":Auser",$userN);
        $selection->bindParam(":uPassword",$password);
        $selection->bindParam(":uType:",$types);
        $selection->execute();

        while($row=$selection->fetch(PDO::FETCH_ASSOC))
        {
            $dbuser=$row["userName"];
            $dbpass=$row["userPass"];
            $dbrole=$row["userType"];
            }
            if($userN!=null AND $password!=null)
            {
                if($selection->rowCount()>0)
            {
                if($userN==$dbuser AND $password==$dbpass AND $types==$dbrole){
                    switch($dbrole)
                    {
                        case 1:
                        $SESSION["admin_login"]=$userN;
                        header("refresh:3;admin/VehicleRecord.php");
                        break;

                         case 2:
                        $SESSION["user_login"]=$userN;
                        header("refresh:3;userNer/index.php");
                        break;
                    

                    default:
                    $errorMsg[]="Wrong Username or Password!";
                }

                }
                else{
                    $errorMsg[]="Wrong Username or Password!";

                }

            }
            else{
                    $errorMsg[]="Wrong Username or Password!";

            }
        }
        else{
                    $errorMsg[]="Wrong Username or Password!";

        }
 }
 catch(PDOException $e)
 {
    $e->getMessage();

 }
    }
    else{
                    $errorMsg[]="Wrong Username or Password!";

    }
     }
     //MAY ERROR PA YUNG CODE INAAYOS PA
?>