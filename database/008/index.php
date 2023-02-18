<?php
  $date = new DateTime('2023-07-10 12:00:00');
  $date->sub(DateInterval::createFromDateString('20 years 5 days 30 minutes 17 seconds'));
  $date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

  echo '<h1>'.$date->format('d/m/Y H:i:s').'</h1>';

  $date1 = new DateTime();
  $date2 = new DateTime('2023-07-10');

  if($date1 > $date2) {
    echo '<h2>date1 é maior que date2</h2>';
  } else {
    echo '<h2>date2 é maior que date1</h2>';
  }

  $diff = $date1->diff($date2);
  echo '<h3>'.$diff->format('%a').' dias</h3>';

  $today = new DateTime();
  $end = new DateTime('2024-01-01');
  $newYear = $today->diff($end);

  echo '<h1>Faltam '.$newYear->format('%m').' meses e '.$newYear->format('%d').' para o ano novo!</h1>';
?>