<!-- Modal -->
<div class="modal left fade" id="ListOfMessages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Messages</h1>
        <button type="button" class="bg-light btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <?php //echo print_r($msgUserData) ?>

        <?php foreach ($msgUserData as $user) { ?>


          <div class="userdetail d-flex align-items-center mx-4 my-3" style="background-color: rgb(238, 246, 249)">
            <!-- <a class="dropdown-item" href="<?php echo base_url('user/name/' . $result['userName']); ?>"></a> -->
            <a class="imageBlock " href="<?php echo base_url('user/name/' . $user['userName']); ?>">
              <img
                src="<?php echo ($user['profile_pic'] != "") ? base_url('uploads/' . $user['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>"
                class="rounded-circle mx-4" height="35" alt="" loading="lazy"
                style="height: 70px; border: 4px solid hsla(0,60%,70%, .5)" />
            </a>
            <div class="nameblock mx-4 mt-3 text-black">
              <h5 class="mb-0">
                <?php echo $user['userName']; ?>
              </h5>
              <p class="text-muted">
                <i class="fa-solid fa-circle" style="color: #08a206;">&nbsp;online</i>
              </p>
            </div>
          </div>


        <?php } ?>






      </div>



      <!-- ****** -->


    </div>
    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
  </div>
</div>
</div>