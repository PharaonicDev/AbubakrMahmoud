<?php
  function getMoreWork($project) {
    $projects = array(
      
     
   
      
    );

    $work = array();
    $projectIndex = array_search($project, $projects);

    if ($projectIndex >= 0) {
      // Next project
      if (($projectIndex + 1) > (count($projects) - 1)) {
        array_push($work, $projects[0]);
      }

      else {
        array_push($work, $projects[$projectIndex + 1]);
      }

      // Next project
      if (($projectIndex + 2) > (count($projects) - 1)) {
        array_push($work, $projects[($projectIndex + 1) - (count($projects) - 1)]);
      }

      else {
        array_push($work, $projects[$projectIndex + 2]);
      }

      // Next project
      if (($projectIndex + 3) > (count($projects) - 1)) {
        array_push($work, $projects[($projectIndex + 2) - (count($projects) - 1)]);
      }

      else {
        array_push($work, $projects[$projectIndex + 3]);
      }
    }

    return $work;
  }
?>
