<?php

    function main() {
        $Names = ["Bill", "Gates","Walt", "Mike", "Mark"];
        
        $Passwords = array(
                            $Names[0]=> "mic",
                            $Names[1]=> "ros",
                            $Names[2]=> "dis",
                            $Names[3]=> "ney",
                            $Names[4]=> "fac"
            );

        

        foreach ($Passwords as $name =>$Password) {
            if (strlen($name)<6) {
                $rand = rand(100,999);
                $username = $name.$rand;
                if (strlen($username)>8) {
                    echo "username cannot be greater than 8 or less than 6";
                }
            }
            echo "<br>"." Username: <strong>".$username."</strong>";

            $rand = rand(100,999);
            $password = $Password.$rand.$Password;
            echo "<br>"." Password: <strong>".$password."</strong><br>";
        }

    }

    main();

?>