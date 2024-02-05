<?php

function createCategory(string $name, string $description) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into categories (name, description) values (:name, :description)");
    $statement->execute([
        ':name' => $name,
        ':description' => $description
    ]);

    return $statement->rowCount() > 0;
}
