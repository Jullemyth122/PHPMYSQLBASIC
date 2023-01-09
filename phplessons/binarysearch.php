<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="GET">
        <h1> Binary Searching </h1>
        <p> Binary Numbers [-25,-4,-1,-1,0,1,2,14,16,16,17,19,19,25] </p>
        <input type="hidden" name="items" value="[-25,-4,-1,-1,0,1,2,14,16,16,17,19,19,25]">
        <input type="text" name="person" placeholder="Name">
        <input type="text" name="number" placeholder="Guess Number">
        <button type="submit"> Submit </button>
    </form>

    <?php
        $x = 10;
        if (isset($_GET['person'])) {
            $name = $_GET['person'];
        } else {
            $name = "";
        }
        if (isset($_GET['number'])) {
            $number = $_GET['number'];
        } else {
            $number = 0;
        }
        if (isset($_GET['items'])) {
            $items = $_GET['items'];
        } else {
            $items = "[]";
        }

        print("\n");
        $items = json_decode($items);
        for ($i=0; $i < count($items) ; $i++) { 
            print($items[$i]);
            if ($i < count($items) - 1) {
                print(", ");
            }
        }

        print("<br />");


        function binarySearch($v, $To_Find) {
            $lo = 0;
            $hi = count($v) - 1;
        
            $indices = [];
            while ($hi >= $lo) {
                $mid = (int) (($hi + $lo) / 2);
        
                if ($v[$mid] == $To_Find) {
                    $left = $mid;
                    while ($left >= 0 && $v[$left] == $To_Find) {
                        $indices[] = $left;
                        $left -= 1;
                    }
                    $right = $mid + 1;
                    while ($right < count($v) && $v[$right] == $To_Find) {
                        $indices[] = $right;
                        $right += 1;
                    }
                    break;
                } elseif ($v[$mid] < $To_Find) {
                    $lo = $mid + 1;
                } else {
                    $hi = $mid - 1;
                }
            }
        
            return $indices;
        }

        
        $indices = binarySearch((array)$items, $number);
        if (empty($indices)) {
            print("Number not found in array.");
        } else {
            foreach ($indices as $index) {
                print($index . "\n");
            }
        }

    ?>
</body>
</html>
