<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

    <head>
        <title>Chat</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
        </script>
        <style>
            body,
            html {
                height: 100%;
                margin: 0;
                background: #7F7FD5;
                background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
                background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            }

            .chat {
                margin-top: auto;
                margin-bottom: auto;
            }

            .card {
                height: 500px;
                border-radius: 15px !important;
                background-color: rgba(0, 0, 0, 0.4) !important;
            }

            .contacts_body {
                padding: 0.75rem 0 !important;
                overflow-y: auto;
                white-space: nowrap;
            }

            .msg_card_body {
                overflow-y: auto;
            }

            .card-header {
                border-radius: 15px 15px 0 0 !important;
                border-bottom: 0 !important;
            }

            .card-footer {
                border-radius: 0 0 15px 15px !important;
                border-top: 0 !important;
            }

            .container {
                align-content: center;
            }

            .search {
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
            }

            .search:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

            .type_msg {
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                height: 60px !important;
                overflow-y: auto;
            }

            .type_msg:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

            .attach_btn {
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .send_btn {
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .search_btn {
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .contacts {
                list-style: none;
                padding: 0;
            }

            .contacts li {
                width: 100% !important;
                padding: 5px 10px;
                margin-bottom: 15px !important;
            }

            .active {
                background-color: rgba(0, 0, 0, 0.3);
            }

            .user_img {
                height: 70px;
                width: 70px;
                border: 1.5px solid #f5f6fa;

            }

            .user_img_msg {
                height: 40px;
                width: 40px;
                border: 1.5px solid #f5f6fa;

            }

            .img_cont {
                position: relative;
                height: 70px;
                width: 70px;
            }

            .img_cont_msg {
                height: 40px;
                width: 40px;
            }

            .online_icon {
                position: absolute;
                height: 15px;
                width: 15px;
                background-color: #4cd137;
                border-radius: 50%;
                bottom: 0.2em;
                right: 0.4em;
                border: 1.5px solid white;
            }

            .offline {
                background-color: #c23616 !important;
            }

            .user_info {
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 15px;
            }

            .user_info span {
                font-size: 20px;
                color: white;
            }

            .user_info p {
                font-size: 10px;
                color: rgba(255, 255, 255, 0.6);
            }

            .video_cam {
                margin-left: 50px;
                margin-top: 5px;
            }

            .video_cam span {
                color: white;
                font-size: 20px;
                cursor: pointer;
                margin-right: 20px;
            }

            .msg_cotainer {
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 10px;
                border-radius: 25px;
                background-color: #82ccdd;
                padding: 10px;
                position: relative;
            }

            .msg_cotainer_send {
                margin-top: auto;
                margin-bottom: auto;
                margin-right: 10px;
                border-radius: 25px;
                background-color: #78e08f;
                padding: 10px;
                position: relative;
            }

            .msg_time {
                position: absolute;
                left: 0;
                bottom: -15px;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_time_send {
                position: absolute;
                right: 0;
                bottom: -15px;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_head {
                position: relative;
            }

            #action_menu_btn {
                position: absolute;
                right: 10px;
                top: 10px;
                color: white;
                cursor: pointer;
                font-size: 20px;
            }

            .action_menu {
                z-index: 1;
                position: absolute;
                padding: 15px 0;
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border-radius: 15px;
                top: 30px;
                right: 15px;
                display: none;
            }

            .action_menu ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .action_menu ul li {
                width: 100%;
                padding: 10px 15px;
                margin-bottom: 5px;
            }

            .action_menu ul li i {
                padding-right: 10px;

            }

            .action_menu ul li:hover {
                cursor: pointer;
                background-color: rgba(0, 0, 0, 0.2);
            }

            @media(max-width: 576px) {
                .contacts_card {
                    margin-bottom: 15px !important;
                }
            }

            .container-fluid {
                max-width: 96% !important;
            }
        </style>
        <script>
            $(document).ready(function(){
                $('#action_menu_btn').click(function(){
                $('.action_menu').toggle();
                });
                });
        </script>
    </head>
    <!--Coded With Love By Mutiullah Samim-->

    <body>
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-4 col-xl-3 chat">
                    <div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header">
                            <div class="input-group">
                                <input type="text" placeholder="Search..." name="" class="form-control search">
                                <div class="input-group-prepend">
                                    <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body contacts_body">
                            <ui class="contacts">
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                                class="rounded-circle user_img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Khalid</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg"
                                                class="rounded-circle user_img">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Taherah Big</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg"
                                                class="rounded-circle user_img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Sami Rafi</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="http://profilepicturesdp.com/wp-content/uploads/2018/07/sweet-girl-profile-pictures-9.jpg"
                                                class="rounded-circle user_img">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Nargis Hawa</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg"
                                                class="rounded-circle user_img">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Rashid Samim</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ui>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-6 chat">
                    <div class="card">
                        <div class="card-header msg_head">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img">
                                    <span class="online_icon"></span>
                                </div>
                                <div class="user_info">
                                    <span>Chat with Khalid</span>
                                    <p>1767 Messages</p>
                                </div>
                                <div class="video_cam">
                                    <span><i class="fas fa-video"></i></span>
                                    <span><i class="fas fa-phone"></i></span>
                                </div>
                            </div>
                            <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                            <div class="action_menu">
                                <ul>
                                    <li><i class="fas fa-user-circle"></i> View profile</li>
                                    <li><i class="fas fa-users"></i> Add to close friends</li>
                                    <li><i class="fas fa-plus"></i> Add to group</li>
                                    <li><i class="fas fa-ban"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="data:image/jpeg;base64,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"
                                        class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXGBgaGBcXFxgXFxgdFxcXHRcXGhcYHSggGBolHRYVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGyslHyUtLS0tLS0tLS0tLS0tLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAECBwj/xABBEAABAwIDBAgFAgQDCAMAAAABAAIRAyEEEjEFQVFhBhMicYGRobEyUsHR8ELhBxQjcjOS8RUWNENigqKyU3OE/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAECAwQFBv/EACkRAAICAgEDBAIBBQAAAAAAAAABAhEDIRIEMUEFEyJRMjNhFCNxgeH/2gAMAwEAAhEDEQA/APQq9PM0gbxz13bxv5rxnb+c13kVKbXNOjw4VALACNXtOY24CbCFfNodLX1AAwZZY4MiILhEDsiZtxOnNUfpPiKdWMQwAO/W0FrSdTeXkuIJ1DRKmpplfktf8JRWbWc0gPptY64uWkuZbX4SQ8Rujgrr0hq5g5rg46RbSI08JXjnQzpg7AVn1GsFRtRkOYXEGxkEG97nirmOmxxbbYd1KSXSarR2QZzBoEmADyKhKq2aceRxkn9CnpoGOytboAdL8PVeYVWQTxk+69E6SuljKosHkgCZMa35gqnfy7alSoC6L25ws+J6o09TJTlyiAbNDutaBqTaPP6FfSGHORoDKNAWF8gM21nevn2hT6pzX5hLTLeIt7EWK9i6KdJ6NejTaajBVa0Nc0mDYRInWVZRkZYcViC6jVD202gscIAjUEQTwuV4rtDFmlZph2s2ieHeYPkrx0yxpnqmk6SeF5i2h3a8V57jgKjoiQDabkxIJ9ChLdhekK62KrPu6XRxmY8NVJRqPGkDvGikoVQHQ2bbtN+hBKkq12zDjra14n2UhA7sQ/iJ7kNXa48STyR73AGMpka6QPX2XHWuvkbpvQAJR2c49pxDe8wpHspCwOY8hbzNvJRV6jnGCQY3WP3RWGwObUwOIiPZAA7WuJ+ENHEwPr9F0eqGsuPJGHZzeTuRdr5iPVY3BHcyOcA2QAOGM1aw+Q+yyriQ21xyCIds8zJdHfI9ioqzLRDT4n6piAztFs2D/MLn/aLdAHDmY+i5xNEHS35yQVQXj2ugAmrip3+32UZfOoEodzY/dFYBgLmtcQGkgE6wCdbJMaLD0XpZi93/AEtHq5XTZdd7aNekwCHgF17wJFvOVHT6EOwbBVZVbWpuaM0AgCYggzDhrw1Rez6WZ7WBoGYEbxaDvJNrBVWpIspxkgF1Wp1bXNdEDqrawO0IUOCpONWmTJOdtzzMazzRbXZqVOoAMjqj2tcB2C4NiBxPZPktU6rmkOBAgg6Dcpxk3BoJv5II6p/4FiYZhwH+YLazcWavcRRMZWL6DS1zHQ5pgAghzjqXT2b2jW66pUDTqt6xzmU3uAqgSS0kw+wNxFwE/Z0bZQw1VjSXFwkk6y27dLSOO9C7ZdSp0qbxmJqMl3a5g+hOvNW7iUuSyulGkC4rolhTX/o4sClBJfVYdRfLDIInSTwKS4+pToNFNpeRmJMOJI+UAmzeMDdxXdSg+R1dCoC+MhcDlkn4pbYnS5Qm1cFUa91OqYLYOgNuMjXvUqfllUYtSobYOp12zze9Ct3nLUE+5cPBVnEnK5zhx99U02DULevpXAdlMR8mb6EeSW7Sw8XBsTB74lCVSY0viAuxBO9S4SscwvvHuhHs1Cn2ZhnVKjWtmSR7q0rXcve0qzi0OBmAbkk5i0WEndoq2KxhgBu2JO8edjonm1HhoYNcr2g33EO95Vb2thSycrszSRB4gnsn1jkQUgbJWiS4kuMncDpxJ3IhhaBZs905fGBB8Uqp5mkBxOXi7NB36jcmrMKCAWl27Ql7b8HC48QUMDH1HE2ad3ICO7cozh3v+J2UcCHZfT6roNM2mf8AMPAb/Bcio4T2r30BHoQhAdEOb8JbHIkTy4FDV8XV+b1j6LVSTfKTzAj7BDVqZFiT5T6oA76walrhxgz9Qo31mfMfI/usFASIDr6TZcnD8u8Xn90xHXXu/TVt4j3ChqYmof1zHMe0LsYPh9Quzg5bb4gfNMAR2Kdo8X5k/VcdZ+H/AEU1Si4W1HCELk5JAd5xvH55rttY/N9FzRaN65dT5oAunRPpDXaw0nF1ShGWILuqJktI+VskhN9hbQZWYGzq3QmJ3Ec1RNj7UdQcbWcC0931V1wWzMNlo56mRpaDnB7YeIm8HW27eq+NOyxytIe1qAIaCJDPhBJIbaLDQGCRbitdW1dUNs0TI7FjDSaYl/MDjx04wisLj84MQI1GVoPLQJ2iptg+bmfNYmHXu+ZbRofJm34tjy+mwgwSL6xuMdyX4XDU6tFrXMJLDUpmCNA4OYYmR39youN2vWbU+UzIAaBodIA/JVo2X0hey7WjLUOZ5y/CYguEjukKMvslhbuh9VZUDIYwEiwzvyxzsDKp3Txz6Zp1HBmaIImQQ0ggEaibju7lc8VtKWtcKmbfaBA0Lrd6VYrZ7Kjy97Gvfxd2tNNbJwp7J5OcHT0VKkzrNotL2ZG1mN1duqUhlcI3Zgg9v4J1Bz2OhwDtRvtAPfBE9xXoFPDgQAxttwjdyjcl/TijRqYUtZlFSm4OgCDrDt28EeSjJvkirk4nlsk6qy9EMOAXPOoAA4wTJ8TB8lX3U7wrL0StTe/i7xhrTHuVaM52hL3PEwC6e+IhQMYAMr3jS2hmdYMme5d16TnPBBtz019DCzEbNgdkzG4ye+27dfmgQXiMGAyC3M03BGt50/N5QGHpgNcGkggAtPhlMnhZp8Udg2viHOtltqY5X0i3mhamIAbMSGkhwGoG+O783IAHbXmzoPM39QuXPINiSP7gR5ESFDXe2QRZcPqcDu8x3IGgym0QTbdu/OakETOn5uSqlULjM2Redw3juKVjoLquabfngoyRvv6eaFNcb9O9a60agwmFHdTXswe68hDurHh9Fy6sDqR9udly4zo4JkaN1KkqBx5Lqowje36+iGqNQBM4W/Ch3HcugDExC0XygDnMmGCxHZyybacI/YpY8QpcHUyvadwISYy9bD2cSDUqPJefhE/4Y5DcT+yZMrOpuzDUeo4LWy8Z1jN2YRPO1lDjKxNyq72DHP8AvCz5XeixVnOeI8lidioA22JZRrttoTH/AFgfVpRmxsVTDRmIubk35g8d672cHOw5Y4dumXCHfNTIqNB43BHmpul+AZVZTxmHhrakGo0GMj7g27wQecHQp6Yskfo72ltUNqANLSXtyyHANgyB2pgapps3bNMsaHn+pEFrRcETzgyLrzetLSI4+Ewp6zWudnzTETxdbgfhO7XcklXYlxuF32Lk7bxbUDgDbNIlpIBEaC5Jsgsfif5lmZz221AMuJFwHchuVeqU5pF7Nzhm4jh4SoamJOjSQN/AfdR4u7NePPCUHCa/wb6v4nHhDfG0+qsHR8ZGjlc+31Crzqjv1HUWn3VnwQy0QADMEkxeT+eytMjVMIxOEksiwOU8+X1UWJaBUmBJEbwHC+vOwHgjesDerJ32+vpMJRtPEwQJ+ExutB177HzQImosgkgmC05ZAkcjx3Ku7SrFry5sQ6ZHH95BUzcduFiJ3eDlwXZwQRv7Q3jmEAAhwO6VtrDrp9E32FsttR+V099h6pjjOjNQXAkHeBZQeRJ0WxxNqyt0pGg+yLdSc0STrwCa4PZTmH+qwjh9xx/dHuwAqA+kyoc9k1AqbHiYi/fCytVn9IHqm2J2WZj9XDcf2QGJ2ecpI+Iat/ZTUiEosXOj9rfVazf9IjjP4FzUYdCPRQlo3lTINEtV9vyB3LimT+fnNaMLXWwmRZskb5UzAO5D9aN3nClw9KSPdAWcV6JHcoaeo7wisceem5QMYZE8QkMsOBxbqbtfDiE7NTMA4FVuZHPci8BjA0w423qADXPyWKXrqfzNW0goYYih1eIOhFSnSqyNHFvYeR36+KHr0mEPY6A3IMpgZg5vwjSS0iAY79ykJLm0XOEFtR9IxoG1RLY/7gpMTh8xFrkD9x5hS8g+wqFGm2k+mWglxJDyzQQLAm/E6pJU2VUy5mjM4n9JtHH3VrZRa3W0rYc1o7MeWnehRSJyyylBR+ivYLZ5aHsdJz5A6JganUcyEyw/R/qnh7agaGmwc2SRvB4zJTDryeHr9VrUi5OlkMqS2Mto9H6GKwjqjaeWqztBwsSGuOZpA1loPmqtiqxa6ZsHNB4WFx6r0LowTlcAwhs753x9ivN9qkFlRukkkeIHt9FK7H5GBrB+sgSCBEHTgqxteuesdfX33+onxTn+Zzm2uUEbpgR+eKS7TdmJPE/X/RAxYa51lN6WFL8r2zLvtdJmtJMC5XrfQ/osamGa4dh4uCQdY0PEGyryTUUW4ocmKth7HeDJkcwB7Qr9hGMpMmpJaBv38gAEXsjAEDttylpMiZHIzvslvSPESYmwtAke3csblyezYo0qRXeke2hUJaGBjByuefLeqnUx7m/C4z3nTn+ye4ykXGzB3fgSnF7JzauAHAx9YWiLVFMouxbi9sgwHCSOBvK3T2sHESRPke6d6kd0dbudPcfooH7Ey8VLlEgoSCH4Ev7TYnvHCygqbLzSHABw3wT6tRuBokEXsrFSwwcBI+6i8jRasSZ5xi8MWmCO5QCmNfZejYrZ7SCHCe9V7HbHpCTA8LKay2VzwVsrTQ0b/VSmraw8dSia1Om3T6oGrB0KtTszyVEtKk0XcbcDvWqcOqC28IGUx2aJe2x3+x+6TEhvisP+oaKNl9yaYSmSNJChxGEymQIURgvVt+UeSxT5DyWIFZZaTi9r25Y7Ie3jmY4EW8XKXHgENcORB39oT9V3haRzAgGNDusQQfdbbQinJ/S4tM78jvsQm+4l2FpudZKJw+znuvZvfPsnGVrdIHcFo1+amRB6Wymj4jPmPqp20GNiAB7qN1fmohXkwL9wJSY+4aK+XQkdxhUrpJs8sbTdBh5f5NcWa8wPRW4U3ndHejdq7NFWjhGkA/4gkf3k+8qqc+NM04MLnJxZ5U6vle08onvEj3RtbDNcy36rjz09Crd026D9W1houGYN7TTa8buCp+zmvkMIM3gExfh5j1TjkUlojLFKJnQ7Yz6+Mota2QHB5/tae1r3r6QweDDWwAvK/wCE2EnF1HgdkUzHe4tkd+q9fpLPmdyLYfGAs2nhDEtsVTNsYXEC7aXWdy9JcyUPXozoqePkshl8M8J2vsvaDv0FjeAtbiYuVVttbMrUXSc5aQIcR2TxuLW719E4vCvM5Y7iqVtXZtRriere2ZnJdp8NFbDLXgcsakeebA2C+tRdUJLb9g7jAuYi4mLrnC4h9N5pvM+oPcTcK21mO0l/+SPZQ0+j4e4l1N2szJHoFNzsI4mvILs+iCYg+SteD2ZLZ1WYPZMQY5c45q17JwkNjwVLey9aR57tqlkkqn45zn74Xp/TjZ56p5Gv7hePbSznPEjLoDqb3MK3FspzS0RVdm5tH34IOts+o3UeKI2aKlSo1gPxGNAQBvOiOr1alF/V1e0DoRMH7FaLaMtJiF9NM9hsmXRpYc51+iK21hQKZeN8R4kJ90X6MF+EZUDu255ME9nKJHnaU7tEJLiQuwcgDMRy3JtsrZDqrgHDsjU7iBu709wWwKbbvOd3/iPDf4pqwAaeSVMrcyL+TZ8jViJlaTpkLEr6v4EHiapDnN3Oh+vzCHeqnxG18HSs+sHkbm9r/wBB7lVzbPSxj3TTpmIiXBree4E+qbRNDykHOaIbuudBbW5WqrQ0S54A5fc2VGrbaq3h+UHWPufFQ4fD1axGVr3kmxgn/wAjb1T7CouGI2xh2NzSXgmBFwSNRuHugh0tq5XCi1rGgSc5kcoAiXa+RQ+zujIe3+piW0yLBgp1KrvPstHmn2ydjUKbSHYek8n9dTO49+Quyj996hyvsiSXkrTa+OxQn+sWXu2m8U/NggDmZXqnQ/BBuEw7TUZV6uo4Zm5o7ZLsvaANs0TySfD0crcgc/L8uZ2XuyzpyVg6PEFr6Wmjm+Fj46KrLGTjs09POpgXSoOqYk02yZ3JlszoyynhKjXNBe7M4E6i1iOGhTDZ+DFV4qOtUAIncUXQDv6jXTEfgWVWjbll8eC8UVP+GWHLHYmREuaWndBB3+Sv1J91UeiRLX1aZEGQdLEDQ+UWVow773Tm/kZ3HQxaJXfV2UNJyKDVOOzLK0AV8PyS6tRBT+qBF0DXa1SlEuxZGI3bNadQu2YFo3fRGPAUTsU0b1DsaVb7GmbPndZHsw0aKLDYxrj2U2pMEJxSZny5JR0ys9JcFmpPHFpXljtnTff9l7VtenLSvM304qOHNJtxZfi+cNlUrbPIJLew46kNFxwNpQGJ2L1rgXOJPdEfl16A3Dyo62BH5+c/RP3WN4kUTaezIw75vka5w7wx0eVz4K7dHsJ1WFoUyILabZ7yAT6kpdtLZhqtcwODZBud+7L3mYVhzbgtOF2jJ1daSOw1aAWg52gC5yk8VaYyWyxDzyWkCs8iobKr1BmZSeWzBMWHfKs2zejNNrQ59UuqX7LaM5ZbHxOdFpO5OaWDawuG+e0ZBBPG1j3o2myyi02WWV/BdH8r87hTLpkEh9u8TkP7p71T3j+pUdU4AuIbH9unhopoXYHNPihWyNlENFgB3QFknNEWiff9vNS2WZwmI6auX7WGGisZAYRI+adWjmbrh9YQqh00rE5Gk2vA+vMwk1qiUW0z3vZ4pVmNq0iMr2ggjeCEW7J8A1j8914D0D2/jabhhqP9RjiZaZ7Em7g4aC+i9c2FQqtxAdUdOambbhdp+ixT+Lo2cOUXKwtmygypnae9TFMKoQtVirmiUJ33Mo1IRZxPNAFCV8RCSlRL2lJjGvjgRqltfGgXlLMXtCN6R43afNPk2XQxRiOMftbh5pRQxRrVW09zj57/AKJXQc+u+JsrKMB1bWupjtMuOdrz5lBdaSLTg9n9WBDbJrhhbW3svKsV/ECvTqZXYdxA/LcVZdg9NmVwYOVw1a4QR4cOasi1HZiy4py8ln2m6AvN9rkiqHNEtE5o571ZNo7caTBIVRqbWYKpk2hRlLk9F+GHCOxphHAomqyyr+G2oMwYGuuTDgLDhKcHESFCiwXVoFRp5/Qo2d6U7Sq9pscfoVaqOwHm5e0DlJWrC6Rg6yO0xX1vNa61PG9HG73nwACKpbDpDUE95+yv5GLiVjruSxWz/ZNH5B5n7rEuQcTzylhwBEWUzaaJ6orfVKwAbIVmUKbqlnVlICOyhczXginNsoYJQBC1iQdK8AXtY4C7XHduIVl6k8fBdHCzu+6GxoB/hDg4rVXxHZDTzvP2XsXVDXf+fYqodEdmikC4CC8kxppafRXGdCsE3cjVK1FERqiY3gSoarluqYMISpVvCrky2ESKtVhLMZWOqJxL0txrxEWlQNC0VvauOINknDXVDeQ1PcVhQZ3lIsc98EMaSeXsrYUE2/BY9jvpsgD8KstOuNF5lgDiqRzVcO87wWFro8LFPaPSGoIy4Sq7vEeyk0RSkx5tPCNfqO8wvPtsgMqdiQ4WDhY+is9XpnVFn0AwcHBzfUhLauOw9R2ZwyHUzcHiBCaJODoRVMZW/UdURsnD9vM7tO5390VjcZQJAaR36e6ifUDNDbjZNkfxGWcB0oh2LgWSOtipDYN1JnmBxSonF8nSDTXzGSi8J/FLqqjsNXpXY7I2oDYgRllsTMQlzLFVfbGyajsfnynq3Fjy7d2WtzCeMhW4mth6hi4uMD2P/beIcJaxoHcT7lDu2vWd+sjugR6JXh8aYaWyOSOqVJJMeSug7jZycq4ypEn8/V/+R/mVihz8liZXbNRzWNbOgnuurY3Z9IERTbrOkm3fzR1mjcB5JcyagU1mz6p0pu8o91O3YVY/KO932BVjq4+kNXt859kJV25SHzHuH1MI5MdIAp9HCR2qnk37lEUujlIal7vGB6KM9IgbNpn/ALiPoFC7blQ7mjwJ90bYWkNaeyaQjsDxv7optFrbBoHcAq0cfWefjN9ALeUKwbKwjmiXklx4kmOWqqyy4osgrJadP0KYUnWhDxD43ELb+yY8ljUi6W9A2IeTNrj1QdV8gXU+PcYzDdqk1bGtEGeyfRQk9mjHHRlerG9LcRWkc1PiKoIsljgZjXmmiyiG5KY7JwQmXBRUqE7k5wDALEFOwJ34dutkBiMc2me0zxCcGnASTadKQbT4JpjTIa21aNQEFzXDg4D2KruO2Vh3mQ2P7HFo8hZA7V2OSTAcPNJqmGrMtmeB4q5bJc68Bu0NkURZofPN5Stmx3kf4jomwm37o/DYZ5d2nE+aaNZlanyorklIX7PwkCXGY0XbNSfJaqvJOUeN1I0WSbOj6d0/KfN9kdjVO8PgBVoEyBDrTNjzMWFykgNuYKf7BeS1zZMET5qzEk5bMnq1xm2Q7NbJN5DQb6ab12cQePqtj+m10/q7LePM9yCLgtjSSpHAtydsL61bQfWd6xQoKLPV2hVdq93gY9kM9zjqSZ4rkrbjCdEjIUVeGgucQ0DUkmB5ITaW1W098u+UfU7lXNq7VqVRBDQAZiT6ooEhq/pFSaTlDndwgeZKjp9L6Vg5j2ibnsujjYESqpVqG8geBQdWDofBOiR730UxGEqtzYeq2o79W57eRYbt8k9c6F8x4fEvpPD2Pcx7dHNJBHiPZeldDv4lZy2hjCA42bXEAE7hUGjSfmFuQWLNhl3WzRBp6PTa3aFtRopGv61nBw9CELTqQVlXsnO3Q6/dZbLXD/gOatyDYjUfm5INtYLV1PxbPsrFi2CoJFnDTnyKQ4qobgiCNRvUGaYOypjaZbIM242I8OC23aYF/rKl2vgw4ToeI/Lqo4oVKZI/PJWximEnR6DgdpNO9N8NigYgryKjtgtNyU0w/SUjfbw/Ap+0/BX7iPW6VYHepKjgvOcH0rB1cEcOkgj4rd6XBj5IsmKcOR+iV18K06gJTU22HWkqF+1rWT4MfJB1TCtboAkm0qt8rRJ5LjE7YJs2Z90EcPUccxdlUuNdzV03TyzPS0TUKETvJ1Uj2wJ0Cjq41rBAh7uWg70BUxj3fEfBFHoI8MUeMQ0vhjnk2Any3qLZ/SNhd1bJk6OsBYEnW/BTNoZqTm73NI8wiOiWw8NTB605nuBE6FunwjcfdX4pRim33OH6tilOSS+jf8yXXMk7vt7LtkqWtgQx0TPAjQjcQugAtC2ebcWnRFB5raIy96xS4sfty+hcemdMH4CR/cJ/9Sgcd0qc+Q1xY3gNf832Shz1C4ooYX/MsM9onxhQ1Hc3Dxn6oR4HALWfiPJMDp73jQz3qE1mk3kFF02tdo6DwdceChr4Wd0cxogCMttxCgq0vJcua5uhWCvxSHZf+hf8QTQaKGKDn022ZUHaewfK4E9sDjr3r1LZe1aNdmejUbUZocpmORBu08iF84SDyU+z9oVaDxUovdTeN7TE8iNHDkZWXJ0yltF8M3hn0U7s93tyQG0abag4OGjhu+45KldH/wCJjXxTxbch06xgJYf7mat7xIVlq4xrgHscHNcJDmkEHxCxThKHc245KW0JsWHNOV4h27e13cUlxjAZkQVZcVUa9uV1/dV/GNLde03jv8eaIkmVvGYG5MfZLamEhWaqEDXp8lojIzyiI+qK6ax24nzTLqwugwKfJkOIHTY/5iisPh3G5eY8l3lGgRLIAhJyNvR4FlyJPsjuiMvw256nzK25gPxEu71H1i11nC/ddVnpYRUVSVBNKk0aDwC6bgQ42ssoYJxu45G89VvEbUYwZGGeaCUnFL5BnWhrmtB018FHtekDUD26uHr/AKITBjPe95uiKtMtLWA9qQWuNm3GhPHVTSOP10uU0/4GuzmtqMFMuDngSzeXZjdo8iQOSFdjmB5YIn6jUDut6qHC1+rDqhDWVqUuzD9fJvEadyRUQQesce3Np75Lj7rd0qb2zBHDHnzLNmfw9Fi56w/IPMra6Vm3X0UZ3eo3PK25RuK57PMGdZO+65f5LlwBUZkcx6pBZJ1sa+YRdKvzS7NP2XTDwQMPcAUHVocFIyqui+e9AABCwVeKIqDj5qB9JAjZMiyJ2VtuthnTTd2Tqx0ljvDceYulzgQszg6qLSemSjJp6PUNk7fp4hsskOHxMPxN9O0OYU1erqvKqVV1NwewlrhoR+aK67E242u0g9mqBdvzRvb9tyxZMDjtdjbjzqWn3Cq7OFkBVJBuj3c1FUYoIsaACVy2k5MWUgbR5olmEHBTsjxFgDWCXeKnO06B1YfBp+ylLWzBI7lt+GJ0UW7PQ+m4ZQx8l3YM7a2HH6D4grR6QCP6bPIQphs4C51W/wCVA0CWjc/d+0LnY59X43OA4AI3C4BpuDPepjmHwhqGqU3ON3X5KRU/jt7G2AIFRrYsJ07k0pbPFWWPJIHw3Ai2vKJKW7GwhgvO4Hx4lNWOH3V0YXE8513Wf3xZt+GMZScBIMyNHAAAH19EgfXa1rqj/hFo48kXtyoOtyt3Q3x3+pVT6RY2SKbfhHut+NcIEnl4w5Dn/e1vyu/zLSpmZYn7rKf6qQ+cSFznHcUQSoKjJVTOWcvXBK4JIsdFjikBp48CuRU46rCVG47j4IAIa9d50LTqbjquy5AwkPWi2NFCHLptRAGyVDUoBESCuXUjqECAbhdU3kEOYS1zTIO8KZzuIXBY06GEDRZMH0mYQBVaWu3uaJb3xqO66cse17Q5jg5u4gyO7v5KgGmeRUmAxtSg/My4/U3c4c+fNZp4F3RohnfaR6FQoyQTu9EXX7LSUDsjaVOqzMw94OrTwP5ddbaxwZRqO4NPqLesLLT5UbLVWQ4qg5jsr27gQZGjgCDz1WU6R/S49yTbF2uP5Uda4g0SGTBJyPksBgbiHgeCKb0iww/5jj3McrZQd9ju9L1mF4lckv8AY0a928HyWOSWp0oobhUd/wBoHuUtxXSs/wDLpBvNxJ9BAQsUvonk9T6aC/KyykTxPJQ0qwfUFGmQ6odYuGDe5x+nFUnFbVrVPiqGODeyPIJt/D+sW4sCJzNI7ogyFbHD9nH6n1dzTWNV/J6hSZlsP06fn0W3PABO6JOgsB+y6ul+3KmSi8zd0NHjr7FXxWziQuc0vsqONxPx1TxJHedFSazyTJVh6R1srWsHefRVtyun9G3qJbUfo5WLcrFEzbLDh1p2q2sSZSD1lDTW1iQGlDWWLECNvXe5YsQM6K2sWIGbRDFixAEWKQK2sQB1TWjqsWIGO+hf+O7/AOs+6b9MP8MfnBYsWR/sRqh+oRbM/wCDxv8A+b/2qJA7VbWLV4Mi7s2FzU1W1iGJHIVk6Af8a3+130WliQz1j90m6Tf4bf7x7OWLFLH+RZ037Eeb9Jf8XwSRYsU5dy7P+bOVixYokD//2Q=="
                                        class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXGBgaGBcXFxgXFxgdFxcXHRcXGhcYHSggGBolHRYVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGyslHyUtLS0tLS0tLS0tLS0tLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAECBwj/xABBEAABAwIDBAgFAgQDCAMAAAABAAIRAyEEEjEFQVFhBhMicYGRobEyUsHR8ELhBxQjcjOS8RUWNENigqKyU3OE/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAECAwQFBv/EACkRAAICAgEDBAIBBQAAAAAAAAABAhEDIRIEMUEFEyJRMjNhFCNxgeH/2gAMAwEAAhEDEQA/APQq9PM0gbxz13bxv5rxnb+c13kVKbXNOjw4VALACNXtOY24CbCFfNodLX1AAwZZY4MiILhEDsiZtxOnNUfpPiKdWMQwAO/W0FrSdTeXkuIJ1DRKmpplfktf8JRWbWc0gPptY64uWkuZbX4SQ8Rujgrr0hq5g5rg46RbSI08JXjnQzpg7AVn1GsFRtRkOYXEGxkEG97nirmOmxxbbYd1KSXSarR2QZzBoEmADyKhKq2aceRxkn9CnpoGOytboAdL8PVeYVWQTxk+69E6SuljKosHkgCZMa35gqnfy7alSoC6L25ws+J6o09TJTlyiAbNDutaBqTaPP6FfSGHORoDKNAWF8gM21nevn2hT6pzX5hLTLeIt7EWK9i6KdJ6NejTaajBVa0Nc0mDYRInWVZRkZYcViC6jVD202gscIAjUEQTwuV4rtDFmlZph2s2ieHeYPkrx0yxpnqmk6SeF5i2h3a8V57jgKjoiQDabkxIJ9ChLdhekK62KrPu6XRxmY8NVJRqPGkDvGikoVQHQ2bbtN+hBKkq12zDjra14n2UhA7sQ/iJ7kNXa48STyR73AGMpka6QPX2XHWuvkbpvQAJR2c49pxDe8wpHspCwOY8hbzNvJRV6jnGCQY3WP3RWGwObUwOIiPZAA7WuJ+ENHEwPr9F0eqGsuPJGHZzeTuRdr5iPVY3BHcyOcA2QAOGM1aw+Q+yyriQ21xyCIds8zJdHfI9ioqzLRDT4n6piAztFs2D/MLn/aLdAHDmY+i5xNEHS35yQVQXj2ugAmrip3+32UZfOoEodzY/dFYBgLmtcQGkgE6wCdbJMaLD0XpZi93/AEtHq5XTZdd7aNekwCHgF17wJFvOVHT6EOwbBVZVbWpuaM0AgCYggzDhrw1Rez6WZ7WBoGYEbxaDvJNrBVWpIspxkgF1Wp1bXNdEDqrawO0IUOCpONWmTJOdtzzMazzRbXZqVOoAMjqj2tcB2C4NiBxPZPktU6rmkOBAgg6Dcpxk3BoJv5II6p/4FiYZhwH+YLazcWavcRRMZWL6DS1zHQ5pgAghzjqXT2b2jW66pUDTqt6xzmU3uAqgSS0kw+wNxFwE/Z0bZQw1VjSXFwkk6y27dLSOO9C7ZdSp0qbxmJqMl3a5g+hOvNW7iUuSyulGkC4rolhTX/o4sClBJfVYdRfLDIInSTwKS4+pToNFNpeRmJMOJI+UAmzeMDdxXdSg+R1dCoC+MhcDlkn4pbYnS5Qm1cFUa91OqYLYOgNuMjXvUqfllUYtSobYOp12zze9Ct3nLUE+5cPBVnEnK5zhx99U02DULevpXAdlMR8mb6EeSW7Sw8XBsTB74lCVSY0viAuxBO9S4SscwvvHuhHs1Cn2ZhnVKjWtmSR7q0rXcve0qzi0OBmAbkk5i0WEndoq2KxhgBu2JO8edjonm1HhoYNcr2g33EO95Vb2thSycrszSRB4gnsn1jkQUgbJWiS4kuMncDpxJ3IhhaBZs905fGBB8Uqp5mkBxOXi7NB36jcmrMKCAWl27Ql7b8HC48QUMDH1HE2ad3ICO7cozh3v+J2UcCHZfT6roNM2mf8AMPAb/Bcio4T2r30BHoQhAdEOb8JbHIkTy4FDV8XV+b1j6LVSTfKTzAj7BDVqZFiT5T6oA76walrhxgz9Qo31mfMfI/usFASIDr6TZcnD8u8Xn90xHXXu/TVt4j3ChqYmof1zHMe0LsYPh9Quzg5bb4gfNMAR2Kdo8X5k/VcdZ+H/AEU1Si4W1HCELk5JAd5xvH55rttY/N9FzRaN65dT5oAunRPpDXaw0nF1ShGWILuqJktI+VskhN9hbQZWYGzq3QmJ3Ec1RNj7UdQcbWcC0931V1wWzMNlo56mRpaDnB7YeIm8HW27eq+NOyxytIe1qAIaCJDPhBJIbaLDQGCRbitdW1dUNs0TI7FjDSaYl/MDjx04wisLj84MQI1GVoPLQJ2iptg+bmfNYmHXu+ZbRofJm34tjy+mwgwSL6xuMdyX4XDU6tFrXMJLDUpmCNA4OYYmR39youN2vWbU+UzIAaBodIA/JVo2X0hey7WjLUOZ5y/CYguEjukKMvslhbuh9VZUDIYwEiwzvyxzsDKp3Txz6Zp1HBmaIImQQ0ggEaibju7lc8VtKWtcKmbfaBA0Lrd6VYrZ7Kjy97Gvfxd2tNNbJwp7J5OcHT0VKkzrNotL2ZG1mN1duqUhlcI3Zgg9v4J1Bz2OhwDtRvtAPfBE9xXoFPDgQAxttwjdyjcl/TijRqYUtZlFSm4OgCDrDt28EeSjJvkirk4nlsk6qy9EMOAXPOoAA4wTJ8TB8lX3U7wrL0StTe/i7xhrTHuVaM52hL3PEwC6e+IhQMYAMr3jS2hmdYMme5d16TnPBBtz019DCzEbNgdkzG4ye+27dfmgQXiMGAyC3M03BGt50/N5QGHpgNcGkggAtPhlMnhZp8Udg2viHOtltqY5X0i3mhamIAbMSGkhwGoG+O783IAHbXmzoPM39QuXPINiSP7gR5ESFDXe2QRZcPqcDu8x3IGgym0QTbdu/OakETOn5uSqlULjM2Redw3juKVjoLquabfngoyRvv6eaFNcb9O9a60agwmFHdTXswe68hDurHh9Fy6sDqR9udly4zo4JkaN1KkqBx5Lqowje36+iGqNQBM4W/Ch3HcugDExC0XygDnMmGCxHZyybacI/YpY8QpcHUyvadwISYy9bD2cSDUqPJefhE/4Y5DcT+yZMrOpuzDUeo4LWy8Z1jN2YRPO1lDjKxNyq72DHP8AvCz5XeixVnOeI8lidioA22JZRrttoTH/AFgfVpRmxsVTDRmIubk35g8d672cHOw5Y4dumXCHfNTIqNB43BHmpul+AZVZTxmHhrakGo0GMj7g27wQecHQp6Yskfo72ltUNqANLSXtyyHANgyB2pgapps3bNMsaHn+pEFrRcETzgyLrzetLSI4+Ewp6zWudnzTETxdbgfhO7XcklXYlxuF32Lk7bxbUDgDbNIlpIBEaC5Jsgsfif5lmZz221AMuJFwHchuVeqU5pF7Nzhm4jh4SoamJOjSQN/AfdR4u7NePPCUHCa/wb6v4nHhDfG0+qsHR8ZGjlc+31Crzqjv1HUWn3VnwQy0QADMEkxeT+eytMjVMIxOEksiwOU8+X1UWJaBUmBJEbwHC+vOwHgjesDerJ32+vpMJRtPEwQJ+ExutB177HzQImosgkgmC05ZAkcjx3Ku7SrFry5sQ6ZHH95BUzcduFiJ3eDlwXZwQRv7Q3jmEAAhwO6VtrDrp9E32FsttR+V099h6pjjOjNQXAkHeBZQeRJ0WxxNqyt0pGg+yLdSc0STrwCa4PZTmH+qwjh9xx/dHuwAqA+kyoc9k1AqbHiYi/fCytVn9IHqm2J2WZj9XDcf2QGJ2ecpI+Iat/ZTUiEosXOj9rfVazf9IjjP4FzUYdCPRQlo3lTINEtV9vyB3LimT+fnNaMLXWwmRZskb5UzAO5D9aN3nClw9KSPdAWcV6JHcoaeo7wisceem5QMYZE8QkMsOBxbqbtfDiE7NTMA4FVuZHPci8BjA0w423qADXPyWKXrqfzNW0goYYih1eIOhFSnSqyNHFvYeR36+KHr0mEPY6A3IMpgZg5vwjSS0iAY79ykJLm0XOEFtR9IxoG1RLY/7gpMTh8xFrkD9x5hS8g+wqFGm2k+mWglxJDyzQQLAm/E6pJU2VUy5mjM4n9JtHH3VrZRa3W0rYc1o7MeWnehRSJyyylBR+ivYLZ5aHsdJz5A6JganUcyEyw/R/qnh7agaGmwc2SRvB4zJTDryeHr9VrUi5OlkMqS2Mto9H6GKwjqjaeWqztBwsSGuOZpA1loPmqtiqxa6ZsHNB4WFx6r0LowTlcAwhs753x9ivN9qkFlRukkkeIHt9FK7H5GBrB+sgSCBEHTgqxteuesdfX33+onxTn+Zzm2uUEbpgR+eKS7TdmJPE/X/RAxYa51lN6WFL8r2zLvtdJmtJMC5XrfQ/osamGa4dh4uCQdY0PEGyryTUUW4ocmKth7HeDJkcwB7Qr9hGMpMmpJaBv38gAEXsjAEDttylpMiZHIzvslvSPESYmwtAke3csblyezYo0qRXeke2hUJaGBjByuefLeqnUx7m/C4z3nTn+ye4ykXGzB3fgSnF7JzauAHAx9YWiLVFMouxbi9sgwHCSOBvK3T2sHESRPke6d6kd0dbudPcfooH7Ey8VLlEgoSCH4Ev7TYnvHCygqbLzSHABw3wT6tRuBokEXsrFSwwcBI+6i8jRasSZ5xi8MWmCO5QCmNfZejYrZ7SCHCe9V7HbHpCTA8LKay2VzwVsrTQ0b/VSmraw8dSia1Om3T6oGrB0KtTszyVEtKk0XcbcDvWqcOqC28IGUx2aJe2x3+x+6TEhvisP+oaKNl9yaYSmSNJChxGEymQIURgvVt+UeSxT5DyWIFZZaTi9r25Y7Ie3jmY4EW8XKXHgENcORB39oT9V3haRzAgGNDusQQfdbbQinJ/S4tM78jvsQm+4l2FpudZKJw+znuvZvfPsnGVrdIHcFo1+amRB6Wymj4jPmPqp20GNiAB7qN1fmohXkwL9wJSY+4aK+XQkdxhUrpJs8sbTdBh5f5NcWa8wPRW4U3ndHejdq7NFWjhGkA/4gkf3k+8qqc+NM04MLnJxZ5U6vle08onvEj3RtbDNcy36rjz09Crd026D9W1houGYN7TTa8buCp+zmvkMIM3gExfh5j1TjkUlojLFKJnQ7Yz6+Mota2QHB5/tae1r3r6QweDDWwAvK/wCE2EnF1HgdkUzHe4tkd+q9fpLPmdyLYfGAs2nhDEtsVTNsYXEC7aXWdy9JcyUPXozoqePkshl8M8J2vsvaDv0FjeAtbiYuVVttbMrUXSc5aQIcR2TxuLW719E4vCvM5Y7iqVtXZtRriere2ZnJdp8NFbDLXgcsakeebA2C+tRdUJLb9g7jAuYi4mLrnC4h9N5pvM+oPcTcK21mO0l/+SPZQ0+j4e4l1N2szJHoFNzsI4mvILs+iCYg+SteD2ZLZ1WYPZMQY5c45q17JwkNjwVLey9aR57tqlkkqn45zn74Xp/TjZ56p5Gv7hePbSznPEjLoDqb3MK3FspzS0RVdm5tH34IOts+o3UeKI2aKlSo1gPxGNAQBvOiOr1alF/V1e0DoRMH7FaLaMtJiF9NM9hsmXRpYc51+iK21hQKZeN8R4kJ90X6MF+EZUDu255ME9nKJHnaU7tEJLiQuwcgDMRy3JtsrZDqrgHDsjU7iBu709wWwKbbvOd3/iPDf4pqwAaeSVMrcyL+TZ8jViJlaTpkLEr6v4EHiapDnN3Oh+vzCHeqnxG18HSs+sHkbm9r/wBB7lVzbPSxj3TTpmIiXBree4E+qbRNDykHOaIbuudBbW5WqrQ0S54A5fc2VGrbaq3h+UHWPufFQ4fD1axGVr3kmxgn/wAjb1T7CouGI2xh2NzSXgmBFwSNRuHugh0tq5XCi1rGgSc5kcoAiXa+RQ+zujIe3+piW0yLBgp1KrvPstHmn2ydjUKbSHYek8n9dTO49+Quyj996hyvsiSXkrTa+OxQn+sWXu2m8U/NggDmZXqnQ/BBuEw7TUZV6uo4Zm5o7ZLsvaANs0TySfD0crcgc/L8uZ2XuyzpyVg6PEFr6Wmjm+Fj46KrLGTjs09POpgXSoOqYk02yZ3JlszoyynhKjXNBe7M4E6i1iOGhTDZ+DFV4qOtUAIncUXQDv6jXTEfgWVWjbll8eC8UVP+GWHLHYmREuaWndBB3+Sv1J91UeiRLX1aZEGQdLEDQ+UWVow773Tm/kZ3HQxaJXfV2UNJyKDVOOzLK0AV8PyS6tRBT+qBF0DXa1SlEuxZGI3bNadQu2YFo3fRGPAUTsU0b1DsaVb7GmbPndZHsw0aKLDYxrj2U2pMEJxSZny5JR0ys9JcFmpPHFpXljtnTff9l7VtenLSvM304qOHNJtxZfi+cNlUrbPIJLew46kNFxwNpQGJ2L1rgXOJPdEfl16A3Dyo62BH5+c/RP3WN4kUTaezIw75vka5w7wx0eVz4K7dHsJ1WFoUyILabZ7yAT6kpdtLZhqtcwODZBud+7L3mYVhzbgtOF2jJ1daSOw1aAWg52gC5yk8VaYyWyxDzyWkCs8iobKr1BmZSeWzBMWHfKs2zejNNrQ59UuqX7LaM5ZbHxOdFpO5OaWDawuG+e0ZBBPG1j3o2myyi02WWV/BdH8r87hTLpkEh9u8TkP7p71T3j+pUdU4AuIbH9unhopoXYHNPihWyNlENFgB3QFknNEWiff9vNS2WZwmI6auX7WGGisZAYRI+adWjmbrh9YQqh00rE5Gk2vA+vMwk1qiUW0z3vZ4pVmNq0iMr2ggjeCEW7J8A1j8914D0D2/jabhhqP9RjiZaZ7Em7g4aC+i9c2FQqtxAdUdOambbhdp+ixT+Lo2cOUXKwtmygypnae9TFMKoQtVirmiUJ33Mo1IRZxPNAFCV8RCSlRL2lJjGvjgRqltfGgXlLMXtCN6R43afNPk2XQxRiOMftbh5pRQxRrVW09zj57/AKJXQc+u+JsrKMB1bWupjtMuOdrz5lBdaSLTg9n9WBDbJrhhbW3svKsV/ECvTqZXYdxA/LcVZdg9NmVwYOVw1a4QR4cOasi1HZiy4py8ln2m6AvN9rkiqHNEtE5o571ZNo7caTBIVRqbWYKpk2hRlLk9F+GHCOxphHAomqyyr+G2oMwYGuuTDgLDhKcHESFCiwXVoFRp5/Qo2d6U7Sq9pscfoVaqOwHm5e0DlJWrC6Rg6yO0xX1vNa61PG9HG73nwACKpbDpDUE95+yv5GLiVjruSxWz/ZNH5B5n7rEuQcTzylhwBEWUzaaJ6orfVKwAbIVmUKbqlnVlICOyhczXginNsoYJQBC1iQdK8AXtY4C7XHduIVl6k8fBdHCzu+6GxoB/hDg4rVXxHZDTzvP2XsXVDXf+fYqodEdmikC4CC8kxppafRXGdCsE3cjVK1FERqiY3gSoarluqYMISpVvCrky2ESKtVhLMZWOqJxL0txrxEWlQNC0VvauOINknDXVDeQ1PcVhQZ3lIsc98EMaSeXsrYUE2/BY9jvpsgD8KstOuNF5lgDiqRzVcO87wWFro8LFPaPSGoIy4Sq7vEeyk0RSkx5tPCNfqO8wvPtsgMqdiQ4WDhY+is9XpnVFn0AwcHBzfUhLauOw9R2ZwyHUzcHiBCaJODoRVMZW/UdURsnD9vM7tO5390VjcZQJAaR36e6ifUDNDbjZNkfxGWcB0oh2LgWSOtipDYN1JnmBxSonF8nSDTXzGSi8J/FLqqjsNXpXY7I2oDYgRllsTMQlzLFVfbGyajsfnynq3Fjy7d2WtzCeMhW4mth6hi4uMD2P/beIcJaxoHcT7lDu2vWd+sjugR6JXh8aYaWyOSOqVJJMeSug7jZycq4ypEn8/V/+R/mVihz8liZXbNRzWNbOgnuurY3Z9IERTbrOkm3fzR1mjcB5JcyagU1mz6p0pu8o91O3YVY/KO932BVjq4+kNXt859kJV25SHzHuH1MI5MdIAp9HCR2qnk37lEUujlIal7vGB6KM9IgbNpn/ALiPoFC7blQ7mjwJ90bYWkNaeyaQjsDxv7optFrbBoHcAq0cfWefjN9ALeUKwbKwjmiXklx4kmOWqqyy4osgrJadP0KYUnWhDxD43ELb+yY8ljUi6W9A2IeTNrj1QdV8gXU+PcYzDdqk1bGtEGeyfRQk9mjHHRlerG9LcRWkc1PiKoIsljgZjXmmiyiG5KY7JwQmXBRUqE7k5wDALEFOwJ34dutkBiMc2me0zxCcGnASTadKQbT4JpjTIa21aNQEFzXDg4D2KruO2Vh3mQ2P7HFo8hZA7V2OSTAcPNJqmGrMtmeB4q5bJc68Bu0NkURZofPN5Stmx3kf4jomwm37o/DYZ5d2nE+aaNZlanyorklIX7PwkCXGY0XbNSfJaqvJOUeN1I0WSbOj6d0/KfN9kdjVO8PgBVoEyBDrTNjzMWFykgNuYKf7BeS1zZMET5qzEk5bMnq1xm2Q7NbJN5DQb6ab12cQePqtj+m10/q7LePM9yCLgtjSSpHAtydsL61bQfWd6xQoKLPV2hVdq93gY9kM9zjqSZ4rkrbjCdEjIUVeGgucQ0DUkmB5ITaW1W098u+UfU7lXNq7VqVRBDQAZiT6ooEhq/pFSaTlDndwgeZKjp9L6Vg5j2ibnsujjYESqpVqG8geBQdWDofBOiR730UxGEqtzYeq2o79W57eRYbt8k9c6F8x4fEvpPD2Pcx7dHNJBHiPZeldDv4lZy2hjCA42bXEAE7hUGjSfmFuQWLNhl3WzRBp6PTa3aFtRopGv61nBw9CELTqQVlXsnO3Q6/dZbLXD/gOatyDYjUfm5INtYLV1PxbPsrFi2CoJFnDTnyKQ4qobgiCNRvUGaYOypjaZbIM242I8OC23aYF/rKl2vgw4ToeI/Lqo4oVKZI/PJWximEnR6DgdpNO9N8NigYgryKjtgtNyU0w/SUjfbw/Ap+0/BX7iPW6VYHepKjgvOcH0rB1cEcOkgj4rd6XBj5IsmKcOR+iV18K06gJTU22HWkqF+1rWT4MfJB1TCtboAkm0qt8rRJ5LjE7YJs2Z90EcPUccxdlUuNdzV03TyzPS0TUKETvJ1Uj2wJ0Cjq41rBAh7uWg70BUxj3fEfBFHoI8MUeMQ0vhjnk2Any3qLZ/SNhd1bJk6OsBYEnW/BTNoZqTm73NI8wiOiWw8NTB605nuBE6FunwjcfdX4pRim33OH6tilOSS+jf8yXXMk7vt7LtkqWtgQx0TPAjQjcQugAtC2ebcWnRFB5raIy96xS4sfty+hcemdMH4CR/cJ/9Sgcd0qc+Q1xY3gNf832Shz1C4ooYX/MsM9onxhQ1Hc3Dxn6oR4HALWfiPJMDp73jQz3qE1mk3kFF02tdo6DwdceChr4Wd0cxogCMttxCgq0vJcua5uhWCvxSHZf+hf8QTQaKGKDn022ZUHaewfK4E9sDjr3r1LZe1aNdmejUbUZocpmORBu08iF84SDyU+z9oVaDxUovdTeN7TE8iNHDkZWXJ0yltF8M3hn0U7s93tyQG0abag4OGjhu+45KldH/wCJjXxTxbch06xgJYf7mat7xIVlq4xrgHscHNcJDmkEHxCxThKHc245KW0JsWHNOV4h27e13cUlxjAZkQVZcVUa9uV1/dV/GNLde03jv8eaIkmVvGYG5MfZLamEhWaqEDXp8lojIzyiI+qK6ax24nzTLqwugwKfJkOIHTY/5iisPh3G5eY8l3lGgRLIAhJyNvR4FlyJPsjuiMvw256nzK25gPxEu71H1i11nC/ddVnpYRUVSVBNKk0aDwC6bgQ42ssoYJxu45G89VvEbUYwZGGeaCUnFL5BnWhrmtB018FHtekDUD26uHr/AKITBjPe95uiKtMtLWA9qQWuNm3GhPHVTSOP10uU0/4GuzmtqMFMuDngSzeXZjdo8iQOSFdjmB5YIn6jUDut6qHC1+rDqhDWVqUuzD9fJvEadyRUQQesce3Np75Lj7rd0qb2zBHDHnzLNmfw9Fi56w/IPMra6Vm3X0UZ3eo3PK25RuK57PMGdZO+65f5LlwBUZkcx6pBZJ1sa+YRdKvzS7NP2XTDwQMPcAUHVocFIyqui+e9AABCwVeKIqDj5qB9JAjZMiyJ2VtuthnTTd2Tqx0ljvDceYulzgQszg6qLSemSjJp6PUNk7fp4hsskOHxMPxN9O0OYU1erqvKqVV1NwewlrhoR+aK67E242u0g9mqBdvzRvb9tyxZMDjtdjbjzqWn3Cq7OFkBVJBuj3c1FUYoIsaACVy2k5MWUgbR5olmEHBTsjxFgDWCXeKnO06B1YfBp+ylLWzBI7lt+GJ0UW7PQ+m4ZQx8l3YM7a2HH6D4grR6QCP6bPIQphs4C51W/wCVA0CWjc/d+0LnY59X43OA4AI3C4BpuDPepjmHwhqGqU3ON3X5KRU/jt7G2AIFRrYsJ07k0pbPFWWPJIHw3Ai2vKJKW7GwhgvO4Hx4lNWOH3V0YXE8513Wf3xZt+GMZScBIMyNHAAAH19EgfXa1rqj/hFo48kXtyoOtyt3Q3x3+pVT6RY2SKbfhHut+NcIEnl4w5Dn/e1vyu/zLSpmZYn7rKf6qQ+cSFznHcUQSoKjJVTOWcvXBK4JIsdFjikBp48CuRU46rCVG47j4IAIa9d50LTqbjquy5AwkPWi2NFCHLptRAGyVDUoBESCuXUjqECAbhdU3kEOYS1zTIO8KZzuIXBY06GEDRZMH0mYQBVaWu3uaJb3xqO66cse17Q5jg5u4gyO7v5KgGmeRUmAxtSg/My4/U3c4c+fNZp4F3RohnfaR6FQoyQTu9EXX7LSUDsjaVOqzMw94OrTwP5ddbaxwZRqO4NPqLesLLT5UbLVWQ4qg5jsr27gQZGjgCDz1WU6R/S49yTbF2uP5Uda4g0SGTBJyPksBgbiHgeCKb0iww/5jj3McrZQd9ju9L1mF4lckv8AY0a928HyWOSWp0oobhUd/wBoHuUtxXSs/wDLpBvNxJ9BAQsUvonk9T6aC/KyykTxPJQ0qwfUFGmQ6odYuGDe5x+nFUnFbVrVPiqGODeyPIJt/D+sW4sCJzNI7ogyFbHD9nH6n1dzTWNV/J6hSZlsP06fn0W3PABO6JOgsB+y6ul+3KmSi8zd0NHjr7FXxWziQuc0vsqONxPx1TxJHedFSazyTJVh6R1srWsHefRVtyun9G3qJbUfo5WLcrFEzbLDh1p2q2sSZSD1lDTW1iQGlDWWLECNvXe5YsQM6K2sWIGbRDFixAEWKQK2sQB1TWjqsWIGO+hf+O7/AOs+6b9MP8MfnBYsWR/sRqh+oRbM/wCDxv8A+b/2qJA7VbWLV4Mi7s2FzU1W1iGJHIVk6Af8a3+130WliQz1j90m6Tf4bf7x7OWLFLH+RZ037Eeb9Jf8XwSRYsU5dy7P+bOVixYokD//2Q=="
                                        class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                </div>
                                <textarea name="" class="form-control type_msg"
                                    placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>