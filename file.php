<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if (1) {
        $extension = ".html";
        $body = $_POST['body'];
        $title = $_POST['title'];


        if (str_contains($title, '/')) {
          echo '<p style="color: red;">the / character is not allowed in the title!! please change it and try again</p>';
          return 0;
        }


        $swap_var = array(
          "{BODY}" => $body,
          "{TITLE}" => $title,
          "{PREVIEW}" => substr($body, 0, 45)."..."
        );

        $template = "template.php";

        if (file_exists($template)) {
            //echo "template file do exist!!";
          $html = file_get_contents($template);
        } else {
          die ("Unable to locate your template file");
        }

        foreach (array_keys($swap_var) as $key) {
          if (strlen($key) > 2 && trim($swap_var[$key]) != '')
    
            $html = str_replace($key, $swap_var[$key], $html);
        }

        //delete this if no preview is needed
        echo $html;
        
         //$filename = $_POST['title'];
         $filename = "news/".$title . $extension;
         //echo "\t" . $filename ;
          if (!file_exists($filename)) {
            fopen($filename, "w");
            chmod($filename, 0777);
          }
          if (!file_exists($filename)) {
            echo "error while creating the file";
          }
         file_put_contents($filename , $html);
      }
    }
    ?>