<title>Profile Brikoleur</title>
    <link rel="stylesheet" href="{{asset('css/brikoleur-main.css')}}">
    <link rel="stylesheet" href="{{asset('css/brikoleur-portfolio.css')}}">

<!-- Master Header/Footer -->
@extends('layouts.master')
@section('content')
    
    
    <div>
        <!-- header -->
    </div>
    <!-- main -->
    <div class="b-m-rootBlank"></div>
    <!-- Content -->
    <div class="container-custom">
        <div class="b-m-top">
            <div class="b-m-top-profile">
                <img class="b-m-top-profile-img"
                    src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/96373109_2940098229362306_8759984751380354264_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=102&_nc_ohc=EXhgyJqbY4MAX_IL7lT&oh=86b703238bc1cf71f7e7b89de3728666&oe=5F3442E6"
                    alt="Image Brikoleur" />
            </div>
            <!--  -->
            <div class="b-m-top-infos">
                <div class="b-m-top-infos-main">
                    <div class="b-m-top-infos-main-name">
                        <span>{{$brikoluerlogged->nom}} {{$brikoluerlogged->prenom}}</span>
                        <!-- Unverfied -->
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.33367 1.81861C6.13776 1.75441 6.90109 1.43814 7.51496 0.914841C8.2083 0.324319 9.08927 0 10 0C10.9107 0 11.7917 0.324319 12.485 0.914841C13.0989 1.43814 13.8622 1.75441 14.6663 1.81861C15.5744 1.89118 16.4269 2.28482 17.071 2.92896C17.7152 3.5731 18.1088 4.42561 18.1814 5.33367C18.2451 6.13743 18.5614 6.9012 19.0852 7.51496C19.6757 8.2083 20 9.08927 20 10C20 10.9107 19.6757 11.7917 19.0852 12.485C18.5619 13.0989 18.2456 13.8622 18.1814 14.6663C18.1088 15.5744 17.7152 16.4269 17.071 17.071C16.4269 17.7152 15.5744 18.1088 14.6663 18.1814C13.8622 18.2456 13.0989 18.5619 12.485 19.0852C11.7917 19.6757 10.9107 20 10 20C9.08927 20 8.2083 19.6757 7.51496 19.0852C6.90109 18.5619 6.13776 18.2456 5.33367 18.1814C4.42561 18.1088 3.5731 17.7152 2.92896 17.071C2.28482 16.4269 1.89118 15.5744 1.81861 14.6663C1.75441 13.8622 1.43814 13.0989 0.914841 12.485C0.324319 11.7917 0 10.9107 0 10C0 9.08927 0.324319 8.2083 0.914841 7.51496C1.43814 6.90109 1.75441 6.13776 1.81861 5.33367C1.89118 4.42561 2.28482 3.5731 2.92896 2.92896C3.5731 2.28482 4.42561 1.89118 5.33367 1.81861ZM14.6338 8.38372C14.8615 8.14796 14.9875 7.83221 14.9847 7.50446C14.9818 7.1767 14.8504 6.86318 14.6186 6.63142C14.3868 6.39965 14.0733 6.26819 13.7456 6.26534C13.4178 6.26249 13.1021 6.38849 12.8663 6.61619L8.74998 10.7325L7.1337 9.11623C6.89794 8.88853 6.58218 8.76254 6.25443 8.76539C5.92668 8.76823 5.61316 8.8997 5.3814 9.13146C5.14963 9.36323 5.01817 9.67675 5.01532 10.0045C5.01247 10.3323 5.13847 10.648 5.36617 10.8838L7.86621 13.3838C8.10063 13.6182 8.41852 13.7498 8.74998 13.7498C9.08144 13.7498 9.39933 13.6182 9.63374 13.3838L14.6338 8.38372Z"
                                fill="#D2D6DB" />
                        </svg>
                        <!-- Verified -->
                        <!-- <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.33367 1.81861C6.13776 1.75441 6.90109 1.43814 7.51496 0.914841C8.2083 0.324319 9.08927 0 10 0C10.9107 0 11.7917 0.324319 12.485 0.914841C13.0989 1.43814 13.8622 1.75441 14.6663 1.81861C15.5744 1.89118 16.4269 2.28482 17.071 2.92896C17.7152 3.5731 18.1088 4.42561 18.1814 5.33367C18.2451 6.13743 18.5614 6.9012 19.0852 7.51496C19.6757 8.2083 20 9.08927 20 10C20 10.9107 19.6757 11.7917 19.0852 12.485C18.5619 13.0989 18.2456 13.8622 18.1814 14.6663C18.1088 15.5744 17.7152 16.4269 17.071 17.071C16.4269 17.7152 15.5744 18.1088 14.6663 18.1814C13.8622 18.2456 13.0989 18.5619 12.485 19.0852C11.7917 19.6757 10.9107 20 10 20C9.08927 20 8.2083 19.6757 7.51496 19.0852C6.90109 18.5619 6.13776 18.2456 5.33367 18.1814C4.42561 18.1088 3.5731 17.7152 2.92896 17.071C2.28482 16.4269 1.89118 15.5744 1.81861 14.6663C1.75441 13.8622 1.43814 13.0989 0.914841 12.485C0.324319 11.7917 0 10.9107 0 10C0 9.08927 0.324319 8.2083 0.914841 7.51496C1.43814 6.90109 1.75441 6.13776 1.81861 5.33367C1.89118 4.42561 2.28482 3.5731 2.92896 2.92896C3.5731 2.28482 4.42561 1.89118 5.33367 1.81861ZM14.6338 8.38372C14.8615 8.14796 14.9875 7.83221 14.9847 7.50446C14.9818 7.1767 14.8504 6.86318 14.6186 6.63142C14.3868 6.39965 14.0733 6.26819 13.7456 6.26534C13.4178 6.26249 13.1021 6.38849 12.8663 6.61619L8.74998 10.7325L7.1337 9.11623C6.89794 8.88853 6.58218 8.76254 6.25443 8.76539C5.92668 8.76823 5.61316 8.8997 5.3814 9.13146C5.14963 9.36323 5.01817 9.67675 5.01532 10.0045C5.01247 10.3323 5.13847 10.648 5.36617 10.8838L7.86621 13.3838C8.10063 13.6182 8.41852 13.7498 8.74998 13.7498C9.08144 13.7498 9.39933 13.6182 9.63374 13.3838L14.6338 8.38372Z"
                                fill="#ffc000" />
                        </svg> -->
                    </div>
                    <!-- In the future in case of multiple Professions, just insert the below in  a div  -->
                    <span class="b-m-top-infos-main-prs">profession</span>
                </div>
                <!--  -->
                <div class="b-m-top-infos-sps">
                    <span class="b-m-top-infos-sps-sp">sous-profession</span>
                    <span class="b-m-top-infos-sps-sp">sous-profession</span>
                </div>
                <!--  -->
                <div class="b-m-top-infos-desc">
                    <span class="b-m-top-infos-desc-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in quam lacinia est, placerat
                        pretium aliquam sem. Mi a vitae cursus in in arcu.
                    </span>
                </div>
                <!--  -->
                <div class="b-m-top-infos-adress">
                    <span class="b-top-infos-adress-label">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.05002 4.55036C6.36284 3.23754 8.14341 2.5 10 2.5C11.8566 2.5 13.6372 3.23754 14.95 4.55036C16.2628 5.86318 17.0004 7.64375 17.0004 9.50036C17.0004 11.357 16.2628 13.1375 14.95 14.4504L10 19.4004L5.05002 14.4504C4.39993 13.8003 3.88425 13.0286 3.53242 12.1793C3.1806 11.33 2.99951 10.4197 2.99951 9.50036C2.99951 8.58104 3.1806 7.67073 3.53242 6.82141C3.88425 5.97208 4.39993 5.20038 5.05002 4.55036ZM10 11.5004C10.5304 11.5004 11.0392 11.2896 11.4142 10.9146C11.7893 10.5395 12 10.0308 12 9.50036C12 8.96992 11.7893 8.46122 11.4142 8.08614C11.0392 7.71107 10.5304 7.50036 10 7.50036C9.46958 7.50036 8.96088 7.71107 8.5858 8.08614C8.21073 8.46122 8.00002 8.96992 8.00002 9.50036C8.00002 10.0308 8.21073 10.5395 8.5858 10.9146C8.96088 11.2896 9.46958 11.5004 10 11.5004Z"
                                fill="#585863" />
                        </svg>
                        <span>
                            Adresse :
                        </span>
                    </span>
                    <span class="b-top-infos-adress-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </span>
                </div>
                <!--  -->
                <span class="b-m-top-infos-phone">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H5.153C5.38971 2.00011 5.6187 2.08418 5.79924 2.23726C5.97979 2.39034 6.10018 2.6025 6.139 2.836L6.879 7.271C6.91436 7.48222 6.88097 7.69921 6.78376 7.89003C6.68655 8.08085 6.53065 8.23543 6.339 8.331L4.791 9.104C5.34611 10.4797 6.17283 11.7293 7.22178 12.7782C8.27072 13.8272 9.52035 14.6539 10.896 15.209L11.67 13.661C11.7655 13.4695 11.9199 13.3138 12.1106 13.2166C12.3012 13.1194 12.5179 13.0859 12.729 13.121L17.164 13.861C17.3975 13.8998 17.6097 14.0202 17.7627 14.2008C17.9158 14.3813 17.9999 14.6103 18 14.847V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H15C7.82 18 2 12.18 2 5V3Z"
                            fill="#676878" />
                    </svg>
                    <span>0601020304</span>
                </span>
            </div>
            <!--  -->
            <div class="b-m-top-options">
                <div class="b-m-top-option b-m-top-option-active">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 1.5C13.5 1.10218 13.342 0.720644 13.0607 0.43934C12.7794 0.158035 12.3978 0 12 0C11.6022 0 11.2206 0.158035 10.9393 0.43934C10.658 0.720644 10.5 1.10218 10.5 1.5V3C10.5 3.39782 10.658 3.77936 10.9393 4.06066C11.2206 4.34196 11.6022 4.5 12 4.5C12.3978 4.5 12.7794 4.34196 13.0607 4.06066C13.342 3.77936 13.5 3.39782 13.5 3V1.5ZM20.4855 5.6355C20.7587 5.3526 20.9099 4.97369 20.9065 4.5804C20.9031 4.1871 20.7453 3.81088 20.4672 3.53277C20.1891 3.25466 19.8129 3.09691 19.4196 3.09349C19.0263 3.09007 18.6474 3.24126 18.3645 3.5145L17.304 4.575C17.0308 4.8579 16.8796 5.23681 16.883 5.6301C16.8864 6.0234 17.0442 6.39962 17.3223 6.67773C17.6004 6.95584 17.9766 7.11359 18.3699 7.11701C18.7632 7.12043 19.1421 6.96924 19.425 6.696L20.4855 5.6355ZM24 12C24 12.3978 23.842 12.7794 23.5607 13.0607C23.2794 13.342 22.8978 13.5 22.5 13.5H21C20.6022 13.5 20.2206 13.342 19.9393 13.0607C19.658 12.7794 19.5 12.3978 19.5 12C19.5 11.6022 19.658 11.2206 19.9393 10.9393C20.2206 10.658 20.6022 10.5 21 10.5H22.5C22.8978 10.5 23.2794 10.658 23.5607 10.9393C23.842 11.2206 24 11.6022 24 12ZM4.575 6.696C4.71337 6.83927 4.87889 6.95354 5.06189 7.03215C5.2449 7.11077 5.44173 7.15214 5.6409 7.15388C5.84007 7.15561 6.03759 7.11765 6.22193 7.04223C6.40628 6.96681 6.57375 6.85543 6.71459 6.71459C6.85543 6.57375 6.96681 6.40628 7.04223 6.22193C7.11765 6.03759 7.15561 5.84007 7.15388 5.6409C7.15214 5.44173 7.11077 5.2449 7.03215 5.06189C6.95354 4.87889 6.83927 4.71337 6.696 4.575L5.6355 3.5145C5.3526 3.24126 4.97369 3.09007 4.5804 3.09349C4.1871 3.09691 3.81088 3.25466 3.53277 3.53277C3.25466 3.81088 3.09691 4.1871 3.09349 4.5804C3.09007 4.97369 3.24126 5.3526 3.5145 5.6355L4.575 6.696ZM4.5 12C4.5 12.3978 4.34196 12.7794 4.06066 13.0607C3.77936 13.342 3.39782 13.5 3 13.5H1.5C1.10218 13.5 0.720644 13.342 0.43934 13.0607C0.158035 12.7794 0 12.3978 0 12C0 11.6022 0.158035 11.2206 0.43934 10.9393C0.720644 10.658 1.10218 10.5 1.5 10.5H3C3.39782 10.5 3.77936 10.658 4.06066 10.9393C4.34196 11.2206 4.5 11.6022 4.5 12ZM9 21V19.5H15V21C15 21.7956 14.6839 22.5587 14.1213 23.1213C13.5587 23.6839 12.7956 24 12 24C11.2044 24 10.4413 23.6839 9.87868 23.1213C9.31607 22.5587 9 21.7956 9 21ZM15 18C15.0225 17.49 15.312 17.031 15.7155 16.7115C16.6945 15.9394 17.4087 14.8814 17.7587 13.6847C18.1087 12.488 18.0773 11.212 17.6686 10.034C17.26 8.856 16.4946 7.83457 15.4786 7.11167C14.4627 6.38878 13.2469 6.00034 12 6.00034C10.7531 6.00034 9.53726 6.38878 8.52136 7.11167C7.50545 7.83457 6.73998 8.856 6.33136 10.034C5.92274 11.212 5.89125 12.488 6.24128 13.6847C6.59132 14.8814 7.30548 15.9394 8.2845 16.7115C8.6895 17.031 8.9775 17.49 8.9985 18H15.0015H15Z"
                            fill="#FFC000" />
                    </svg>
                    <span>Vérifiez votre compte</span>
                </div>
                <div class="b-m-top-option">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.2351 1.75503C13.6651 -0.585009 10.3349 -0.585009 9.76493 1.75503C9.67983 2.10666 9.51291 2.43323 9.27775 2.70816C9.04259 2.98309 8.74584 3.19862 8.41165 3.33721C8.07747 3.47579 7.71528 3.53352 7.35456 3.50569C6.99385 3.47786 6.6448 3.36526 6.33582 3.17705C4.27776 1.92303 1.92268 4.27807 3.17672 6.3361C3.98675 7.66512 3.26823 9.39915 1.75618 9.76665C-0.585393 10.3352 -0.585393 13.6667 1.75618 14.2337C2.10791 14.3189 2.43454 14.486 2.70948 14.7213C2.98441 14.9567 3.19988 15.2536 3.33834 15.588C3.47679 15.9223 3.53432 16.2847 3.50624 16.6455C3.47815 17.0063 3.36525 17.3554 3.17672 17.6643C1.92268 19.7223 4.27776 22.0773 6.33582 20.8233C6.64474 20.6348 6.99382 20.5219 7.35463 20.4938C7.71544 20.4657 8.07779 20.5233 8.41216 20.6617C8.74653 20.8002 9.04347 21.0156 9.27881 21.2906C9.51414 21.5655 9.68122 21.8921 9.76643 22.2438C10.3349 24.5854 13.6666 24.5854 14.2336 22.2438C14.3191 21.8923 14.4863 21.5659 14.7217 21.2912C14.9571 21.0164 15.254 20.8011 15.5882 20.6627C15.9225 20.5243 16.2847 20.4667 16.6454 20.4946C17.0061 20.5225 17.3552 20.6351 17.6642 20.8233C19.7222 22.0773 22.0773 19.7223 20.8233 17.6643C20.6351 17.3553 20.5225 17.0063 20.4945 16.6455C20.4666 16.2848 20.5242 15.9226 20.6626 15.5884C20.801 15.2541 21.0164 14.9572 21.2911 14.7218C21.5659 14.4865 21.8923 14.3192 22.2438 14.2337C24.5854 13.6652 24.5854 10.3337 22.2438 9.76665C21.8921 9.68144 21.5655 9.51437 21.2905 9.27904C21.0156 9.0437 20.8001 8.74677 20.6617 8.4124C20.5232 8.07804 20.4657 7.7157 20.4938 7.35489C20.5218 6.99409 20.6347 6.64501 20.8233 6.3361C22.0773 4.27807 19.7222 1.92303 17.6642 3.17705C17.3553 3.36557 17.0062 3.47848 16.6454 3.50656C16.2846 3.53464 15.9222 3.47712 15.5878 3.33866C15.2535 3.20021 14.9565 2.98474 14.7212 2.70981C14.4859 2.43488 14.3188 2.10825 14.2336 1.75653L14.2351 1.75503ZM12 16.5003C13.1935 16.5003 14.3381 16.0261 15.1821 15.1822C16.026 14.3383 16.5001 13.1937 16.5001 12.0002C16.5001 10.8067 16.026 9.66208 15.1821 8.81816C14.3381 7.97423 13.1935 7.50012 12 7.50012C10.8065 7.50012 9.66186 7.97423 8.81792 8.81816C7.97398 9.66208 7.49986 10.8067 7.49986 12.0002C7.49986 13.1937 7.97398 14.3383 8.81792 15.1822C9.66186 16.0261 10.8065 16.5003 12 16.5003Z"
                            fill="#676878" />
                    </svg>
                    <span>Modifier vos données</span>
                </div>
            </div>
        </div>
        <div class="b-m-bot">
            <div class="b-m-bot-header">
                <span class="b-m-bot-header-text b-m-bot-header-text-active">Portfolio</span>
                <a class="b-m-bot-header-text b-m-bot-header-text-inactive"
                    href="./B-P-O-comments.html">Commentaires</a>
            </div>
            <!--  -->
            <div class="b-m-bot-portfolio">
                <div class="b-m-bot-portfolio-cont">
                    <div class="b-m-bot-portfolio-preview">
                        <div class="b-m-bot-portfolio-preview-imgs" id="b-m-bot-portfolio-preview-imgs-cont">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="0"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="1"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="2"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="3"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="4"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="5"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                            <img class="b-m-bot-portfolio-preview-img" data-pos="6"
                                src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image de portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-preview-nav">
                            <button class="b-m-bot-portfolio-preview-nav-btn"
                                id="b-m-bot-portfolio-preview-nav-btn-left">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9995 19.001L7.99951 12.001L14.9995 5.00098" stroke="white"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="b-m-bot-portfolio-preview-nav-btn"
                                id="b-m-bot-portfolio-preview-nav-btn-right">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L16 12L9 19" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="b-m-bot-portfolio-preview-dlt" id="b-m-bot-portfolio-preview-dlt">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9 2C8.81434 2.0001 8.63237 2.05188 8.47447 2.14955C8.31658 2.24722 8.18899 2.38692 8.106 2.553L7.382 4H4C3.73478 4 3.48043 4.10536 3.29289 4.29289C3.10536 4.48043 3 4.73478 3 5C3 5.26522 3.10536 5.51957 3.29289 5.70711C3.48043 5.89464 3.73478 6 4 6V16C4 16.5304 4.21071 17.0391 4.58579 17.4142C4.96086 17.7893 5.46957 18 6 18H14C14.5304 18 15.0391 17.7893 15.4142 17.4142C15.7893 17.0391 16 16.5304 16 16V6C16.2652 6 16.5196 5.89464 16.7071 5.70711C16.8946 5.51957 17 5.26522 17 5C17 4.73478 16.8946 4.48043 16.7071 4.29289C16.5196 4.10536 16.2652 4 16 4H12.618L11.894 2.553C11.811 2.38692 11.6834 2.24722 11.5255 2.14955C11.3676 2.05188 11.1857 2.0001 11 2H9ZM7 8C7 7.73478 7.10536 7.48043 7.29289 7.29289C7.48043 7.10536 7.73478 7 8 7C8.26522 7 8.51957 7.10536 8.70711 7.29289C8.89464 7.48043 9 7.73478 9 8V14C9 14.2652 8.89464 14.5196 8.70711 14.7071C8.51957 14.8946 8.26522 15 8 15C7.73478 15 7.48043 14.8946 7.29289 14.7071C7.10536 14.5196 7 14.2652 7 14V8ZM12 7C11.7348 7 11.4804 7.10536 11.2929 7.29289C11.1054 7.48043 11 7.73478 11 8V14C11 14.2652 11.1054 14.5196 11.2929 14.7071C11.4804 14.8946 11.7348 15 12 15C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14V8C13 7.73478 12.8946 7.48043 12.7071 7.29289C12.5196 7.10536 12.2652 7 12 7Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div id="b-m-bot-portfolio-preview-nav-progress">
                        </div>
                    </div>
                    <div class="b-m-bot-portfolio-catalogue">
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-active"
                            data-id='id dyal limage_1'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/92570115_3873721969334579_7643778429369016452_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=pw4ixdhzu1EAX_JAE_t&oh=5874495a33a6c787f1b295faf2fae1df&oe=5F36E5FB"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_2'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_3'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_4'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_5'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_6'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <div class="b-m-bot-portfolio-catalogue-img b-m-bot-portfolio-catalogue-img-inactive"
                            data-id='id dyal limage_7'>
                            <img src="https://instagram.frak1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/101687040_606243696648946_3058382731987508433_n.jpg?_nc_ht=instagram.frak1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=2bTK9tMwvpEAX8WP8Au&oh=bd29421ba4f1ccb89cc4f804d6589182&oe=5F3671D8"
                                alt="Image Portfolio Brikoleur">
                        </div>
                        <!-- ADD -->
                        <button class="b-m-bot-portfolio-catalogue-add">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14 0C14.5304 0 15.0391 0.210714 15.4142 0.585786C15.7893 0.960859 16 1.46957 16 2V12H26C26.5304 12 27.0391 12.2107 27.4142 12.5858C27.7893 12.9609 28 13.4696 28 14C28 14.5304 27.7893 15.0391 27.4142 15.4142C27.0391 15.7893 26.5304 16 26 16H16V26C16 26.5304 15.7893 27.0391 15.4142 27.4142C15.0391 27.7893 14.5304 28 14 28C13.4696 28 12.9609 27.7893 12.5858 27.4142C12.2107 27.0391 12 26.5304 12 26V16H2C1.46957 16 0.960859 15.7893 0.585786 15.4142C0.210714 15.0391 0 14.5304 0 14C0 13.4696 0.210714 12.9609 0.585786 12.5858C0.960859 12.2107 1.46957 12 2 12H12V2C12 1.46957 12.2107 0.960859 12.5858 0.585786C12.9609 0.210714 13.4696 0 14 0Z"
                                    fill="#676878" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="b-m-rootBlank"></div>
    <!--  -->
    <script src="../../js/brikoleur-preview-nav.js"></script>
    <script src="../../js/brikoleur-preview-supp.js"></script>
@endsection
