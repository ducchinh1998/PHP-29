<?php 
require_once('Views/partials/header.php');
?>

<div class="card mb-4">
                    <div class="card-body">
                    <a href="index.php?controller=category&action=create" class="btn btn-primary float-right mb-3">Create category</a>
                        <table class="dataTable-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Thumbnail</th>
                                <th>Description</th>
                                <th>Slug</th>
                                <th>Created_at</th>
                             
                            </tr>
                            </thead>
                            <tbody>
        
                            <tbody>
                                <td><?= $category['id'] ?></td>
                                <td><?= $category['name'] ?></td>
                                <td>
                                    <img src="assets/uploads/<?=$category['thumbnail'] ?>" width="100px" height="100px">
                                </td>
                                <td><?= $category['slug'] ?></td>
                                <td><?= $category['description'] ?></td>
                                <td><?= $category['created_at'] ?></td>
                                
                            </tbody>
                           
                            </tbody>
                        </table>
                    </div>
                </div>

<?php
require_once('Views/partials/footer.php');
?>