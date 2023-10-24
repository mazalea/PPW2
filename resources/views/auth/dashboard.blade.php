@extends('auth.layouts')

@section('content')

    <section id="home" class="home">
        <div class="container">
            <div class="text-home align-items-center">
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
                    <div class="head_title">
                        <h2>Hi! I'm Maria Azalea: A Young UI/UX Designer</h2>
                        <div class="separator"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight"  data-wow-duration="2s">
                    <p id="p-home">A second year Software Engineering Technology student with a deep passion for UI/UX design. Acquired basic knowledge in software design and web development with coursework and practical projects during my time in college. Familiar with Figma and highly motivated to continually expand my skill set and grow as a designer.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="whatido" class="whatido">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="head_title text-center wow fadeInLeft"  data-wow-duration="3s">
                        <h2>My Projects</h2>
                        <div class="separator"></div>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="head_title_rigth wow fadeInRight"  data-wow-duration="3s">
                        <p>Welcome to my portfolio of projects. I'm passionate about creating innovative and user-friendly digital experiences. Check out some of my recent work below.</p>
                    </div>
                </div><!-- End of col-sm-5 -->
                <div class="row main_whatido_content text-center">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_whatido wow fadeInDown"  data-wow-duration="1s">
                            <div class="single_whatido_img">
                                <img src="../images/project-1.png" alt="" />
                            </div>
                            <h3>Project 1</h3>
                            <p>This is a description of my first project. It involved creating a responsive website using Bootstrap and ensuring a seamless user experience.</p>
                            <div class="btn_bg wow fadeInLeft"  data-wow-duration="3s">
                            <a href="" class="btn">See More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_whatido wow fadeInDown"  data-wow-duration="3s">
                            <div class="single_whatido_img">
                                <img src="../images/project-2.png" alt="" />
                            </div>
                            <h3>Project 2</h3>
                            <p>Project 2 involved designing a user-friendly mobile app with a focus on intuitive navigation and a modern look and feel.</p>
                            <div class="btn_bg wow fadeInLeft"  data-wow-duration="3s">
                            <a href="" class="btn">See More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single_whatido wow fadeInDown"  data-wow-duration="4s">
                            <div class="single_whatido_img">
                                <img src="../images/project-3.png" alt="" />
                            </div>
                            <h3>Project 3</h3>
                            <p>Project 3 was about creating an innovative and user-friendly mobile app that provided a seamless experience for users.</p>
                            <div class="btn_bg wow fadeInLeft"  data-wow-duration="3s">
                            <a href="" class="btn">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End of Projects Section -->

    <section id="myworks" class="myworks">
        <div class="container">
            <div class="row">	
                <div class="col-md-1 col-md-offset-5 col-sm-1 col-sm-offset-5 col-xs-12 no-padding">
                    <div class="scrolldownall text-right">
                        <a href="#about" class="scroll_btnall"></a>
                    </div>
                </div><!-- End of col-sm-2 -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="head_title text-center wow fadeInLeft"  data-wow-duration="2s">
                        <h2>My Skills</h2>
                        <div class="separator"></div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row main_myworks_content text-center">
            <div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="1.5s">
                <div class="single_work">
                    <img src="../images/exp/exp_bootstrap.svg" alt="" />
                </div>
            </div>
            <div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
                <div class="single_work">
                    <img src="../images/exp/exp_css3.svg" alt="" />
                </div>
            </div>
            <div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="3s">
                <div class="single_work">
                    <img src="../images/exp/exp_html5.svg" alt="" />
                </div>
            </div>
            <div class="single_work_colum col-md-3 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="4s">
                <div class="single_work">
                    <img src="../images/exp/exp_javascript.svg" alt="" />
                </div>
            </div>
            
            <div class="btn_bg wow fadeInLeft"  data-wow-duration="3s">
            <a href="" class="btn">Load More</a>
            </div>
        </div>
    </section><!-- End of Skills Section -->

@endsection