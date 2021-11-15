<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Resume</title>

    <style>
        /* My Resume */
        .profile {
            margin-bottom: 25px;
        }
        .profile .jobster-user-info {
            display: inline-block;
            width: 100%;
        }
        .profile .jobster-user-info  {
            position: relative;
            height: 115px;
            width: 115px;
            border-radius: 100%;
            display: inline-block;
        }
      
        .profile .jobster-user-info .profile-avatar i {
            font-size: 16px;
            color: #21c87a;
            position: absolute;
            background: #ffffff;
            border-radius: 100%;
            cursor: pointer;
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            bottom: 20px;
            right: -5px;
        }

        .about-candidate {
            padding: 25px 0px;
        }
        .about-candidate .candidate-info {
            margin-bottom: 30px;
        }

        .resume-experience {
            padding-left: 10px;
            padding-top: 60px;
            padding-bottom: 60px;
            position: relative;
            padding-right: 50px;
            background: #f6f6f6;
        }
        .resume-experience:before {
            position: absolute;
            left: -40%;
            right: 0;
            width: 100%;
            height: 100%;
            background: #f6f6f6;
            content: "";
            z-index: -1;
            top: 0;
        }
        .resume-experience .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle {
            border-color: #f6f6f6;
        }

        .user-dashboard-info-box .select2-container--default .select2-selection--single .select2-selection__rendered {
            font-weight: bold;
            color: #626262;
        }

        @media (max-width: 1199px) {
            .secondary-menu ul li a {
                padding: 10px 15px;
            }
        }

        @media (max-width: 991px) {
            .resume-experience {
                padding-left: 15px;
                padding-top: 30px;
                padding-bottom: 30px;
                padding-right: 15px;
            }
            .resume-experience:before {
                content: none;
            }
            .secondary-menu ul li {
                display: inline-block;
            }
        }

        @media (max-width: 575px) {
            .secondary-menu ul li a {
                padding: 4px 8px;
            }
        }

        /*****************************
            Progress Bar
        *****************************/
        .progress {
            position: relative;
            overflow: inherit;
            height: 3px;
            margin: 40px 0px 15px;
            width: 100%;
            display: inline-block;
        }
        .progress .progress-bar {
            height: 3px;
            background: #21c87a;
        }
        .progress .progress-bar-title {
            position: absolute;
            left: 0;
            top: -20px;
            color: #212529;
            font-size: 14px;
            font-weight: 600;
        }
        .progress .progress-bar-number {
            position: absolute;
            right: 0;
            color: #646f79;
            top: -20px;
        }


        /* Jobster Candidate */
        .jobster-candidate-timeline {
            position: relative;
        }
        .jobster-candidate-timeline:before {
            content: "";
            position: absolute;
            left: 20px;
            width: 2px;
            top: 5px;
            bottom: 5px;
            height: calc(100% - 5px);
            background-color: #eeeeee;
        }

        .jobster-candidate-timeline .jobster-timeline-item {
            display: table;
            position: relative;
            margin-bottom: 20px;
            width: 100%;
        }

        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle {
            border-radius: 50%;
            border: 12px solid white;
            z-index: 1;
            top: 5px;
            left: 9px;
            position: absolute;
        }
        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle:before {
            content: "";
            position: absolute;
            left: 12px;
            width: 20px;
            top: -1px;
            bottom: 5px;
            height: 2px;
            background-color: #eeeeee;
        }
        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle > i {
            font-size: 15px;
            top: -8px;
            left: -7px;
            position: absolute;
            color: #21c87a;
        }

        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info {
            display: table-cell;
            vertical-align: top;
            padding: 5px 0 0 70px;
        }
        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info h6 {
            color: #21c87a;
            margin: 5px 0 0px;
        }
        .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info span {
            color: #212529;
            font-size: 13px;
            font-weight: 500;
        }

        .jobster-candidate-timeline span.jobster-timeline-time {
            color: #646f79 !important;
        }

        .jobster-candidate-timeline .jobster-timeline-icon {
            border: 2px solid #eeeeee;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            line-height: 42px;
            text-align: center;
            background: #ffffff;
            position: relative;
            margin-bottom: 20px;
        }
        .jobster-candidate-timeline .jobster-timeline-icon i {
            font-size: 16px;
            color: #212529;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 16px;
        }
    </style>
</head>

<body>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="row align-items-center">
                <div class="col-lg-5">
                <div class="resume-base bg-primary user-dashboard-info-box p-4">

                    <div class="about-candidate border-top">
                    <div class="candidate-info">
                       <h1 class="text-white">Name: {{ucfirst($user->details->fullname)}}</h1>
                    </div>
                    <div class="candidate-info">
                    <h4 class="text-white">E-mail: {{$user->details->email}}</h4>
                    </div>
                    <div class="candidate-info">
                    <h4 class="text-white">Phone: {{$user->details->phone}}</h4>
                    </div>
                    <div class="candidate-info">
                    <h4 class="text-white">Address: {{$user->details->address}}</h4>
                    </div>
                    
                    
                    </div>
                    <h5 class="text-white">Summary</h5>
                    <!-- summaray -->
                    <div class="profile">
                       <h3><p>{{$user->details->summary}}</p></h3>
                    </div>  
                    <!--endsummary -->
                    <div class="mt-0">
                    <h5 class="text-white">Professional Skill:</h5>
                    @foreach($user->skills as $skill)   
                    <div class="progress bg-dark">
                      
                        <div class="progress-bar bg-white" role="progressbar" style="width:{{($skill->rating)*10}}%" aria-valuenow="{{$skill->rating}}" aria-valuemin="1" aria-valuemax="10">
                        <div class="progress-bar-title text-white">{{$skill->name}}</div>
                        <span class="progress-bar-number text-white">{{$skill->rating}}</span>
                        </div>
                    </div>
                 @endforeach   
                    </div>
                </div>
                </div>
                <div class="col-lg-7">
                <div class="resume-experience">
                    <div class="timeline-box">
                    <h5 class="resume-experience-title">Education:</h5>
                    @foreach($user->education as $e)
                    <div class="jobster-candidate-timeline">
                      
                        <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                            <div class="dashboard-timeline-info">
                            <span class="jobster-timeline-time">{{$e->graduation_start_date}} - {{$e->graduation_end_date}}</span>
                            <h6 class="mb-2">{{$e->degree}}</h6>
                            <span>- {{$e->school_name}}</span>
                            
                            </div>
                        </div>
                        
                        
                        
                        
                    </div>
                    </div>
                    @endforeach 
                    
                    <div class="timeline-box mt-4">
                    <h5 class="resume-experience-title">Work &amp; Experience:</h5>
                    @foreach($user->experiences as $work)
                    <div class="jobster-candidate-timeline">
                      
                        <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                            <div class="dashboard-timeline-info">
                            <span class="jobster-timeline-time">{{$work->start_date}} - {{$work->end_date}}</span>
                            <h6 class="mb-2">{{$work->job_title}}</h6>
                            <span>- {{$work->employer}}</span>
                            
                            </div>
                        </div>          
                    </div>
                    </div>
                    @endforeach 

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

</body>

</html>