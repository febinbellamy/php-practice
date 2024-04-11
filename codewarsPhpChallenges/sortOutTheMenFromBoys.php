function menFromBoys($arr) {
  $evens = [];
  $odds = [];
  $freqCount = [];
  
  for($i = 0; $i < count($arr); $i++) {
    $currentNum = $arr[$i];
    if (!array_key_exists($currentNum, $freqCount)) {
      $freqCount[$currentNum] = 1;
      if ($currentNum % 2 === 0) {
        $evens[] = $currentNum;
      } else {
        $odds[] = $currentNum;
      }
    }  
  }
  asort($evens);
  arsort($odds);
  return [...$evens, ...$odds];
}