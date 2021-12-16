<?php 
require_once('Views/partials/header.php');
?>

<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <td><a href="index.php?mod=post&act=create" class="btn btn-primary" style="width:150px;">Create Post</a></td>
                                        <tr>
                                            <th>STT</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Thumbnail</th>
                                            <th>Content</th>
                                            <th>Slug</th>
                                            <th>View_count</th>
                                            <th>Created_at</th>
                                            <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <?php
                                        $i=1; 
                                     foreach($posts as $item ) {
                                         $i++;

                                    ?>
                                    <tbody>
                                        <td><?= $i ?></td>
                                        <td><?= $item['title'] ?></td>
                                        <td><?= $item['description'] ?></td>
                                        <td>
                                            <img src="assets/uploads/<?=$item['thumbnail'] ?>" width="100px" height="100px">
                                        </td>
                                        <td><?= $item['content'] ?></td>
                                        <td><?= $item['slug'] ?></td>
                                        <td><?= $item['view_count'] ?></td>
                                        
                                       
                                        <td><?= $item['created_at'] ?></td>
                                        <td><a href="?mod=post&act=detail&id<?= $item['id']?>" class="btn btn-primary">Detail</a></td>
                                        <td><a href="?mod=post&act=edit&id<?= $item['id']?>" class="btn btn-success">Edit</a></td>
                                        <td><a href="?mod=post&act=deletel&id<?= $item['id']?>" class="btn btn-danger">Delete</a></td>
                                    </tbody>
                                    <?php }?>
                                </table>
                            </div>
                        </div>


<?php
require_once('Views/partials/footer.php');
?>