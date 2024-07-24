<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Encoding" content="gzip, deflate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="author" content="Aligning Dentistry">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="landing.css">
    <link rel="shortcut icon" href="images/fav_icon.png" type="image/x-icon">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Landing Page</title>
</head>

<body>
    <main>
        <style>
            .scroll_bottom {
                display: block;
                transition: all ease 0.5s;
                position: absolute;
                bottom: 5%;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 10px;
            }

            .scroll_bottom:hover {
                bottom: 6%;
                cursor: pointer;
            }

            .croll_down_icon {
                height: 40px;
                fill: white;
                /* background-color: white; */
            }
        </style>
        <section class="first_section">
            <div class="header">
                <div class="landing_logo">
                    <img src="images/logo.png" class="object-contain" alt="">
                </div>
                <ul class="d-none d-lg-block">
                    <a href="#second_container" class="btn mx-3">Invasalin</a>
                    <a href="#why_us" class="btn">Why Us</a>
                    <a href="#testimonials" class="btn mx-3">Testimonials</a>
                    <a href="#contact" class="btn">Contact</a>
                </ul>
                <div class="pl-3 border-left">
                    <p class="mb-0 h6 d-flex align-items-center mb-2 border-bottom pb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header_icon" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z">
                            </path>
                        </svg>
                        <span class="font-weight-normal pl-2 header_link">support@qbrainstorm.com</span>
                    </p>
                    <p class="mb-0 h6 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header_icon" viewBox="0 0 16 16">
                            <path
                                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0" />
                        </svg> <span class="font-weight-normal header_link pl-2">9150042699, 7200224777</span>
                    </p>
                </div>
            </div>
            <div class="text-white mt-5 z-index-10">
                <h1>Transform Your Smile with Invisalign</h1>
                <h3>Clear, Comfortable, and Convenient Teeth Straightening</h3>
                <p class="btn btn-outline-light mt-4">Get Your Free Consultation</p>
            </div>
            <a href="#second_container" class="scroll_bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="croll_down_icon" class="bi bi-chevron-down"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
        </section>

        <section id="second_container">
            <div class="row justify-content-around px-3 px-md-0">

                <div class="col-12 text-center">
                    <p class="h2 mt-5 pt-4">What is Invisalign ?</p>
                    <p class="h5 mb-5 font-weight-normal px-0 px-md-5">Invisalign is customized set of plastic teeth
                        aligners that
                        gradually straighten teeth without the need for metal or wire. These clear aligners are
                        virtually invisible, removable and won’t interfere with eating, brushing, or flossing your
                        teeth!</p>
                </div>
                <div class=" col-md-6 pl-3 pl-md-5">
                    <p class="h4 mt-2">Traditional braces and Invisalign differ in several aspects</p>
                    <p class="small">Traditional braces limit food choices, but Invisalign allows freedom to enjoy
                        favorite foods
                        without restrictions. Discomforts like mouth injuries are common with braces, but minimized with
                        Invisalign's smooth aligners. Maintaining oral hygiene is challenging with braces, leading to
                        plaque buildup, while Invisalign aligners are removable for easy care.</p>
                    <dl class="mt-3 list_points">
                        <dt>Appearance</dt>
                        <dd>Traditional braces are visible metal brackets and wires.</dd>

                        <dt>Eating Restrictions</dt>
                        <dd>Traditional braces may require dietary restrictions to prevent damage.</dd>

                        <dt>Comfort</dt>
                        <dd>Traditional braces may cause discomfort due to wires and brackets.</dd>

                        <dt>Hygiene</dt>
                        <dd>Invisalign aligners are removable, allowing for easier brushing and flossing.</dd>
                    </dl>
                </div>
                <div class="col-md-5">
                    <div class="what_image">
                        <img src="images/home/tooth_aligners.jpeg" class="object-cover" alt="">
                    </div>
                    <p class="text-center mt-2 h6">Invisalign aligners</p>
                    <div class="what_image">
                        <img src="images/home/metal_braces.png" class="object-cover" alt="">
                    </div>
                    <p class="text-center mt-2 h6">metal braces</p>
                </div>
            </div>
            <!-- <div class="w-100">
                <div class="w-100 d-md-flex justify-content-around">
                    <div class="p-3 shadow rounded-lg">
                        <div class="benefits_img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" class="bi bi-incognito"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="m4.736 1.968-.892 3.269-.014.058C2.113 5.568 1 6.006 1 6.5 1 7.328 4.134 8 8 8s7-.672 7-1.5c0-.494-1.113-.932-2.83-1.205l-.014-.058-.892-3.27c-.146-.533-.698-.849-1.239-.734C9.411 1.363 8.62 1.5 8 1.5s-1.411-.136-2.025-.267c-.541-.115-1.093.2-1.239.735m.015 3.867a.25.25 0 0 1 .274-.224c.9.092 1.91.143 2.975.143a30 30 0 0 0 2.975-.143.25.25 0 0 1 .05.498c-.918.093-1.944.145-3.025.145s-2.107-.052-3.025-.145a.25.25 0 0 1-.224-.274M3.5 10h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5m-1.5.5q.001-.264.085-.5H2a.5.5 0 0 1 0-1h3.5a1.5 1.5 0 0 1 1.488 1.312 3.5 3.5 0 0 1 2.024 0A1.5 1.5 0 0 1 10.5 9H14a.5.5 0 0 1 0 1h-.085q.084.236.085.5v1a2.5 2.5 0 0 1-5 0v-.14l-.21-.07a2.5 2.5 0 0 0-1.58 0l-.21.07v.14a2.5 2.5 0 0 1-5 0zm8.5-.5h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5" />
                            </svg>
                        </div>
                        <p class="text-center">invisible</p>
                        <p class="small">Virtually invisible aligners for a discreet treatment.</p>
                    </div>
                    <div class="p-3 shadow rounded-lg">
                        <div class="benefits_img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                class="bi bi-emoji-laughing" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path
                                    d="M12.331 9.5a1 1 0 0 1 0 1A5 5 0 0 1 8 13a5 5 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5" />
                            </svg>
                        </div>
                        <p class="text-center">Comfertable</p>
                        <p class="small">Smooth plastic aligners that fit comfortably.</p>
                    </div>
                    <div class="p-3 shadow rounded-lg">
                        <div class="benefits_img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" class="bi bi-trash2"
                                viewBox="0 0 16 16">
                                <path
                                    d="M14 3a.7.7 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.7.7 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2M3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5s-3.69-.311-4.785-.793" />
                            </svg>
                        </div>
                        <p class="text-center">Removable</p>
                        <p class="small">Easily removable for eating, brushing, flossing.</p>
                    </div>
                </div>
            </div> -->
        </section>

        <section class="third_section" id="why_us">
            <div class="mt-3 py-5">
                <p class="h2 text-center text-light">Why us</p>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-5">
                    <div class="why_image">
                        <img src="images/home/why_us.jpg" class="object-cover" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light" id="testimonials">
            <p class="text-center h4">Don't just take our word</p>
            <div class="testimonial_slider_1">
                <div class="p-3">
                    <div class="review_container">
                        <p>The doctors were very friendly throughout the treatment. My daughter was very
                            hesitant to smile in public before treatment. But after the treatment, her
                            confidence level has gone up. At each stage of the treatment, they used to
                            explain all the details regarding the treatment and after the treatment, the
                            steps to be taken to take care were well explained in detail</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Subasri S</p>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="review_container">
                        <p>Been to Aligning Dentistry for wisdom tooth removal. The facility was clean,
                            the
                            doctors were very professional and Dr.Subash was very patient and explained the
                            possible options clearly. Both the Doctors were very helpful throughout the
                            process. They even made post procedure calls to ensure if we were ok. Very
                            thoughtful and professional team. Will definitely recommend this place to my
                            friends and family 👍</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Sri Bhavya Rajesh</p>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="review_container">
                        <p>Aligning Dentistry is the best Dental care in Chennai we have experienced. Dr
                            Subash and Dr Venkata Seetha Lakshmi both are very friendly Doctors. Post
                            treatment follow
                            up is great. Both the Doctors are explained very patiently and clear our doubts.
                            Ambience and cleanness are outstanding. Overall Aligning Dentistry is the best
                            trustworthy Dental care for all our Dental needs.</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Paramanandham</p>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="review_container">
                        <p>Wonderful treatment. I like the way the couple took time to educate(which is
                            rare these days) the details involved in the treatment for my daughter's
                            Invisalign braces. You will be always well informed both medically and
                            monetarily. That was really a comfort knowing what to expect for both parents
                            and the patient. Both doctors Dr. Subash and Dr. Venkata Seetha Lakshmi are very
                            polite and
                            very talented. Clinic is very hygienic. Price is very economical too.</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Sountharia Kumaran</p>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="review_container">
                        <p>Been to Aligning Dentistry for wisdom tooth removal. The facility was clean,
                            the
                            doctors were very professional and Dr.Subash was very patient and explained the
                            possible options clearly. Both the Doctors were very helpful throughout the
                            process. They even made post procedure calls to ensure if we were ok. Very
                            thoughtful and professional team. Will definitely recommend this place to my
                            friends and family 👍</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Sri Bhavya Rajesh</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="testimonial_slider_2">
                <div class="p-3">
                    <div class="review_container">
                        <p>Dr. Subhash and Dr. Venkata Seetha Lakshmi at Aligning Dentistry Clinic have
                            provided
                            treatment with great professionalism and care. I got beautiful smile and my self
                            confidence is boosted. The past when I used to feel conscious while smiling due
                            to crooked teeth is now really past. I am very thankful to both of you.</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Ram Nivas</p>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="review_container">
                        <p>Overall i had good experience with Dr. Venkata Seetha Lakshmi, I was guided correctly
                            and I am
                            happy with the treatment. Doctor is very humble and friendly. Ambience of the
                            clinic is very pleasant.
                            Thanks ma'am, long way to go and wish u all success in your career 😍.</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Shalini s</p>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="review_container">
                        <p>The best care for dental issues .I voucher for their services. I render my
                            heartfelt thanks for such good caring doctors....</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Ganesh Vijay Kumaran</p>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="review_container">
                        <p>Very nice place with fine and clean infrastructure.. People with at most
                            care...
                            Trust them and you will have a mesmerizing smile😉😁 thanks for your wonderful
                            service..
                            Dr.Subash and Dr. Venkata Seetha Lakshmi.</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Surya Prabha</p>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="review_container">
                        <p>Aligning Dentistry dental takes care of the patients like a
                            family. I have undergone the root canal treatment and crowns here. Thanks to its
                            founders Dr. N. Subash
                            Chandar and Dr. Venkata Seetha Lakshmi Subash to make My Smile Beautiful Ever.</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Mrs. LalithaDhananjayan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="mx-3 mx-md-5 py-5 bg-light">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="h2 mb-5">What Out Beloved Patients Saying</p>
                </div>
                <div class="col-lg-5">
                    <div class="review_container">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolores animi
                            consequuntur
                            blanditiis aliquid ut, facere illum placeat quae ipsa corrupti tempore cumque nemo rem</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Goball</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="review_container">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolores animi
                            consequuntur
                            blanditiis aliquid ut, facere illum placeat quae ipsa corrupti tempore cumque nemo rem</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Goball</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="review_container">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolores animi
                            consequuntur
                            blanditiis aliquid ut, facere illum placeat quae ipsa corrupti tempore cumque nemo rem</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Goball</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="review_container">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolores animi
                            consequuntur
                            blanditiis aliquid ut, facere illum placeat quae ipsa corrupti tempore cumque nemo rem</p>
                        <div class="d-flex-betweeen mt-3">
                            <div>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                                <i class="star-shape mx-3"></i>
                                <i class="star-shape"></i>
                            </div>
                            <p>Goball</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <footer class="py-5 bg-ad-blue px-3 px-md-0" id="contact">
            <p class="text-center h5 mb-2 text-light">Ready to transform your smaile ?</p>
            <p class="text-center h6 mb-5 text-light">Book your free consultation today !</p>
            <div class="row justify-content-center align-items-center ">
                <div class="col-md-4 pr-3 pr-md-5">
                    <div class="p-4 rounded-form border w-100 bg-white mb-3 mb-md-0">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control mb-3">
                        <label for="number">Number</label>
                        <input type="number" name="number" class="form-control mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control"></textarea>
                        <button class="btn btn-ad mt-3">Submit</button>
                    </div>

                </div>
                <div class="col-md-3 pl-3 text-light ">
                    <div class="w-100">
                        <div class="d-flex align-items-center pt-4 border-top">
                            <div>
                                <div class="contact_icon_container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="contact_icons"
                                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="pl-3">
                                <p class="mb-0 small font-weight-bold">Our email</p>
                                <p class="mb-0 small">aligningdentistry@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-4">
                            <div>
                                <div class="contact_icon_container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="contact_icons" viewBox="0 0 16 16">
                                        <path
                                            d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0" />
                                    </svg>
                                </div>
                            </div>
                            <div class="pl-3">
                                <p class="mb-0 small font-weight-bold">Our Mobile</p>
                                <p class="mb-0 small">1234567890</p>
                            </div>
                        </div>
                        <!-- <div class="d-flex align-items-center">
                            <div>
                                <div class="contact_icon_container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="contact_icons" viewBox="0 0 16 16">
                                        <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                    </svg>
                                </div>
                            </div>
                            <div class="pl-3">
                                <p class="mb-0 small font-weight-bold">Find Us</p>
                                <p class="mb-0 small">no 123 mainroad brindavan nagar valasaravakkam chennai 87</p>
                            </div>
                        </div> -->
                        <p class="fotm-weight-bold pt-3 border-top">Visit us</p>
                        <p class="small border-bottom pb-4">no 123 mainroad brindavan nagar valasaravakkam chennai 87
                        </p>
                        <div class="d-flex">
                            <a href="#" class="social_media_links">
                                <svg xmlns="http://www.w3.org/2000/svg" class="social_media_icons"
                                    viewBox="0 0 320 512">
                                    <path
                                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                </svg>
                            </a>
                            <a href="#" class="mx-3 social_media_links">
                                <svg xmlns="http://www.w3.org/2000/svg" class="social_media_icons"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                                </svg>
                            </a>
                            <a href="#" class="social_media_links">
                                <svg xmlns="http://www.w3.org/2000/svg" class="social_media_icons"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
        </footer>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.testimonial_slider_1').slick({
        infinite: true,
        speed: 1500,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1500,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                }
            },
        ],
    });
    $('.testimonial_slider_2').slick({
        infinite: true,
        speed: 1500,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1600,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                }
            },
        ],
    });

</script>

</html>