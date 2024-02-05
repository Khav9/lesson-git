<?php
function deleteCategory(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

?>