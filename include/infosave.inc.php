<?php
    /**************************************
    * Set initial data                    *
    **************************************/
  require_once 'db.inc.php';
    // Array with some test data to insert to database
    $messages = array(
                  array('ip' => $ip,
                        'system' => $system,
                        'przegladarka' => $przegladarka,
                        'czas' => $data_czas)
                );


    /**************************************
    * Play with databases and tables      *
    **************************************/

    // Prepare INSERT statement to SQLite3 file db
    $insert = "INSERT INTO users (ip, system, przegladarka,czas)
                VALUES (:ip, :system, :przegladarka,:czas)";
    $stmt = $file_db->prepare($insert);

    // Bind parameters to statement variables
    $stmt->bindParam(':ip', $ip_);
    $stmt->bindParam(':system', $system_);
    $stmt->bindParam(':przegladarka', $przegladarka_);
    $stmt->bindParam(':czas', $czas_);

    // Loop thru all messages and execute prepared insert statement
    foreach ($messages as $m) {
      // Set values to bound variables
      $ip_= $m['ip'];
      $system_ = $m['system'];
      $przegladarka_ = $m['przegladarka'];
      $czas_ = $m['czas'];

      // Execute statement
      $stmt->execute();
    }

    /**************************************
    * Close db connections                *
    **************************************/
    // Close file db connection
    
