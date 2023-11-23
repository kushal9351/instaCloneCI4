<!-- photo_post -->

<div class="modal fade" id="followersModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="photo_postLabel">Followers List </h1>
                <button type="button" class="bg-light btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">

                <!-- body start -->
                <!-- listOfFollowers -->

                <?php
                if(count($listOfFollowers) == 0){
                    echo "No followers";
                };
                 ?>

                <?php foreach ($listOfFollowers as $user) { ?>


                <div class="userdetail d-flex align-items-center justify-content-between mx-4 my-3 p-2 bg-light text-dark"
                    >
                    <!-- <a class="dropdown-item" href="<?php echo base_url('user/name/' . $result['userName']); ?>"></a> -->
                    <a class="imageBlock" href="<?php echo base_url('user/name/'.$user['userName']); ?>">
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
                        <?php if (in_array($user['id'], $checkFollowUnfollow)) { ?>
                            <!-- echo "unfollow"; -->
                            
                            <button class="btn btn-danger <?php echo (session()->get('userdata')['fullName'] != $result['fullName']) ? "disabled" : "" ?>" value="<?php echo $user['id'] ?>"
                                id="<?php echo "followBtn" . $user['id']; ?>" onclick="followFun(this)">unfollow</button>
                        <?php } else { ?>
                            <!-- echo "follow"; -->
                            <button class="btn btn-primary <?php echo (session()->get('userdata')['fullName'] != $result['fullName']) ? "disabled" : "" ?>" value="<?php echo $user['id'] ?>"
                                id="<?php echo "followBtn" . $user['id']; ?>" onclick="followFun(this)">follow</button>
                        <?php } ?>


                    </div>
                </div>


                <?php } ?>




                <!-- body ends -->

            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post</button>
            </div> -->
            </form>
        </div>
    </div>
</div>

<!-- photo_post -->