function getImagePreview(event) {
    let image = URL.createObjectURL(event.target.files[0]);
    // console.log(event.target.files, "hello", image);
    let imgDiv = document.getElementById('preview');
    imgDiv.innerHTML = '';
    let newImg = document.createElement('img');
    newImg.style.borderRadius = "50%";
    newImg.style.border = "4px solid hsla(0,60%,70%, .5)";
    newImg.src = image;
    newImg.width = 100;
    newImg.height = 100;
    imgDiv.appendChild(newImg);
    // alert("hello");
}

function getpostImagePreview(event) {
    let image = URL.createObjectURL(event.target.files[0]);
    // console.log(event.target.files, "hello", image);
    let imgDiv = document.getElementById('postPreview');
    imgDiv.innerHTML = '';
    let newImg = document.createElement('img');
    // newImg.style.borderRadius = "50%";
    // newImg.style.border = "4px solid hsla(0,60%,70%, .5)";
    newImg.src = image;
    newImg.width = 450;
    newImg.height = 400;
    imgDiv.appendChild(newImg);
}


// function Edit_validation(e){
//     // e.preventDefault();
//     let name = $('#p_name').val();
//     let u_name = $('#p_username').val();

//     let returnValue = true;
//     // console.log("here");

//     // console.log("here");
//     if(name == ""){
//         e.preventDefault();
//         $('#editProfileError').html('Please fill the Name js');
//         returnValue = false;
//     }
//     else{
//         if ($('#userName').hasClass("is-invalid")) {
//             $('#userName').removeClass("is-invalid");
//             returnValue = true;
//         }
//     }

//     if(u_name === ""){
//         e.preventDefault();
//         $('#editProfileError').html('Please fill the Name');
//         returnValue = false;
//     }

//     // length check
//     if(userName.length <= 3){
//         e.preventDefault();
//         $('#editProfileError').text(`${userName} length is too short!`);
//         returnValue = false;
//     }

//     return returnValue;
// }





function ajaxReq() {
    console.log('click');
    $.ajax({
        url: "/instaCloneCI4/public/user/ajax",
        type: "GET",
        data: {
            name: 'kushal'
        },
        // dataType: 'json',
        success: function (res) {
            // $('.result').html(res);
            alert(res);
        }
    })
}

function likeFun(x) {

    let postId = $(x).data("post_id");
    let action = $(x).css("color");
    // let id = $(user).attr('id');
    // let action = $("#" + id).html();
    // console.log(id, followerId, action, user);
    // if(color == "rgb(0, 0, 0)"){
    //     console.log(true);
    // }
    // else{
    //     console.log(false);
    // }
    // console.log(postId,action, x);

    // exit;


    $.ajax({
        url: "/instaCloneCI4/public/user/likeDislike",
        type: "post",
        data: {
            post_id: postId,
            action: action
        },
        // dataType: 'json',
        success: function (res) {
            // $('.result').html(res);
            // alert(res);

            if ($(x).hasClass('fa-solid')) {
                $(x).removeClass('fa-solid');
                $(x).addClass('fa-regular');
                $(x).attr('style', 'color: #000000');
                location.reload();
            }
            else {
                $(x).removeClass('fa-regular');
                $(x).addClass('fa-solid');
                // $(x).attr('style', 'color: #000000');
                $(x).attr('style', 'color: #fb3737');
                location.reload();
            }
        }
    })




}


function followFun(user) {
    let followerId = $(user).attr('value');
    let id = $(user).attr('id');
    let action = $("#" + id).html();
    console.log(id, followerId, action, user);
    // exit;
    $.ajax({
        url: "/instaCloneCI4/public/user/addFollow",
        type: "post",
        data: {
            id: id,
            followerId: followerId,
            action: action  // "follow" or "unfollow"
        },
        // dataType: 'json',
        success: function (res) {
            // $('.result').html(res);
            // alert(res);
            if ($('#' + res).hasClass('btn-primary')) {
                $("#" + res).removeClass('btn-primary');
                $("#" + res).addClass('btn-danger');
                $("#" + res).html('unfollow');
            }
            else {
                $("#" + res).removeClass('btn-danger');
                $("#" + res).addClass('btn-primary');
                $("#" + res).html('follow');
            }

        }
    })
}


function removeFollowing(user) {
    let followerId = $(user).attr('value');
    let id = $(user).attr('id');
    $.ajax({
        url: "/instaCloneCI4/public/user/removeFollowing",
        type: "post",
        data: {
            id: id,
            followerId: followerId
        },
        // dataType: 'json',
        success: function (res) {
            // $('.result').html(res);

            if ($('#' + res).hasClass('btn-secondary')) {
                // alert("hello");
                $("#" + res).html('removed');
            }
        }
    })
}


// function postComment(){

//     e.preventDefault(); // Prevent the default form submission

//     var postId = $("#comment-input").data("post_id");
//     var comment = $("#comment-input").val();

//     console.log(postId," ", comment);
//     exit;

//     // Send an Ajax request to the server
//     $.ajax({
//         type: "POST",
//         url: "your_comment_endpoint.php", // Replace with your actual endpoint URL
//         data: { postId: postId, comment: comment },
//         success: function(response) {
//             // Handle the response from the server if needed
//             console.log(response);
//         }
//     });

//     // Clear the input field after submission
//     $("#comment-input").val("");
// }


// function postComment(e) {

//     e.preventDefault(); // Prevent the default form submission
//     // // Get the form data
//     let postId = $($this).data("post_id");
//     let comment = $($this).val();

//     // Create an object to send as data
//     let data = {
//         postId: postId,
//         comment: comment
//     };

//     // console.log(data);
//     // exit;

//     // Send an Ajax request
//     $.ajax({
//         type: "POST",
//         url: "/instaCloneCI4/public/user/submitComment",
//         data: data,

//         success: function(response) {
//             // Handle the response from the server as needed
//             alert(response);
//             // You can update the comment section or perform other actions here
//         }
//     });
// }





function showPostModal(element) {


    // console.log(element);

    
    const post = $(element).data('post');
    const user = $(element).data('user');
    
    // console.log(post);
    // console.log(user);
    // exit();



    $('#commentModalsrc').attr('src', "http://localhost/instaCloneCI4/public/uploads/" + post.post_Img);
    $('#commentModalProfile').attr('href', "http://localhost/instaCloneCI4/public/user/name/" + user.userName);

    if (user.profile_pic == "") {
        $('#commentModalProfilePhoto').attr('src', "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAAMBAQEAAAAAAAAAAAAAAQQFBgMCB//EADIQAAICAQIBBwsFAAAAAAAAAAABAgMEBREhMTRBUZGxwRIiIzJCUmFxcnPhExUkYtH/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAMAwEAAhEDEQA/AP1oBgqAAAAAAAAAAAAAAAABSFAjAYAAAAAed10KK3ZZLaKA9AaLJ1a6xtUeij2sxHk3t7u+3f62MHUA5ynUcqpra1zXuz4m4ws6vLTSXkWLli/AYMsAAAAAKQoEYDAAAADm9Qy3lXtp+jjwgvE3epWOvBuaeza8nt4HNFhVIAEUsJShNTg9pJ7po+SgdNh5CyceNq4N8JLqZ7mn0Gzay2rfg0pI3BFAAAKQoEYDAAAAYOsrfAl8JLvOfOpyav18eyrplHZfPoOXacW01s1waLEQAACkKBsdDX8ub/o+9G8NZodHk0zua4zey+S/JsyKAAAUhQIwGAAAAGp1bAcpPIoju368V3m2Pmc41reclFdbewg5MG5zP2y2TlK2MZvprT49i2MCVWJvwy5bfaf+lRjGVg4U8qzkca0/Ol4I98evTItOzIlN9Ti0jb0WUSio0TraXIotcAr7hGMIRjFbRitkuo+gCAAABSFAjAYAHjk5NWNFStltvyJcrPLUM2OJXw2dsvVXizn7LJWzc7JOUn0sDOydWus3jT6KPw4y7TAnKU3vOTk+tvc+QVAAAUEAGXj6jkUck/Lj7s+Jt8PUacnaL8yx+y3y/JnOlA60Gp0vUHJqjIlu3whN9zNsRQpCgRnzZNVwlOXqxW7PpmFrE3HAml7TUX3+AGjyLpX3Stm+MnydR5FBUQFAEBQBAUAQFAA6LTch5OMpSe84+bI502ehT2vth0OKl2P8ijdFIUiozA1rmL+pGwMDW+Yv6kIOfKCGkUEBBQQAUEAFBABTYaHzqf233o1xstD51P7b70BvCgpFf//Z");
    }
    else {
        $('#commentModalProfilePhoto').attr('src', "http://localhost/instaCloneCI4/public/uploads/" + user.profile_pic);
    }

    $('#commentModalProfileFullName').html(user.fullName);
    $('#commentModalProfileUserName').html(user.userName);



    $('.commentModalInput').attr('id', "comment-input-" + post.pId);
    $('.commentModalInput').data('post_id', post.pId);


    $('.ommentModalbutton').attr('id', "comment-input-" + post.pId);


    $('.comment-input-form').attr('id', "comment-form-" + post.pId);


    // $('#postPid').attr("value", post.pId);

    clearTimeout(fetchCommentsTimeout);

    // let post_id = $(element).data('post_id');
    

    // comment-input-form


    // console.log(post);
    // console.log(user);

    // const requestData = {
    //     post_id: post.pId,
    //     // Add more data as needed
    // };


    fetchCommentsRealTime(post.pId);

//     const requestData = {
//         post_id: post.pId,
//         // Add more data as needed
//     };
//     $.ajax({
//         type: "POST",
//         url: "/instaCloneCI4/public/user/fetchComments",
//         data: requestData,
//         success: function (response, status) {
//             // alert(response);
//             var data = JSON.parse(response);

//             // Access comments and user data
//             var commentsList = data.commentsList;
//             var userList = data.userList;

//             // Now you can work with commentsList and userList
//             // console.log("Comments List:", commentsList);
//             // console.log("User List:", userList);



//             var commentsContainer = $(".comments-container");


//             // Clear any existing comments
//             commentsContainer.empty();



//             // Loop through the comments and user data to create the HTML structure
//             for (var i = 0; i < commentsList.length; i++) {
//                 var username = "@" + userList[i].userName;
//                 var commentText = commentsList[i].comment;

//                 var commentDiv = $("<div class='d-flex flex-column justify-center-start align-items-start my-4'>");
//                 var usernameElement = $("<h6>").text(username);
//                 var commentElement = $("<p class='text-muted'>").text(commentText);



//                 commentDiv.append(usernameElement, commentElement);
//                 commentsContainer.append(commentDiv);


//                 // console.log(commentsContainer);


//             }

//         },
//         complete: function (data) {
//             // showPostModal(element) 
//         },

//         error: function (xhr, status, error) {
//             console.error(error);
//         }

//         // fetchAllCommentFn();

//     })
}




/* ************************************************************************fetch all comments ****************************************** */
let fetchCommentsTimeout; // Variable to store the timeout ID

function fetchCommentsRealTime(postId) {
    const requestData = {
        post_id: postId,
    };

    $.ajax({
        type: "POST",
        url: "/instaCloneCI4/public/user/fetchComments",
        data: requestData,
        success: function (response, status) {
            var data = JSON.parse(response);

            var commentsList = data.commentsList;
            var userList = data.userList;

            var commentsContainer = $(".comments-container");
            var shouldScrollToBottom = isScrolledToBottom(commentsContainer);

            commentsContainer.empty();

            for (var i = 0; i < commentsList.length; i++) {
                var username = "@" + userList[i].userName;
                var commentText = commentsList[i].comment;

                var commentDiv = $("<div class='d-flex flex-column justify-center-start align-items-start my-4'>");
                var usernameElement = $("<h6>").text(username);
                var commentElement = $("<p class='text-muted'>").text(commentText);

                commentDiv.append(usernameElement, commentElement);
                commentsContainer.append(commentDiv);
            }

            if (shouldScrollToBottom) {
                scrollToBottom(commentsContainer);
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        },
        complete: function () {
            // Schedule the next fetch after a delay (e.g., 5 seconds)
            fetchCommentsTimeout = setTimeout(function () {
                fetchCommentsRealTime(postId);
            }, 2000); // 5000 milliseconds = 5 seconds
        },
    });
}

function isScrolledToBottom(element) {
    // Check if the element is scrolled to the bottom
    return element.scrollTop() + element.innerHeight() >= element[0].scrollHeight;
}

function scrollToBottom(element) {
    // Scroll the element to the bottom
    element.scrollTop(element[0].scrollHeight);
}



// Function to stop fetching when modal is closed
function stopFetchingComments() {
    clearTimeout(fetchCommentsTimeout);
}

// Example usage when closing the modal
// $('#yourModalId').on('hidden.bs.modal', function () {
//     stopFetchingComments();
//     // Additional cleanup code if needed
// });



// function fetchAllCommentFn() {

//     $post = $('.commentModalInput').data('post_id');


//     // alert($post);
//     // exit();

//     // postPid
//     const requestData = {
//         post_id: post,
//         // Add more data as needed
//     };
//     $.ajax({
//         type: "POST",
//         url: "/instaCloneCI4/public/user/fetchComments",
//         data: requestData,
//         success: function (response, status) {
//             alert(response);
//             var data = JSON.parse(response);

//             // Access comments and user data
//             var commentsList = data.commentsList;
//             var userList = data.userList;

//             // Now you can work with commentsList and userList
//             // console.log("Comments List:", commentsList);
//             // console.log("User List:", userList);



//             var commentsContainer = $(".comments-container");


//             // Clear any existing comments
//             commentsContainer.empty();



//             // Loop through the comments and user data to create the HTML structure
//             for (var i = 0; i < commentsList.length; i++) {
//                 var username = "@" + userList[i].userName;
//                 var commentText = commentsList[i].comment;

//                 var commentDiv = $("<div class='d-flex flex-column justify-center-start align-items-start my-4'>");
//                 var usernameElement = $("<h6>").text(username);
//                 var commentElement = $("<p class='text-muted'>").text(commentText);



//                 commentDiv.append(usernameElement, commentElement);
//                 commentsContainer.append(commentDiv);


//                 // console.log(commentsContainer);


//             }

//         },
//         complete: function (data) {
//             // showPostModal(element) 
//         },

//         error: function (xhr, status, error) {
//             console.error(error);
//         }
//     });
// }






// Use event delegation to handle form submissions
$(document).on('submit', '.comment-input-form', function (e) {
    e.preventDefault(); // Prevent the default form submission

    let form = $(this); // Reference to the form that was submitted
    let postId = $(this).find('input').data("post_id");
    let comment = form.find('.commentModalInput').val();


    console.log(postId, " ", comment);

    $.ajax({
        type: "POST",
        url: "/instaCloneCI4/public/user/submitComment",
        data: {
            postId: postId,
            comment: comment
        },
        success: function (response) {
            // $(".comments-container").load(location.href + " .comments-container");
            // Handle the response from the server as needed
            // alert(response);
            // console.log(response);  
            // showPostModal(element);


            // let username = response;

            // var commentsContainer = $(".comments-container");


            // var commentDiv = $("<div class='d-flex flex-column justify-center-start align-items-start my-4'>");
            // var usernameElement = $("<h6>").text("@" + username);
            // var commentElement = $("<p class='text-muted'>").text(comment);



            // commentsContainer.append(commentDiv);
            // commentDiv.append(usernameElement, commentElement);

            // window.setInterval(function() {
            //     var elem = commentsContainer;
            //     elem.scrollTop = elem.scrollHeight;
            // }, 5000);

            // Optionally, update the UI with the response data


            // fetchAllCommentFn();
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });

    // Clear the input field after submission
    form.find('.commentModalInput').val("");
});

function loadAllComments(element) {
    // console.log(element);
}



// setInterval(showPostModal(), 1000);



