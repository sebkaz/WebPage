<?php
    /**************************************
    * Set initial data                    *
    **************************************/
  require_once 'db.inc.php';

    $messages = array(
      array(
      'czas'=> $data_czas, 
      'ip' => $ip,
      'system' => $system,
      'browser' => $browser,
      'agent' => $agent,
      'local' => $details->loc,
      'country' => $details->country,
      'city' => $details->city,
      'hostname' => $hostname)
    );


    // Prepare INSERT statement to SQLite3 file db
    $insert = "INSERT INTO users(czas,ip,system,browser,agent,local,country,city,hostname)
    VALUES (:czas,:ip,:system,:browser,:agent,:local,:country,:city,:hostname)";

    $stmt = $file_db->prepare($insert);

    // Bind parameters to statement variables
    $stmt->bindParam(':czas', $czas_);
    $stmt->bindParam(':ip', $ip_);
    $stmt->bindParam(':system', $system_);
    $stmt->bindParam(':browser', $browser_);
    $stmt->bindParam(':agent', $agent_);
    $stmt->bindParam(':local', $local_);
    $stmt->bindParam(':country', $country_);
    $stmt->bindParam(':city', $city_);
    $stmt->bindParam(':hostname', $hostname_);

    // Loop thru all messages and execute prepared insert statement
    foreach ($messages as $m) {
      // Set values to bound variables
      $ip_= $m['ip'];
      $system_ = $m['system'];
      $browser_ = $m['browser'];
      $agent_ = $m['agent'];
      $czas_ = $m['czas'];
      $local_ = $m['local'];
      $country_ = $m['country'];
      $city_ = $m['city'];
      $hostname_ = $m['hostname'];

      // Execute statement
      $stmt->execute();
    }