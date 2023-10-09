<?php

declare(strict_types=1);


function commentTreeToHTML(array $comments, ?int $parentId = null): void
{
    echo '<ul>';

    foreach ($comments as $comment) {
        list($id, $parent, $text) = $comment;
        if ($parent == $parentId) {
            echo '<li>' . $text;
            commentTreeToHTML($comments, $id);
            echo '</li>';
        }
    }

    echo '</ul>';
}