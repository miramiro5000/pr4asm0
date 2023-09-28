<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 if(isset($_POST['add_to_card'])) 
 {
    if(isset($_SESSION['card']))
    {
       $myitems=array_column($_SESSION['card'],'item_name');
       if(in_array($_POST['item_name'],$myitems))
       {
        echo"<script>
        alert('item already added');
        window.location.href='index4.php';
        </script>";

       }
       else
       {
$count=count($_SESSION['card']);
 $_SESSION['card'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
 echo"<script>
        alert('item  added');
        window.location.href='index4.php';
        </script>";
    }
    }
    else
    {
$_SESSION['card'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
echo"<script>
        alert('item  added');
        window.location.href='index4.php';
        </script>";

    } 
 } 
   if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['card'] as $key => $value)
        {
            if($value['item_name']==$_POST['item_name'])
            {
           unset($_SESSION['card'] [$key]);
           $_SESSION['card']=array_values($_SESSION['card']);
           
           echo"<script>
           alert('item  removed');
           window.location.href='mycard4.php';
           </script>";

        }
    }
}
}

?>