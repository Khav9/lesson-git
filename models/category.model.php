<?php
function deleteCategory(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

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

?>
