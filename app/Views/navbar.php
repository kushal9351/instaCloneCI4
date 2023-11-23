<!--Main Navigation-->
<header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="<?php echo base_url('user/dashboard'); ?>" id="home"
                        class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fa-solid fa-house-chimney fa-lg me-3"></i><span>Home</span>
                        <!-- <a href="<?php echo base_url('user/dashboard'); ?>" ><i class="fa-solid fa-house-chimney fa-lg mx-2"></i></a> -->
                    </a>
                    <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple ">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Webiste traffic</span>
                    </a> -->
                    <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a> -->
                    <a data-bs-toggle="modal" data-bs-target="#ListOfMessages" style="cursor: pointer" id="messages" class="list-group-item list-group-item-action py-2 ripple">
                    <!-- <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#ListOfMessages">
	Left Sidebar Modal
</button> -->
                        <i class="fa-regular fa-paper-plane fa-lg me-3"></i><span>Messages</span>
                        <!-- <a href="#"><i class="fa-regular fa-paper-plane fa-lg mx-2"></i></a> -->
                    </a>
                    <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a> -->
                    <a data-bs-toggle="modal" data-bs-target="#photo_post" style="cursor: pointer"
                        class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fa-solid fa-square-plus fa-lg me-3"></i><span>Post</span></a>
                    <!-- <a data-bs-toggle="modal" data-bs-target="#photo_post" style="cursor: pointer"><i class="fa-solid fa-square-plus fa-lg mx-2"></i></a> -->
                    <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a> -->
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <!-- <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" /> -->
                    <img src="/image/instagramlogo.jpeg" height="35" alt="" loading="lazy" /> instagram

                </a>
                <!-- Search form -->
                <form class="d-none d-md-flex input-group w-auto my-auto">
                    <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search'
                        style="min-width: 225px" />
                    <span class="input-group-text border-0"><i class="fa-solid fa-magnifying-glass"></i></span>`
                </form>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">

                    <!-- home -->
                    <!-- <li class="nav-item d-flex align-items-center">
                        <a href="<?php echo base_url('user/dashboard'); ?>" ><i class="fa-solid fa-house-chimney fa-lg mx-2"></i></a>
                    </li> -->

                    <!-- message -->
                    <!-- <li class="nav-item d-flex align-items-center">
                        <a href="#"><i class="fa-regular fa-paper-plane fa-lg mx-2"></i></a>
                    </li> -->

                    <!-- post btn -->
                    <!-- <li class="nav-item d-flex align-items-center">
                        <a data-bs-toggle="modal" data-bs-target="#photo_post" style="cursor: pointer"><i class="fa-solid fa-square-plus fa-lg mx-2"></i></a>
                    </li> -->

                    <!-- Notification dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell fa-lg"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">55</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Some news</a></li>
                            <li><a class="dropdown-item" href="#">Another news</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Icon -->
                    <!-- <li class="nav-item">
                        <a class="nav-link me-3 me-lg-0" href="#">
                            <i class="fas fa-fill-drip"></i>
                        </a>
                    </li> -->

                    <!-- Icon -->
                    <!-- <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-github"></i>
                        </a>
                    </li> -->

                    <!-- Icon dropdown -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="united kingdom flag m-0"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                                    <i class="fa fa-check text-success ms-2"></i></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- Avatar -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li> -->
                    <!-- Example single danger button -->
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link btn dropdown-toggle hidden-arrow d-flex align-items-center"
                            id="navbarDropdownMenuLink" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                            <!-- <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> -->
                            <img src="<?php echo ($result['profile_pic'] != "") ? base_url('uploads/' . $result['profile_pic']) : "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z" ?>"
                                class="rounded-circle" height="25" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a style="cursor: pointer" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#profile"> <i class="fa-solid fa-user mx-2 my-2"></i> Edit
                                    profile</a></li>
                            <!-- <li><a style="cursor: pointer"  class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profile">Edit profile</a></li> -->

                            <li><a class="dropdown-item" href="<?php echo base_url('user/name/'.$result['userName']); ?>"> <i class="fa-solid fa-eye mx-2 my-2" style="color: #030303;"></i>
                                    view Profile</a></li>

                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-gear mx-2 my-2"></i>
                                    Settings</a></li>
                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-bookmark mx-2 my-2"></i>
                                    Saved</a></li>
                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-repeat mx-2 my-2"></i>
                                    Switch</a></li>

                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/login/logout') ?>"><i
                                        class="fa-solid fa-right-from-bracket mx-2 my-2"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->