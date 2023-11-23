<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
    <!-- <style>
        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }
    </style> -->
</head>

<body>


    <nav>
        <?php // echo $this->include('navbar.php') ?>
        <a class="btn btn-danger mx-5 my-2" href="<?php echo base_url('/'); ?>">back to dashboard</a>
    </nav>

    <main style="margin-top: 58px">
        <div class="container pt-4 ">



            <div class="">
                <div class="userdetail d-flex" style="margin: 0 15vw;">
                    <div class="imageBlock">
                        <img src="<?php echo ($result['profile_pic'] != "") ? base_url('uploads/' . $result['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>"
                            class="rounded-circle" height="150" alt="" loading="lazy"
                            style="height:200px; border: 4px solid hsla(0,60%,70%, .5)" />
                    </div>
                    <div class="nameblock mx-4 my-4">
                        <h3 class="">
                            <?php echo $result['fullName']; ?>
                        </h3>
                        <h5 class="">
                            <?php echo $result['userName']; ?>
                        </h5>
                        <div class="btns">
                            <span class="btn btn-secondary"><span>
                                    <?php echo $noOfPosts ?>
                                </span> post</span>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#followersModal">
                                <span>
                                    <?php echo count($listOfFollowers); ?> followers
                                </span>
                            </button>
                            <!-- <span class="btn btn-secondary"><span><?php //echo $noOfFollowers ?></span> followers</span> -->
                            <!-- followingModal -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#followingModal">
                                <?php echo $noOfFollowing ?></span> following </span>
                            </button>
                            <!-- <span class="btn btn-secondary"><span><? php // echo $noOfFollowing ?></span> following</span> -->
                        </div>

                        <?php
                        // if(session()->get('userdata')['fullName'] != $result['fullName']){
                        //     if(in_array($result['id'], $checkFollowUnfollow)){
                        ?>
                        <!-- <span class="btn btn-danger my-3">unfollow</span> -->
                        <!-- <button class="btn btn-danger my-2" value="<?php //echo $result['id'] ?>" -->
                        <!-- id="<?php //echo "followBtn" . $result['id']; ?>" onclick="followFun(this)">unfollow</button> -->
                        <?php //} else { ?>
                        <!-- echo "follow"; -->
                        <!-- <button class="btn btn-primary my-2" value="<?php //echo $result['id'] ?>"
                                id="<?php //echo "followBtn" . $result['id']; ?>" onclick="followFun(this)">follow</button> -->
                        <?php // }?>


                    </div>
                </div>

                <?php // print_r($posts); die; ?>

                <!-- <? // = $this->renderSection('content'); ?> -->


                <div class="postSection">
                    <h1 class="my-5">posts </h1>
                    <div class="imageRow d-flex flex-wrap">

                        <?php foreach ($posts as $post) { ?>

                            <div class="allpost m-1">
                                <img data-bs-toggle="modal" data-bs-target="#post"
                                    id="<?php echo $post['pId']; ?>" data-post_id="<?php echo $post['pId']; ?>"
                                    src="<?php echo base_url('uploads/' . $post['post_Img']) ?>" alt="" height="400"
                                    width="400" class="border border-dark" data-post='<?php echo json_encode($post); ?>'
                                    data-user='<?php echo json_encode($result); ?>'
                                    onclick="showPostModal(this)" >
                                    


                                <!-- <div id="<?php // echo "#post" . $post['pId']; ?>" ></div> -->
                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="<?php //echo "#post" . $post['pId']; ?>">Launch demo modal</button> -->

                            </div>
                        <?php } ?>


                        <div class="modal fade" id="post" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content bg-dark text-white">
                                    <div class="modal-body">



                                        <div style="display: flex; background-color: white">
<!-- jquery -->
                                            <div style="flex: 1; padding: 10px;">
                                                <img id = commentModalsrc 
                                                    alt="Image Preview" style="width: 600px; height: 500px;">
                                            </div>


                                            <div style="flex: 1; padding: 10px; background-color: white; color: black">


                                            


                                                <div class="userdetail d-flex align-items-center mx-5 my-3" style="">
                                                
                                                <!-- jquery -->
                                                    <a class="imageBlock" style="margin-left: 10px" id="commentModalProfile">
                                                        <img id="commentModalProfilePhoto" 
                                                            class="rounded-circle" height="35" alt="" loading="lazy"
                                                            style="height: 70px; border: 4px solid hsla(0,60%,70%, .5)" />
                                                    </a>
                                                    <div class="nameblock text-bg mx-3" style="margin-top: 15px">
                                                        <h5 id="commentModalProfileFullName">
                                                            </h5>
                                                            <p id="commentModalProfileUserName">
                                                                </p>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <div class="comments-container px-4"
                                                        style=" height: 35vh;overflow: auto;">
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
                                                    <!-- <div style="margin: 0px;"
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
                                                    </div> -->


                                                </div>


                                                <!--********************************************************************************************** -->
                                                <div class="comment-input">
                                                    <input type="hidden" id="postPid">
                                                    <form action="<?php echo base_url('user/submitComment'); ?>" method="post"
                                                        style="position: absolute; bottom: 24px; display: flex; width: 41%;" class="comment-input-form">
                                                        <input class="form-control commentModalInput" type="text"
                                                            placeholder="Add a comment" style="flex: 1;" required>
                                                        <button type="submit" class="btn btn-primary commentModalbutton"
                                                            style="margin-left: 10px;" >Post</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>





            <!-- <? php // print_r( session()->get('userdata')); die ?> -->


        </div>


        <?= $this->include('modals/followersModal.php') ?>
        <?= $this->include('modals/followingModals.php') ?>



    </main>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="<?php echo base_url('/js/dashboard.js'); ?>"></script>

<!-- <script>
    var userName 
</script> -->


</html>