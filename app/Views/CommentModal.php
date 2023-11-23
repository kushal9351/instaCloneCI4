<!-- modal start -->

<?php
    // print_r($post);
    // echo "hello";
    // die;
?>

<?= $this->extend('showMyProfile.php') ?>

<?= $this->section('content') ?>


<div class="modal fade" id="<?php echo "post" . $post['pId']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark text-white">
            <div class="modal-body">

                <!-- modal body starts here -->


                <div style="display: flex; background-color: white">
                    <!-- Left Div for Image Preview -->
                    <div style="flex: 1; padding: 10px;">
                        <img src="<?php echo base_url('uploads/' . $post['post_Img']) ?>" alt="Image Preview"
                            style="width: 600px; height: 500px;">
                    </div>

                    <!-- Right Div for Comments -->
                    <div style="flex: 1; padding: 10px; background-color: white; color: black">





                        <!-- session profile -->


                        <div class="userdetail d-flex align-items-center mx-5 my-3" style="">
                            <!-- <a class="dropdown-item" href="<?php echo base_url('user/name/' . $result['userName']); ?>"></a> -->
                            <a class="imageBlock" style="margin-left: 10px"
                                href="<?php echo base_url('user/name/' . $result['userName']); ?>">
                                <img src="<?php echo ($result['profile_pic'] != "") ? base_url('uploads/' . $result['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>"
                                    class="rounded-circle" height="35" alt="" loading="lazy"
                                    style="height: 70px; border: 4px solid hsla(0,60%,70%, .5)" />
                            </a>
                            <div class="nameblock text-bg mx-3" style="margin-top: 15px">
                                <h5 class="">
                                    <?php echo $result['fullName']; ?>
                                </h5>
                                <p class="">
                                    <?php echo $result['userName']; ?>
                                </p>
                            </div>
                        </div>




                        <!-- session profile -->

                        <!-- <h2>Comments</h2> -->
                        <!-- <ul style="list-style: none;">
                                                        <li>User 1: This is a great image!</li>
                                                        <li>User 2: I love it!</li>
                                                        <li>User 3: Nice work!</li>
                                                        
                                                    </ul> -->

                        <?php
                        // foreach()
                        ?>

                        <div class="comments-container px-4" style=" height: 35vh;overflow: auto;">
                            <div style="margin: 0px;"
                                class="d-flex flex-column justify-center-start align-items-start my-4">
                                <h6>@kush</h6>
                                <p style="margin: 0px;" class="text-muted">This is a great
                                    image!</p>
                            </div>
                            <div style="margin: 0px;"
                                class="d-flex flex-column justify-center-start align-items-start my-4">
                                <h6>@kush</h6>
                                <p style="margin: 0px;" class="text-muted">This is a great
                                    image!</p>
                            </div>
                            <div style="margin: 0px;"
                                class="d-flex flex-column justify-center-start align-items-start my-4">
                                <h6>@kush</h6>
                                <p style="margin: 0px;" class="text-muted">This is a great
                                    image!</p>
                            </div>
                            <div style="margin: 0px;"
                                class="d-flex flex-column justify-center-start align-items-start my-4">
                                <h6>@kush</h6>
                                <p style="margin: 0px;" class="text-muted">This is a great
                                    image!</p>
                            </div>
                            <div style="margin: 0px;"
                                class="d-flex flex-column justify-center-start align-items-start my-4">
                                <h6>@kush</h6>
                                <p style="margin: 0px;" class="text-muted">This is a great
                                    image!</p>
                            </div>
                            <div style="margin: 0px;"
                                class="d-flex flex-column justify-center-start align-items-start my-4">
                                <h6>@kush</h6>
                                <p style="margin: 0px;" class="text-muted">This is a great
                                    image!</p>
                            </div>
                            <div style="margin: 0px;"
                                class="d-flex flex-column justify-center-start align-items-start my-4">
                                <h6>@kush</h6>
                                <p style="margin: 0px;" class="text-muted">This is a great
                                    image!</p>
                            </div>


                        </div>



                        <!-- Comment Input and Post Button -->
                        <div class="comment-input">
                            <form action="<?php echo base_url('user/submitComment'); ?>" method="post"
                                style="position: absolute; bottom: 24px; display: flex; width: 41%;"
                                id="comment-form-<?php echo $post['pId']; ?>">
                                <input class="form-control" type="text" id="comment-input-<?php echo $post['pId']; ?>"
                                    data-post_id="<?php echo $post['pId']; ?>" placeholder="Add a comment"
                                    style="flex: 1;" required>
                                <button type="submit" class="btn btn-primary"
                                    id="post-comment-<?php echo $post['pId']; ?>"
                                    style="margin-left: 10px;">Post</button>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- modal body ends here -->

            </div>
            <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Post</button>
                                        </div> -->
        </div>
    </div>
</div>

<?= $this->endSection() ?>


<!-- modal end -->