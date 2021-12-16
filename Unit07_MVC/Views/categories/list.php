<?php 
require_once('Views/partials/header.php');
?>

<div class="card mb-4">
                    <div class="card-body">
                    <a href="index.php?mod=category&act=create" class="btn btn-primary float-right mb-3">Create category</a>
                        <table class="dataTable-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Thumbnail</th>
                                <th>Description</th>
                                <th>Slug</th>
                                <th>Created_at</th>
                                <th>Action</th> 
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($categories as $item ) {?>
                            <tbody>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td>
                                    <img src="assets/uploads/<?=$item['thumbnail'] ?>" width="100px" height="100px">
                                </td>
                                <td><?= $item['slug'] ?></td>
                                <td><?= $item['description'] ?></td>
                                <td><?= date("d/m/Y", strtotime($item['created_at'])) ?></td>
                                <td><a href="?mod=category&act=detail&id=<?= $item['id']?>" class="btn btn-primary">Detail</a></td>
                                <td><a href="?mod=category&act=edit&id=<?= $item['id']?>" class="btn btn-success">Edit</a></td>
                                <td><a href="?mod=category&act=delete?id=<?= $item['id']?>" class="btn btn-danger">Delete</a></td>
                            </tbody>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>

<?php
require_once('Views/partials/footer.php');
?>