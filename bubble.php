<?php
$numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0];

function bubbleSort($numbers)
{
    $count = count($numbers);

    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    return $numbers;
}




////////////////////////
///
///
$numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0];

function selectionSort($numbers) {

    for($i = 0; $i < sizeof($numbers); $i++) {

        $min = $i;
        $temp = $numbers[$i];
        for ($j = $i + 1; $j < sizeof($numbers); $j++) {
            if ($numbers[$j] < $numbers[$min]) {
                $min = $j;
            }
        }

        $numbers[$i] = $numbers[$min];
        $numbers[$min] = $temp;
    }

    return $numbers;

}

print_r(selectionSort($numbers));




$numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0];

function insertionSort($numbers) {

    for ($i = 0; $i < sizeof($numbers); $i++) {

    }

}

print_r(insertionSort($numbers));




/*function insertionSort(array) {
    const length = array.length;
    for (let i = 0; i < length; i++) {
        if (array[i] < array[0]) {
            //move number to the first position
            array.unshift(array.splice(i,1)[0]);
        } else {
            // only sort number smaller than number on the left of it. This is the part of insertion sort that makes it fast if the array is almost sorted.
            if (array[i] < array[i-1]) {
                //find where number should go
                for (var j = 1; j < i; j++) {
                    if (array[i] >= array[j-1] && array[i] < array[j]) {
                        //move number to the right spot
                        array.splice(j,0,array.splice(i,1)[0]);
                    }
                }
      }
        }
    }
}

insertionSort(numbers);
console.log(numbers);*/