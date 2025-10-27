<?php
    function average($grades){
        $sum = 0;
        foreach ($grades as $grade) 
            $sum += $grade;

        $average = $sum / count($grades);
        return round($average, 2);
    }

    function letterGrade($score){
        if($score > 100 || $score < 0) return "Score must be between 0 and 100"; 
        elseif($score >= 80) return "A";
        elseif($score >= 60) return "B";
        elseif($score >= 40) return "C";
        elseif($score >= 20) return "D";
        else return "F";
    }

    $grades = ['Alice' => 32,
                'Bob'=> 96,
                'Charlie' => 77,
                'Duke' => 48,
                'Elf' => 18,
                'Fenry' => -12];

    foreach($grades as $name => $score){
        if($score > 100|| $score < 0)
            echo "$name's score is $score. " . letterGrade($score). ".\n";
        else
            echo "$name's score is $score graded as " . letterGrade($score) . ".\n";
    }
?>

