<div class="mainContainer d-flex">

    <div class="leftContainer mx-5" style=" width: 60%; height: 100%">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card_container">


                        <?php

                        $isAnyPost = false;

                        // echo "<pre>";
                        // print_r($likesData);
                        // die;


                        $i = 0;

                        foreach ($posts as $post) {
                            
                            // die;
                            $user = null;
                            foreach ($users as $u) {
                                if ($u['id'] == $post['user_id']) {
                                    $user = $u;
                                    break;
                                }
                            }

                            if ($user && in_array($user['id'], $following)) {
                                $isAnyPost = true;
                                ?>

                                <!-- 1 block -->

                                <div class="card mb-5">
                                    <div class="card-header">
                                        <div class="userdetail d-flex align-items-center mx-4 my-3"
                                            style="background-color: rgb(238, 246, 249)">
                                            <div class="imageBlock">
                                                <img src="<?php echo ($post['profile_pic'] != "") ? base_url('uploads/' . $post['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>"
                                                    class="rounded-circle" height="35" alt="" loading="lazy"
                                                    style="height: 50px; border: 4px solid hsla(0,60%,70%, .5)" />
                                            </div>
                                            <div class="nameblock mx-2">
                                                <h5>
                                                    <?php echo $post['fullName']; ?>
                                                </h5>

                                            </div>


                                        </div>
                                        <div class="float-end" style="position: absolute; right: 53px; top: 38px;">
                                            <i class="fa-solid fa-ellipsis-vertical fa-xl" style="color: #000000;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table table-bordered" id="users-list">

                                            <img src="<?php echo base_url('uploads/' . $post['post_Img']) ?>" alt=""
                                                style="height: 450px; width: 695px">
                                        </div>
                                        <!-- ****************************************************************************************************** -->
                                        <?php if(in_array($post['pId'], $likePostIdArr)){
                                            ?>
                                                <i class="fa-solid fa-heart fa-2xl mx-2"
                                                id="<?php echo "likeBtn" . $post['pId'] ?>" data-post_id="<?php echo $post['pId'] ?>" onclick="likeFun(this)"
                                                style="color: #ff3737"></i>
                                            <?php } else{?>

                                            <i class="fa-regular fa-heart fa-2xl mx-2"
                                                id="<?php echo "likeBtn" . $post['pId'] ?>" data-post_id="<?php echo $post['pId'] ?>" onclick="likeFun(this)"
                                                style="color: #000000"></i>


                                                <?php } ?>
                                        <a href="#"><i class="fa-regular fa-comment fa-2xl mx-2"
                                                style="color: #000000;"></i></a>



                                    </div>
                                    <div class="mx-3">
                                    <h6><span class="mx-2"><?php echo isset($likesData[$post['pId']]) ? $likesData[$post['pId']] : 0; ?></span>likes</h6>
                                    </div>
                                    <div>
                                        <p class="card-text mx-3 my-2"><span style="font-weight:bold">
                                                <?php echo $post['fullName']; ?>
                                            </span>
                                            <?php echo $post['post_text']; ?>
                                        </p>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php
                            if ($post['user_id'] == session()->get('userdata')['id']) {
                                $isAnyPost = true;
                                ?>
                                <div class="card mb-5">
                                    <div class="card-header">
                                        <div class="userdetail d-flex align-items-center mx-4 my-3"
                                            style="background-color: rgb(238, 246, 249)">
                                            <div class="imageBlock">
                                                <img src="<?php echo ($post['profile_pic'] != "") ? base_url('uploads/' . $post['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>"
                                                    class="rounded-circle" height="35" alt="" loading="lazy"
                                                    style="height: 50px; border: 4px solid hsla(0,60%,70%, .5)" />
                                            </div>
                                            <div class="nameblock mx-2">
                                                <h5>
                                                    <?php echo $post['fullName']; ?>
                                                </h5>

                                            </div>


                                        </div>
                                        <div class="float-end" style="position: absolute; right: 53px; top: 38px;">
                                            <i class="fa-solid fa-ellipsis-vertical fa-xl" style="color: #000000;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table table-bordered" id="users-list">

                                            <img src="<?php echo base_url('uploads/' . $post['post_Img']) ?>" alt=""
                                                style="height: 450px; width: 695px">
                                        </div>
                                        <!-- *********************************************************************************************************** -->

                                        <?php if(in_array($post['pId'], $likePostIdArr)){
                                            ?>
                                                <i class="fa-solid fa-heart fa-2xl mx-2"
                                                id="<?php echo "likeBtn" . $post['pId'] ?>" data-post_id="<?php echo $post['pId'] ?>" onclick="likeFun(this)"
                                                style="color: #ff3737"></i>
                                            <?php } else{?>

                                            <i class="fa-regular fa-heart fa-2xl mx-2"
                                                id="<?php echo "likeBtn" . $post['pId'] ?>" data-post_id="<?php echo $post['pId'] ?>" onclick="likeFun(this)"
                                                style="color: #000000"></i>


                                                <?php } ?>
                                        <a href="#"><i class="fa-regular fa-comment fa-2xl mx-2"
                                                style="color: #000000;"></i></a>



                                    </div>
                                    <div class="mx-3">
                                        <h6><span class="mx-2"><?php echo isset($likesData[$post['pId']]) ? $likesData[$post['pId']] : 0; ?></span>likes</h6>
                                    </div>
                                    <div>
                                        <p class="card-text mx-3 my-2"><span style="font-weight:bold">
                                                <?php echo $post['fullName']; ?>
                                            </span>
                                            <?php echo $post['post_text']; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php }
                            $i++;
                        } ?>


                        <?php if ($isAnyPost == false) {
                            ?>
                            <h1>Follow Someone or Add a new post</h1>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rightContainer mx-5" style=" width: 30%; height: 30%">
        <div class="userdetail d-flex align-items-center">

            <a class="imageBlock" href="<?php echo base_url('user/name/' . $result['userName']); ?>">
                <img src="<?php echo ($result['profile_pic'] != "") ? base_url('uploads/' . $result['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>"
                    class="rounded-circle" height="70" alt="" loading="lazy"
                    style="height:100px; border: 4px solid hsla(0,60%,70%, .5)" />
            </a>
            <div class="nameblock">
                <h3 class="mx-4">
                    <?php echo $result['fullName']; ?>
                </h3>
                <h5 class="mx-4">
                    <?php echo $result['userName']; ?>
                </h5>
            </div>
        </div>

        <div class="followHeading my-2">
            <h4>You can follow them</h4>
        </div>

        <div class="followList">

            <?php
            $limit = 5; // Define the limit of iterations
            $iteration = 0; // Initialize an iteration counter
            ?>

            <?php foreach ($users as $user) { ?>
                <?php
                if ($iteration >= $limit) {
                    break; // Break out of the loop if the limit is reached
                }
                ?>
                <?php if ($user['id'] != $result['id'] && !in_array($user['id'], $following)) { ?>
                    <div class="userdetail d-flex align-items-center justify-content-between mx-4 my-3"
                        style="background-color: rgb(238, 246, 249)">
                        <!-- <a class="dropdown-item" href="<?php echo base_url('user/name/' . $result['userName']); ?>"></a> -->
                        <a class="imageBlock" href="<?php echo base_url('user/name/' . $user['userName']); ?>">
                            <img src="<?php echo ($user['profile_pic'] != "") ? base_url('uploads/' . $user['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>"
                                class="rounded-circle" height="35" alt="" loading="lazy"
                                style="height: 70px; border: 4px solid hsla(0,60%,70%, .5)" />
                        </a>
                        <div class="nameblock">
                            <h5 class="mx-4 ">
                                <?php echo $user['fullName']; ?>
                            </h5>
                            <p class="mx-4">
                                <?php echo $user['userName']; ?>
                            </p>
                        </div>
                        <div class="followBtn">
                            <?php if (in_array($user['id'], $following)) { ?>
                                <!-- echo "unfollow"; -->
                                <button class="btn btn-danger" value="<?php echo $user['id'] ?>"
                                    id="<?php echo "followBtn" . $user['id']; ?>" onclick="followFun(this)">unfollow</button>
                            <?php } else { ?>
                                <!-- echo "follow"; -->
                                <button class="btn btn-primary" value="<?php echo $user['id'] ?>"
                                    id="<?php echo "followBtn" . $user['id']; ?>" onclick="followFun(this)">follow</button>
                            <?php } ?>


                        </div>
                    </div>
                <?php }
                $iteration++; // Increment the iteration counter?>
            <?php } ?>


        </div>
    </div>

    <div>
        <?php
        // function linearSearch($key, $array)
        // {
        //     foreach ($array as $arr) {
        //         if ($key == $arr) {
        //             return true;
        //         }
        
        //     }
        //     return false;
        // }
        ?>

    </div>
</div>