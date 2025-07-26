    <!-- task 1 -->
    <?php
    $fruits = ['apple', 'banana', 'cherry', 'date', 'elderberry'];
    $data = [
        'date' => '10.01.94',
        'author' => 'John',
        'book' => 'The Lord of the Rings',
        'city' => 'New York',
    ];



    echo $fruits[0] . "<br>" . $data['author'];
    ?>

    <!-- task 2 -->
    <hr>

    <?php
    foreach ($fruits as $key => $value) {
        echo esc_html($value) . "<br>";
    }


    foreach ($data as $key => $value) {
        echo $key . ": " . esc_html($value) . "<br>";
    }
    ?>
    <hr>

    <!-- task 3 -->
    <?php
    $myPosts = get_posts();
    foreach ($myPosts as $key => $value) {
        echo "<a href='" . get_the_permalink($value->ID) . "'>" . get_the_title($value->ID) . "</a><br>";
    }
    ?>
    <hr>

    <!-- task 4 -->

    <?php
    $tenNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $multiplyed = array_map(function ($num) {
        echo  $num * $num . "<br>";
    }, $tenNumbers);
    ?>


    <hr>

    <?php
    $even_numbers = array_filter($tenNumbers, function ($num) {
        if ($num % 2 == 0) {
            echo esc_html($num) . "<br>";
        }
    });


    ?>

    <hr>

    <!-- task 5 -->

    <?php
    $allPosts = get_posts([
        'numberposts' => -1,
    ]);

    foreach ($allPosts as $post) {
        echo "<h3>Пост: " . esc_html(get_the_title($post->ID)) . "</h3>";
        echo "<p>Permalink: <a href='" . get_permalink($post->ID) . "'>" . get_permalink($post->ID) . "</a></p>";

        $meta_data = get_post_meta($post->ID);

        if (!empty($meta_data)) {
            echo "<ul>";
            foreach ($meta_data as $key => $values) {
                foreach ($values as $value) {
                    echo "<li>" . esc_html($key)  . esc_html($value) . "</li>";
                }
            }
            echo "</ul>";
        }
    }
    ?>

    <!-- task additional 1 -->
    <?php
    $randomNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $average = array_sum($randomNumbers) / count($randomNumbers);
    $result = array_filter($randomNumbers, fn($num) => $num > $average);
    print_r($result);
    ?>

    <!-- task additional 2 -->

    <?php

    function mergeArrays(...$arrays)
    {
        return array_merge(...$arrays);
    }

    $array1 = [1, 2];
    $array2 = [3, 4];
    $array3 = [5, 6];

    $merged = mergeArrays($array1, $array2, $array3);
    print_r($merged);
    ?>
