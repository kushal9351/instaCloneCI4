
<div class="modal fade" id="profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit profile</h1>

                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form id="form" action="editprofile" method="POST" enctype="multipart/form-data" onsubmit="return Edit_validation()">


                    <div id="editProfileError" class="form-text text-danger text-center"></div>
                    <div class="mb-3">
                        <div id="preview" class="text-center">
                            <img class="rounded-circle" src="<?php echo ($result['profile_pic'] != "") ? base_url('uploads/' . $result['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>" alt="image not found" style="height:100px; border: 4px solid hsla(0,60%,70%, .5)">
                        </div>
                    </div>

                    <!-- profile -->
                    <div class="mb-3 text-center">
                        <label for="uploadfile" class="form-label text-primary">Change profile photo</label>
                        <input class="form-control" type="file" name="uploadfile" id="uploadfile" style="display: none;" value="<?php echo $result['profile_pic']; ?>" onchange="getImagePreview(event)">
                        <div>
                        </div>
                    </div>

                    <!-- full name -->
                    <div class="form-row ">
                        <div class="col-md-8 mb-3 ">
                            <label style="margin-left: 25%" for="p_name">Name</label>
                            <input style="margin-left: 25%" type="text" class="form-control" id="p_name" name="p_name" placeholder="Name" value="<?php echo $result['fullName']; ?>">
                        </div>

                        <div class="col-md-10 mb-3">
                            <label style="margin-left: 20%" for="p_username">Username</label>
                            <div class="input-group">
                                <div style="margin-left: 20%" class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                </div>
                                <input type="text" class="form-control" id="p_username" name="p_username" placeholder="Username" value="<?php echo $result['userName']; 
                                                                                                                                        ?>" aria-describedby="inputGroupPrepend2">
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <!-- Email -->
                        <!-- <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="p_email" name="p_email" value="<?php // echo session()->get('userdata')['userName']; 
                                                                                                        ?>" placeholder="Email">
                        </div>
                    </div> -->


                    <div class="form-row">
                        <!-- bio -->
                        <div class="col-md-8 mb-3">
                            <label style="margin-left: 25%" for="p_bio">Bio</label>
                            <input style="margin-left: 25%" type="text" class="form-control" id="p_bio" name="p_bio" placeholder="Bio" value="<?php echo $result['bio'];
                                                                                                                        ?>">
                        </div>


                        <!-- Add link -->
                        <div class="col-md-8 mb-3">
                            <label style="margin-left: 25%" for="p_addLink">Add link</label>
                            <input style="margin-left: 25%" type="text" class="form-control" id="p_addLink" name="p_addLink" placeholder="Add Link" value="<?php echo $result['addLink']; 
                                                                                                                                    ?>">
                        </div>
                    </div>

                    <!-- gender -->
                    <div class="col-md-8 mb-3">
                        <label style="margin-left: 25%" for="p_gender" class="form-label">Gender</label>
                        <input style="margin-left: 25%" class="form-control" list="genderDataList" id="p_gender" name="p_gender" placeholder="Gender" value="<?php echo $result['gender']; 
                                                                                                                                    ?>">
                        <datalist id="genderDataList">
                            <option value="Male">
                            <option value="Female">
                            <option value="Custom">
                            <option value="Prefer not to say" selected>
                        </datalist>
                    </div>

                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit" id="profileEditBtn">Submit form</button>
                    </div> -->
            </div>



        <!-- </div> -->



        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit" id="profileEditBtn">Submit form</button>
        </div>
    <!-- </div> -->
    </form>
    <!-- content end -->


    <!-- data-bs-dismiss="modal" -->
</div>
</div>
</div>