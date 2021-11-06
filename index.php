<?php 

    // Challenge # 1
    
    $tasks = array();

    $tasks['John Doe'] = array(
        "Dishes" => "Wash the dishes in the sink.",
        "Garbage" => "Take the garbage and put it to the curb."
    );

    $tasks['Brandon Sanderson'] = array(
        "Surgebinding" => "Create really cool magic systems in your books."
    );

    echo wrap_text('h1', "Challenge # 1");

    foreach ( $tasks as $author => $jobs ) {
        echo  "<h2> {$author} </h2>";
        foreach ( $jobs as $title => $description ) {
            echo "<p> {$title} - {$description}</p>";
        }
    }

    // Challenge # 2

    function wrap_text( $tag, $content ) {
        return "<{$tag}> {$content} </{$tag}>";
    }

    echo wrap_text('h1', "Challenge # 2");

    echo wrap_text('h3', 'This is some content');

    // Challenge # 3

    echo wrap_text('h1', "Challenge # 3");

    foreach( $tasks['John Doe'] as $title => $description ) {
        echo "<h2> {$title} </h2>";
    }

    // Challenge # 4 & 5

    echo wrap_text('h1', "Challenge # 4 & 5");

    ?>
        <form action="" method="GET">
            <input type="text" name="assigned">
            <input type="submit">
        </form>
    <?php

    foreach ( $tasks[$_GET['assigned']] as $title => $description ) {
        echo wrap_text( 'h2', $title);
        echo wrap_text( 'h3', $description);
    }